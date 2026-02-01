@extends('layouts.app')

{{-- ===== SEO Meta Tags ===== --}}
@section('title', page_seo('blog', 'title', 'Blog – Fusion Logic'))
@section('meta_description', page_seo('blog', 'meta_description', 'Read the latest insights, tips, and trends in AI, technology, and digital transformation from Fusion Logic.'))
@section('canonical', page_seo('blog', 'canonical', url('/blog')))

{{-- ===== Open Graph Tags ===== --}}
@section('og_title', page_seo('blog', 'og_title', 'Blog – Fusion Logic'))
@section('og_description', page_seo('blog', 'og_description', 'Read the latest insights, tips, and trends in AI, technology, and digital transformation.'))
@section('og_image', page_seo('blog', 'og_image'))

{{-- ===== Twitter Card Tags ===== --}}
@section('twitter_title', page_seo('blog', 'twitter_title', 'Blog – Fusion Logic'))
@section('twitter_description', page_seo('blog', 'twitter_description', 'Read the latest insights, tips, and trends in AI, technology, and digital transformation.'))
@section('twitter_image', page_seo('blog', 'twitter_image'))

@section('content')

@include('partials.back-to-top')

    <div class="body_wrap o-clip">
          
         <div class="body-overlay"></div>
         <!-- main area start -->
         <main>
             
            <!-- hero start -->
            <section class="breadcrumb bg_img" data-background="{{ asset('img/bg/hero_bg.png')  }}">
                <div class="container">
                    <div class="breadcrumb__content">
                        <ul class="breadcrumb__list clearfix list-unstyled">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item">Blog</li>
                        </ul>
                        <h2 class="breadcrumb__title">Blog</h2>
                    </div>
                </div>
            </section>
            <!-- hero end -->


            <!-- blog content start  -->
            <section class="blog_details_section pt-50">
                <div class="container">
                    <div class="row mt-none-50 g-0 align-items-start">
                        <div class="col-lg-8 mt-50">
                            <div class="blog_details_content list-page">
                                @forelse($blogs as $blog)
                                <div class="blog_details_item img-hove-effect ul_li xb-border">
                                    <div class="xb-item--img xb-img">
                                        @if($blog->featured_image)
                                            <a href="{{ route('blog.show', $blog->slug) }}">
                                                <img src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $blog->featured_image }}" alt="{{ $blog->title }}">
                                            </a>
                                        @else
                                            {{-- Fallback image if no featured image --}}
                                            <a href="{{ route('blog.show', $blog->slug) }}">
                                                <img src="{{ asset('img/blog/img02.jpg') }}" alt="{{ $blog->title }}">
                                            </a>
                                        @endif
                                    </div>
                                    <div class="xb-item--holder">
                                        @if($blog->category)
                                        <a href="{{ route('blog.category', $blog->category->slug) }}" class="xb-item--category">#{{ $blog->category->name }}</a>
                                        @endif
                                        <h3 class="xb-item--title border-effect-2">
                                            <a href="{{ route('blog.show', $blog->slug) }}">{{ Str::limit($blog->title, 60) }}</a>
                                        </h3>
                                        @if($blog->excerpt)
                                        <span class="xb-item--content">{{ Str::limit($blog->excerpt, 80) }}</span>
                                        @endif
                                        <div class="xb-item--button mt-40">
                                            <a class="thm-btn agency-btn" href="{{ route('blog.show', $blog->slug) }}">
                                                <span class="text">Read more</span>
                                                <span class="arrow">
                                                    <span class="arrow-icon">
                                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3.7832" y="13.4631" width="14.3104" height="1.81719" transform="rotate(-40.2798 3.7832 13.4631)" fill="white" />
                                                        <rect x="5.80664" y="4.60498" width="1.81719" height="1.81719" transform="rotate(-40.2798 5.80664 4.60498)" fill="white" />
                                                        <rect x="8.36719" y="4.81616" width="1.81719" height="1.81719" transform="rotate(-40.2798 8.36719 4.81616)" fill="white" />
                                                        <rect x="10.9258" y="5.02759" width="1.81719" height="1.81719" transform="rotate(-40.2798 10.9258 5.02759)" fill="white" />
                                                        <rect x="13.2773" y="7.80029" width="1.81719" height="1.81719" transform="rotate(-40.2798 13.2773 7.80029)" fill="white" />
                                                        <rect x="13.0664" y="10.3616" width="1.81719" height="1.81719" transform="rotate(-40.2798 13.0664 10.3616)" fill="white" />
                                                        <rect x="12.8555" y="12.9229" width="1.81719" height="1.81719" transform="rotate(-40.2798 12.8555 12.9229)" fill="white" />
                                                        </svg>
                                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3.7832" y="13.4631" width="14.3104" height="1.81719" transform="rotate(-40.2798 3.7832 13.4631)" fill="white" />
                                                        <rect x="5.80664" y="4.60498" width="1.81719" height="1.81719" transform="rotate(-40.2798 5.80664 4.60498)" fill="white" />
                                                        <rect x="8.36719" y="4.81616" width="1.81719" height="1.81719" transform="rotate(-40.2798 8.36719 4.81616)" fill="white" />
                                                        <rect x="10.9258" y="5.02759" width="1.81719" height="1.81719" transform="rotate(-40.2798 10.9258 5.02759)" fill="white" />
                                                        <rect x="13.2773" y="7.80029" width="1.81719" height="1.81719" transform="rotate(-40.2798 13.2773 7.80029)" fill="white" />
                                                        <rect x="13.0664" y="10.3616" width="1.81719" height="1.81719" transform="rotate(-40.2798 13.0664 10.3616)" fill="white" />
                                                        <rect x="12.8555" y="12.9229" width="1.81719" height="1.81719" transform="rotate(-40.2798 12.8555 12.9229)" fill="white" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="alert alert-info">
                                    <p>No blog posts found. Check back soon for new content!</p>
                                </div>
                                @endforelse
                                
                                {{-- Pagination --}}
                                @if($blogs->hasPages())
                                <ul class="blog-pagination ul_li">
                                    {{-- Previous Page Link --}}
                                    @if ($blogs->onFirstPage())
                                        <li class="disabled"><a class="xb-border" href="#"><i class="fas fa-chevron-double-left"></i></a></li>
                                    @else
                                        <li><a class="xb-border" href="{{ $blogs->previousPageUrl() }}"><i class="fas fa-chevron-double-left"></i></a></li>
                                    @endif

                                    {{-- Pagination Elements --}}
                                    @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                        @if ($page == $blogs->currentPage())
                                            <li class="active"><a class="xb-border" href="#">{{ $page }}</a></li>
                                        @else
                                            <li><a class="xb-border" href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach

                                    {{-- Next Page Link --}}
                                    @if ($blogs->hasMorePages())
                                        <li><a class="xb-border" href="{{ $blogs->nextPageUrl() }}"><i class="fas fa-chevron-double-right"></i></a></li>
                                    @else
                                        <li class="disabled"><a class="xb-border" href="#"><i class="fas fa-chevron-double-right"></i></a></li>
                                    @endif
                                </ul>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 mt-50">
                            <div class="sidebar">
                                {{-- Search Widget --}}
                                <div class="sidebar_widget">
                                    <h3 class="sidebar_widget_title">Search</h3>
                                    <form action="{{ route('blog') }}" method="GET">
                                        <div class="form-group">
                                            <input class="form-control" type="search" name="search" placeholder="Search blogs..." value="{{ request('search') }}">
                                            <button type="submit" class="search_icon">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.002 5H20.002" stroke="#00020F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14.002 8H17.002" stroke="#00020F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M21.002 11.5C21.002 16.75 16.752 21 11.502 21C6.25195 21 2.00195 16.75 2.00195 11.5C2.00195 6.25 6.25195 2 11.502 2" stroke="#00020F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M22.002 22L20.002 20" stroke="#00020F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                
                                {{-- Latest Posts Widget --}}
                                @if($latestPosts && $latestPosts->count() > 0)
                                <div class="sidebar_widget">
                                    <h3 class="sidebar_widget_title">Latest posts</h3>
                                    <ul class="recent_post_block list-unstyled">
                                        @foreach($latestPosts as $latestPost)
                                        <li class="recent_post_item xb-border">
                                            <h3 class="post-title border-effect-2">
                                                <a href="{{ route('blog.show', $latestPost->slug) }}">
                                                    {{ Str::limit($latestPost->title, 60) }}
                                                </a>
                                            </h3>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                
                                {{-- Categories Widget --}}
                                @if($categories && $categories->count() > 0)
                                <div class="sidebar_widget">
                                    <h3 class="sidebar_widget_title">Categories</h3>
                                    <ul class="category_list_block list-unstyled">
                                        @foreach($categories as $category)
                                        <li>
                                            <a href="{{ route('blog.category', $category->slug) }}">
                                                <span><i class="far fa-arrow-right"></i> {{ $category->name }}</span>
                                                <span>({{ $category->blogs_count ?? 0 }})</span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog content end -->

            
            

            

            
            
         </main>
         <!-- main area end -->
        
    </div>

@endsection
