<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;
use App\Models\BrandLogo;
use Illuminate\Support\Facades\DB;
use App\Models\Portfolio;
use App\Models\WhyChooseUs;
use App\Models\HeroFeatureCard;
use App\Models\CaseStudy;
use App\Models\Industry;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Footer;
use App\Models\WhoWeAre;

class HomeController extends Controller
{
    public function home()
    {

        return view('comingsoon');
        $brands = BrandLogo::active()->ordered()->get();

        $activeBanner = \App\Models\Banner::where('is_active', true)
            ->orderBy('order')
            ->first();

        $portfolios = Portfolio::published()
            ->ordered()
            ->limit(4)
            ->get();

        // Hero Feature Cards (previously Why Choose Us)
        $heroFeatureCards = HeroFeatureCard::where('is_active', true)
            ->orderBy('sort_order')
            ->limit(3)
            ->get();

        // Keep old variable for backward compatibility in other sections if needed
        $whyChooseUsItems = WhyChooseUs::where('is_active', true)
        ->orderBy('sort_order')
        ->get();

        $caseStudies = CaseStudy::published()
        ->featured()               // optional but recommended
        ->latest('published_at')
        ->take(2)                  // matches your current UI
        ->get();

        $industries = Industry::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $testimonials = Testimonial::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $faqs = Faq::active()
            ->ordered()
            ->get();

        $blogs = Blog::published()
            ->latest()
            ->with('category')
            ->limit(4)
            ->get();

        $whoWeAreItems = WhoWeAre::active()
            ->ordered()
            ->get();

        $achievements = Achievement::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('home', compact('achievements','brands','portfolios','heroFeatureCards','whyChooseUsItems','caseStudies','industries','testimonials','faqs','blogs','whoWeAreItems'));
    }

    public function about()
    {
        $brands = BrandLogo::active()->ordered()->get();

        $whyChooseUsItems = WhyChooseUs::where('is_active', true)
        ->orderBy('sort_order')
        ->get();

        // return view('about');
        return view('about', compact('brands','whyChooseUsItems'));
    }

    public function contact()
    {

        $whyChooseUsItems = WhyChooseUs::where('is_active', true)
        ->orderBy('sort_order')
        ->get();

        $footer = Footer::getActive();

        $services = Service::where('is_active', true)
            ->orderBy('title')
            ->get();

        $achievements = Achievement::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        // return view('about');
        return view('contact', compact('footer','achievements','whyChooseUsItems','services'));
    }

    public function service()
    {
        $brands = BrandLogo::active()->ordered()->get();

        $services = Service::where('is_active', true)
            ->orderBy('title')
            ->get();

        // return view('about');
        return view('service', compact('brands','services'));
    }

    public function serviceDetail($slug)
    {
        $service = Service::where('slug', $slug)
            ->where('is_active', true)
            ->published()
            ->with('category')
            ->firstOrFail();

        return view('service-detail', compact('service'));
    }

}
