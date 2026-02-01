<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of blog posts
     */
    public function index(Request $request)
    {
        $query = Blog::published()
            ->latest()
            ->with('category');

        // Filter by category if provided
        if ($request->has('category') && $request->category) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Search functionality
        if ($request->has('search') && $request->search) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', "%{$searchTerm}%")
                  ->orWhere('excerpt', 'like', "%{$searchTerm}%")
                  ->orWhere('content', 'like', "%{$searchTerm}%");
            });
        }

        // Paginate results
        $blogs = $query->paginate(9);

        // Get all active categories with blog counts
        $categories = Category::active()
            ->withCount(['blogs' => function ($query) {
                $query->published();
            }])
            ->ordered()
            ->get();

        // Get latest posts for sidebar
        $latestPosts = Blog::published()
            ->latest()
            ->limit(3)
            ->get();

        return view('blog', compact('blogs', 'categories', 'latestPosts'));
    }

    /**
     * Display the specified blog post
     */
    public function show($slug)
    {
        // Find the blog post by slug
        $blog = Blog::where('slug', $slug)
            ->published()
            ->with('category')
            ->firstOrFail();

        // Increment views
        $blog->incrementViews();

        // Get related blogs (same category, excluding current)
        $relatedBlogs = Blog::published()
            ->where('category_id', $blog->category_id)
            ->where('id', '!=', $blog->id)
            ->latest()
            ->limit(3)
            ->get();

        // Get all active categories with blog counts
        $categories = Category::active()
            ->withCount(['blogs' => function ($query) {
                $query->published();
            }])
            ->ordered()
            ->get();

        // Get latest posts for sidebar
        $latestPosts = Blog::published()
            ->latest()
            ->limit(3)
            ->get();

        return view('blog-details', compact('blog', 'relatedBlogs', 'categories', 'latestPosts'));
    }

    /**
     * Display blogs by category
     */
    public function category($slug)
    {
        $category = Category::where('slug', $slug)
            ->active()
            ->firstOrFail();

        $blogs = Blog::published()
            ->where('category_id', $category->id)
            ->latest()
            ->with('category')
            ->paginate(9);

        // Get all active categories with blog counts
        $categories = Category::active()
            ->withCount(['blogs' => function ($query) {
                $query->published();
            }])
            ->ordered()
            ->get();

        // Get latest posts for sidebar
        $latestPosts = Blog::published()
            ->latest()
            ->limit(3)
            ->get();

        return view('blog', compact('blogs', 'category', 'categories', 'latestPosts'));
    }
}
