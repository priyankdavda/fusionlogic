@extends('layouts.app')

{{-- ===== SEO Meta Tags ===== --}}
@section('title', $blog->meta_title ?? $blog->title . ' – Fusion Logic')
@section('meta_description', $blog->meta_description ?? Str::limit(strip_tags($blog->excerpt ?? $blog->content), 160))
@section('canonical', $blog->canonical ?? route('blog.show', $blog->slug))

{{-- ===== Open Graph Tags ===== --}}
@section('og_title', $blog->og_title ?? $blog->title)
@section('og_description', $blog->og_description ?? Str::limit(strip_tags($blog->excerpt ?? $blog->content), 200))
@section('og_image', $blog->og_image ? rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $blog->og_image : ($blog->featured_image ? rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $blog->featured_image : ''))

{{-- ===== Twitter Card Tags ===== --}}
@section('twitter_title', $blog->twitter_title ?? $blog->title)
@section('twitter_description', $blog->twitter_description ?? Str::limit(strip_tags($blog->excerpt ?? $blog->content), 200))
@section('twitter_image', $blog->twitter_image ? rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $blog->twitter_image : ($blog->featured_image ? rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $blog->featured_image : ''))

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
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                            <li class="breadcrumb-item">{{ Str::limit($blog->title, 30) }}</li>
                        </ul>
                        <h2 class="breadcrumb__title">Blog Details</h2>
                    </div>
                </div>
            </section>
            <!-- hero end -->
            
          <!-- blog content start  -->
        <section class="blog_details_section pt-40">
            <div class="container">
                @if($blog->featured_image)
                <div class="single-item-image mb-70">
                    <img src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $blog->featured_image }}" alt="{{ $blog->title }}">
                </div>
                @endif
                
                <div class="item_details_content pb-80">
                    <ul class="post_meta ul_li list-unstyled mb-25">
                        @if($blog->category)
                        <li>
                            <a href="{{ route('blog.category', $blog->category->slug) }}">
                                <span class="meta_label1">#{{ $blog->category->name }}</span>
                            </a>
                        </li>
                        @endif
                        <li>
                            <a href="#!">
                                <span class="meta_icon">
                                    <img src="{{ asset('img/icon/calendar-icon.svg') }}" alt="Icon Calendar">
                                </span>
                                <span class="meta_label">Last Update: {{ $blog->published_at->format('d/m/Y') }}</span>
                            </a>
                        </li>
                        @if($blog->views)
                        <li>
                            <span class="meta_icon">
                                <i class="far fa-eye"></i>
                            </span>
                            <span class="meta_label">{{ $blog->views }} views</span>
                        </li>
                        @endif
                        <li>
                            <span class="meta_icon">
                                <i class="far fa-clock"></i>
                            </span>
                            <span class="meta_label">{{ $blog->reading_time }}</span>
                        </li>
                    </ul>
                    
                    <h2 class="details-content-title mb-15">{{ $blog->title }}</h2>
                    
                    @if($blog->excerpt)
                    <p class="mb-35">{{ $blog->excerpt }}</p>
                    @endif
                    
                    <div class="post-meta-wrap">
                        <div class="row mt-none-15">
                            <div class="col-md-6 mt-15">
                                <ul class="post_meta list-unstyled ul_li">
                                    @if($blog->author)
                                    <li>
                                        <a href="#!">
                                            <span class="meta_icon">
                                                <img src="{{ asset('img/icon/user-gradient-icon.svg') }}" alt="Icon User">
                                            </span>
                                            <span class="meta_label">by {{ $blog->author }}</span>
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-none-30 g-0 align-items-start">
                    <div class="col-lg-8 mt-30">
                        <div class="blog_details_content">
                            {{-- Blog Content - Dynamic from database --}}
                            <div class="blog-content-body">
                                {!! $blog->content !!}
                            </div>
                            
                            {{-- Static Author Block - Keep static as no author model exists --}}
                            @if($blog->author)
                            <div class="post-block-wrap mb-50 mt-50">
                                <div class="postabmin_block xb-border ul_li">
                                    <div class="admin_image">
                                        {{-- Static placeholder image --}}
                                        <img src="{{ asset('img/blog/author-img.png') }}" alt="{{ $blog->author }}">
                                    </div>
                                    <div class="admin_content">
                                        <h4 class="admin_name">{{ $blog->author }}</h4>
                                        <span class="admin_designation">Content Author</span>
                                        {{-- Static description as no author bio exists in model --}}
                                        <p>A content author dedicated to creating valuable insights and knowledge for our readers.</p>
                                    </div>
                                </div>
                            </div>
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
                                        <input class="form-control" type="search" name="search" placeholder="Search blogs...">
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
                
                {{-- Related Blogs Section --}}
                @if($relatedBlogs && $relatedBlogs->count() > 0)
                <div class="related-blog pt-10">
                    <h2 class="related-blog-title">Related Articles</h2>
                    <div class="row mt-none-30">
                        @foreach($relatedBlogs as $relatedBlog)
                        <div class="col-lg-4 col-md-6 mt-20">
                            <div class="xb-blog-item xb-small-blog-item">
                                <div class="xb-item--inner img-hove-effect xb-border">
                                    <div class="xb-img">
                                        @if($relatedBlog->featured_image)
                                            <a href="{{ route('blog.show', $relatedBlog->slug) }}">
                                                <img src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $relatedBlog->featured_image }}" alt="{{ $relatedBlog->title }}">
                                            </a>
                                        @else
                                            {{-- Fallback image --}}
                                            <a href="{{ route('blog.show', $relatedBlog->slug) }}">
                                                <img src="{{ asset('img/blog/img02.jpg') }}" alt="{{ $relatedBlog->title }}">
                                            </a>
                                        @endif
                                    </div>
                                    <div class="xb-item--holder">
                                        <ul class="xb-item--meta list-unstyled ul_li">
                                            @if($relatedBlog->category)
                                            <li>
                                                <img src="{{ asset('img/icon/blog-icon01.svg') }}" alt="icon">
                                                {{ $relatedBlog->category->name }}
                                            </li>
                                            @endif
                                            <li>
                                                <img src="{{ asset('img/icon/blog-icon02.svg') }}" alt="icon">
                                                {{ $relatedBlog->published_at->format('M d, Y') }}
                                            </li>
                                        </ul>
                                        <h2 class="xb-item--title border-effect-2">
                                            <a href="{{ route('blog.show', $relatedBlog->slug) }}">
                                                {{ Str::limit($relatedBlog->title, 60) }}
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </section>
        <!-- blog content end -->
  
            
         </main>
         <!-- main area end -->
        
    </div>

@endsection
