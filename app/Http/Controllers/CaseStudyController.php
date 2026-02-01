<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    /**
     * Display a listing of case studies
     */
    public function index()
    {
        $caseStudies = CaseStudy::published()
            ->latest('published_at')
            ->paginate(8);

        return view('case-studies', compact('caseStudies'));
    }

    /**
     * Display the specified case study
     */
    public function show($slug)
    {
        // Find the case study by slug
        $caseStudy = CaseStudy::where('slug', $slug)
            ->published()
            ->firstOrFail();

        // Increment view count
        $caseStudy->incrementViews();

        // Get related case studies (max 3, excluding current)
        $relatedCaseStudies = CaseStudy::published()
            ->where('id', '!=', $caseStudy->id)
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('case-study-details', compact('caseStudy', 'relatedCaseStudies'));
    }
}
