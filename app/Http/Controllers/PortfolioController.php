<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of portfolio items
     */
    public function index()
    {
        $portfolios = Portfolio::published()
            ->ordered()
            ->paginate(12);

        return view('portfolio', compact('portfolios'));
    }

    /**
     * Display the specified portfolio item
     */
    public function show($slug)
    {
        // Find the portfolio item by slug
        $portfolio = Portfolio::where('slug', $slug)
            ->published()
            ->firstOrFail();

        // Get related portfolios (max 3, excluding current)
        $relatedPortfolios = Portfolio::published()
            ->where('id', '!=', $portfolio->id)
            ->ordered()
            ->limit(3)
            ->get();

        return view('portfolio-details', compact('portfolio', 'relatedPortfolios'));
    }
}
