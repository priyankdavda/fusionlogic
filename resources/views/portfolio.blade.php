@extends('layouts.app')

{{-- ===== SEO Meta Tags ===== --}}
@section('title', page_seo('portfolio', 'title', 'Portfolio – Fusion Logic'))
@section('meta_description', page_seo('portfolio', 'meta_description', 'Explore our portfolio of successful AI and IT projects. See how we help businesses transform with intelligent solutions.'))
@section('canonical', page_seo('portfolio', 'canonical', url('/portfolio')))

{{-- ===== Open Graph Tags ===== --}}
@section('og_title', page_seo('portfolio', 'og_title', 'Portfolio – Fusion Logic'))
@section('og_description', page_seo('portfolio', 'og_description', 'Explore our portfolio of successful AI and IT projects.'))
@section('og_image', page_seo('portfolio', 'og_image'))

{{-- ===== Twitter Card Tags ===== --}}
@section('twitter_title', page_seo('portfolio', 'twitter_title', 'Portfolio – Fusion Logic'))
@section('twitter_description', page_seo('portfolio', 'twitter_description', 'Explore our portfolio of successful AI and IT projects.'))
@section('twitter_image', page_seo('portfolio', 'twitter_image'))

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
                            <li class="breadcrumb-item">Portfolio</li>
                        </ul>
                        <h2 class="breadcrumb__title">Portfolio</h2>
                    </div>
                </div>
            </section>
            <!-- hero end -->

            <!-- service start -->
            <section class="service pos-rel mt-40">
                <div class="container mxw-1650">
                    <div class="xb-project-wrap xb-project-wrap_2">
                        @forelse($portfolios as $portfolio)
                        <div class="xb-project-item">
                            <div class="xb-project-content">
                                <div class="xb-item--inner xb-border">
                                    <h2 class="xb-item--title">{{ Str::limit($portfolio->title, 50) }}</h2>
                                    <p class="xb-item--content clr-white">{{ $portfolio->short_description }}</p>
                                    <div class="xb-item--btn mt-40">
                                        <a class="thm-btn agency-btn" href="{{ route('portfolio.show', $portfolio->slug) }}">
                                            <span class="text">
                                                read more
                                            </span>
                                            <span class="arrow">
                                                <span class="arrow-icon">
                                                    @include('partials.arrow-svg')
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="xb-project-img img-hove-effect">
                                <div class="xb-img">
                                    @if($portfolio->featured_image)
                                        {{-- Multiple image tags required for hover animation effect --}}
                                        <a href="{{ route('portfolio.show', $portfolio->slug) }}">
                                            <img src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $portfolio->featured_image }}" alt="{{ $portfolio->title }}">
                                        </a>
                                        <a href="{{ route('portfolio.show', $portfolio->slug) }}">
                                            <img src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $portfolio->featured_image }}" alt="{{ $portfolio->title }}">
                                        </a>
                                        <a href="{{ route('portfolio.show', $portfolio->slug) }}">
                                            <img src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $portfolio->featured_image }}" alt="{{ $portfolio->title }}">
                                        </a>
                                        <a href="{{ route('portfolio.show', $portfolio->slug) }}">
                                            <img src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $portfolio->featured_image }}" alt="{{ $portfolio->title }}">
                                        </a>
                                    @else
                                        {{-- Fallback images - Multiple tags required for hover animation effect --}}
                                        <a href="{{ route('portfolio.show', $portfolio->slug) }}">
                                            <img src="{{ asset('img/project/img02.jpg') }}" alt="{{ $portfolio->title }}">
                                        </a>
                                        <a href="{{ route('portfolio.show', $portfolio->slug) }}">
                                            <img src="{{ asset('img/project/img02.jpg') }}" alt="{{ $portfolio->title }}">
                                        </a>
                                        <a href="{{ route('portfolio.show', $portfolio->slug) }}">
                                            <img src="{{ asset('img/project/img02.jpg') }}" alt="{{ $portfolio->title }}">
                                        </a>
                                        <a href="{{ route('portfolio.show', $portfolio->slug) }}">
                                            <img src="{{ asset('img/project/img02.jpg') }}" alt="{{ $portfolio->title }}">
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12">
                            <div class="alert alert-info">
                                <p>No portfolio items found. Check back soon for new projects!</p>
                            </div>
                        </div>
                        @endforelse
                    </div>
                    
                    {{-- Pagination --}}
                    @if($portfolios->hasPages())
                    <ul class="blog-pagination ul_li">
                        {{-- Previous Page Link --}}
                        @if ($portfolios->onFirstPage())
                            <li class="disabled"><a class="xb-border" href="#"><i class="fas fa-chevron-double-left"></i></a></li>
                        @else
                            <li><a class="xb-border" href="{{ $portfolios->previousPageUrl() }}"><i class="fas fa-chevron-double-left"></i></a></li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($portfolios->getUrlRange(1, $portfolios->lastPage()) as $page => $url)
                            @if ($page == $portfolios->currentPage())
                                <li class="active"><a class="xb-border" href="#">{{ $page }}</a></li>
                            @else
                                <li><a class="xb-border" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($portfolios->hasMorePages())
                            <li><a class="xb-border" href="{{ $portfolios->nextPageUrl() }}"><i class="fas fa-chevron-double-right"></i></a></li>
                        @else
                            <li class="disabled"><a class="xb-border" href="#"><i class="fas fa-chevron-double-right"></i></a></li>
                        @endif
                    </ul>
                    @endif
                </div>
            </section>
            <!-- service end -->





         </main>
         <!-- main area end -->

    </div>

@endsection
