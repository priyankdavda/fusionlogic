<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandLogo;
use Illuminate\Support\Facades\DB;
use App\Models\Portfolio;
use App\Models\WhyChooseUs;
use App\Models\CaseStudy;
use App\Models\Industry;
use App\Models\Testimonial;
use App\Models\Faq;

class HomeController extends Controller
{
    public function home()
    {
        $brands = BrandLogo::active()->ordered()->get();
        //
        $portfolios = Portfolio::published()
            ->ordered()
            ->limit(4)
            ->get();

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

        return view('home', compact('brands','portfolios','whyChooseUsItems','caseStudies','industries','testimonials','faqs'));
    }

    public function about()
    {
        return view('about');
    }
    
}
