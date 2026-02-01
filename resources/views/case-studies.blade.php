@extends('layouts.app')

{{-- ===== SEO Meta Tags ===== --}}
@section('title', page_seo('case-studies', 'title', 'Case Studies – Fusion Logic'))
@section('meta_description', page_seo('case-studies', 'meta_description', 'Explore our case studies showcasing successful projects and client success stories.'))
@section('canonical', page_seo('case-studies', 'canonical', url('/case-studies')))

{{-- ===== Open Graph Tags ===== --}}
@section('og_title', page_seo('case-studies', 'og_title', 'Case Studies – Fusion Logic'))
@section('og_description', page_seo('case-studies', 'og_description', 'Explore our case studies showcasing successful projects and client success stories.'))
@section('og_image', page_seo('case-studies', 'og_image'))

{{-- ===== Twitter Card Tags ===== --}}
@section('twitter_title', page_seo('case-studies', 'twitter_title', 'Case Studies – Fusion Logic'))
@section('twitter_description', page_seo('case-studies', 'twitter_description', 'Explore our case studies showcasing successful projects and client success stories.'))
@section('twitter_image', page_seo('case-studies', 'twitter_image'))

@section('content')

@include('partials.back-to-top')

<div class="body_wrap o-clip">

    <div class="body-overlay"></div>
    <!-- main area start -->
    <main>

        <!-- hero start -->
        <section class="breadcrumb bg_img" data-background="{{ asset('img/bg/bootcamp-bg.png') }}">
            <div class="container">
                <div class="breadcrumb__content">
                    <ul class="breadcrumb__list clearfix list-unstyled">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                        <li class="breadcrumb-item">Case Studies</li>
                    </ul>
                    <h2 class="breadcrumb__title">Case Studies</h2>
                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- case study start -->
        <section class="case-study pos-rel bg_img full-box mt-50" data-background="{{ asset('img/bg/service-gradient-bg.png') }}">
            <div class="container">
                <div class="row mt-none-30">
                    @forelse($caseStudies as $caseStudy)
                    <div class="col-lg-6 mb-10">
                        <div class="container">
                            <!-- Top Row: Image + Flag -->
                            <div class="row align-items-start mb-4 case-studies">
                                <div class="col-md-9">
                                    @if($caseStudy->featured_image)
                                        <img src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $caseStudy->featured_image }}" 
                                             alt="{{ $caseStudy->title }}" 
                                             class="img-fluid rounded shadow">
                                    @else
                                        {{-- Static fallback image if featured_image not available --}}
                                        <img src="{{ asset('img/case-study/ga.webp') }}" 
                                             alt="{{ $caseStudy->title }}" 
                                             class="img-fluid rounded shadow">
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    @if($caseStudy->industry)
                                        <h3 class="industry-tag">{{ $caseStudy->industry }}</h3>
                                    @endif
                                    
                                    {{-- Country flag - Static as flag images are not in model --}}
                                    @if($caseStudy->country)
                                        {{-- Note: Flag image path is static - would need flag mapping logic for dynamic flags --}}
                                        <img src="{{ asset('img/case-study/india-flag.png') }}" 
                                             alt="{{ $caseStudy->country }} Flag">
                                    @endif
                                    
                                    <div class="project-name">
                                        <h5 class="fw-bold mb-1">Project</h5>
                                        <p class="mb-0 project-link">{{ Str::limit($caseStudy->title, 30) }}</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="xb-item--btn mt-30 mb-10">
                                        <a class="thm-btn agency-btn" href="{{ route('case-studies.show', $caseStudy->slug) }}">
                                            <span class="text">
                                                read more
                                            </span>
                                            <span class="arrow">
                                                <span class="arrow-icon">
                                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="5.23193" y="17.3291" width="17.888" height="2.27149" transform="rotate(-40.2798 5.23193 17.3291)" fill="white"></rect>
                                                        <rect x="7.75757" y="6.25624" width="2.27149" height="2.27149" transform="rotate(-40.2798 7.75757 6.25624)" fill="white"></rect>
                                                        <rect x="10.9587" y="6.5202" width="2.27149" height="2.27149" transform="rotate(-40.2798 10.9587 6.5202)" fill="white"></rect>
                                                        <rect x="14.1606" y="6.78448" width="2.27149" height="2.27149" transform="rotate(-40.2798 14.1606 6.78448)" fill="white"></rect>
                                                        <rect x="17.0977" y="10.2501" width="2.27149" height="2.27149" transform="rotate(-40.2798 17.0977 10.2501)" fill="white"></rect>
                                                        <rect x="16.8337" y="13.4521" width="2.27149" height="2.27149" transform="rotate(-40.2798 16.8337 13.4521)" fill="white"></rect>
                                                        <rect x="16.5693" y="16.6534" width="2.27149" height="2.27149" transform="rotate(-40.2798 16.5693 16.6534)" fill="white"></rect>
                                                    </svg>
                                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="5.23193" y="17.3291" width="17.888" height="2.27149" transform="rotate(-40.2798 5.23193 17.3291)" fill="white"></rect>
                                                        <rect x="7.75757" y="6.25624" width="2.27149" height="2.27149" transform="rotate(-40.2798 7.75757 6.25624)" fill="white"></rect>
                                                        <rect x="10.9587" y="6.5202" width="2.27149" height="2.27149" transform="rotate(-40.2798 10.9587 6.5202)" fill="white"></rect>
                                                        <rect x="14.1606" y="6.78448" width="2.27149" height="2.27149" transform="rotate(-40.2798 14.1606 6.78448)" fill="white"></rect>
                                                        <rect x="17.0977" y="10.2501" width="2.27149" height="2.27149" transform="rotate(-40.2798 17.0977 10.2501)" fill="white"></rect>
                                                        <rect x="16.8337" y="13.4521" width="2.27149" height="2.27149" transform="rotate(-40.2798 16.8337 13.4521)" fill="white"></rect>
                                                        <rect x="16.5693" y="16.6534" width="2.27149" height="2.27149" transform="rotate(-40.2798 16.5693 16.6534)" fill="white"></rect>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <div class="alert alert-info">
                            <p>No case studies found. Check back soon for new success stories!</p>
                        </div>
                    </div>
                    @endforelse

                    {{-- Pagination --}}
                    @if($caseStudies->hasPages())
                    <ul class="blog-pagination ul_li">
                        {{-- Previous Page Link --}}
                        @if ($caseStudies->onFirstPage())
                            <li class="disabled"><a class="xb-border" href="#"><i class="fas fa-chevron-double-left"></i></a></li>
                        @else
                            <li><a class="xb-border" href="{{ $caseStudies->previousPageUrl() }}"><i class="fas fa-chevron-double-left"></i></a></li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($caseStudies->getUrlRange(1, $caseStudies->lastPage()) as $page => $url)
                            @if ($page == $caseStudies->currentPage())
                                <li class="active"><a class="xb-border" href="#">{{ $page }}</a></li>
                            @else
                                <li><a class="xb-border" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($caseStudies->hasMorePages())
                            <li><a class="xb-border" href="{{ $caseStudies->nextPageUrl() }}"><i class="fas fa-chevron-double-right"></i></a></li>
                        @else
                            <li class="disabled"><a class="xb-border" href="#"><i class="fas fa-chevron-double-right"></i></a></li>
                        @endif
                    </ul>
                    @endif
                </div>
            </div>
        </section>
        <!-- case study end -->

    </main>
    <!-- main area end -->

</div>

@endsection
