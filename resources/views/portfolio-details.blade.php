@extends('layouts.app')

{{-- ===== SEO Meta Tags ===== --}}
@section('title', $portfolio->meta_title ?? $portfolio->title . ' – Fusion Logic')
@section('meta_description', $portfolio->meta_description ?? Str::limit(strip_tags($portfolio->short_description ?? $portfolio->full_description), 160))
@section('canonical', route('portfolio.show', $portfolio->slug))

{{-- ===== Open Graph Tags ===== --}}
@section('og_title', $portfolio->meta_title ?? $portfolio->title)
@section('og_description', $portfolio->meta_description ?? Str::limit(strip_tags($portfolio->short_description ?? $portfolio->full_description), 200))
@section('og_image', $portfolio->featured_image ? rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $portfolio->featured_image : '')

{{-- ===== Twitter Card Tags ===== --}}
@section('twitter_title', $portfolio->meta_title ?? $portfolio->title)
@section('twitter_description', $portfolio->meta_description ?? Str::limit(strip_tags($portfolio->short_description ?? $portfolio->full_description), 200))
@section('twitter_image', $portfolio->featured_image ? rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $portfolio->featured_image : '')

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
                        <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li class="breadcrumb-item">{{ Str::limit($portfolio->title, 30) }}</li>
                    </ul>
                    <h2 class="breadcrumb__title">Portfolio Details</h2>
                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- project-details start -->
        <section class="project-details pb-0 mt-30">
            <div class="container">
                <h2 class="details-content-title mb-0">{{ $portfolio->title }}</h2>
                <div class="pro-descriptions">
                    {!! $portfolio->full_description !!}
                </div>
                
                {{-- Gallery Images --}}
                @if($portfolio->gallery_images && count($portfolio->gallery_images) > 0)
                <div class="xb-about-img-wrap bg_img wow portfolio-gallery" data-background="{{ asset('img/bg/about-bg.png') }}">
                    <div class="marquee-left">
                        <div class="portfolio-img-inner ul_li">
                            @foreach($portfolio->gallery_images as $galleryImage)
                            <div class="xb-portfolio-img-items">
                                <div class="xb-img">
                                    <img src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $galleryImage }}" alt="{{ $portfolio->title }}">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                {{-- Project Meta Information --}}
                <ul class="project-meta ul_li_between mt-40 icons">
                    @if($portfolio->services && count($portfolio->services) > 0)
                    <li>
                        <img src="{{ asset('img/icon/project-icon04.svg') }}" alt="icon">
                        <span>services :</span> {{ implode(', ', $portfolio->services) }}
                    </li>
                    @endif
                    
                    @if($portfolio->client_name)
                    <li>
                        <img src="{{ asset('img/icon/project-icon05.svg') }}" alt="icon">
                        <span>client :</span> {{ $portfolio->client_name }}
                    </li>
                    @endif
                    
                    @if($portfolio->location)
                    <li>
                        <img src="{{ asset('img/icon/project-icon06.svg') }}" alt="icon">
                        <span>location :</span> {{ $portfolio->location }}
                    </li>
                    @elseif($portfolio->countries && count($portfolio->countries) > 0)
                    <li>
                        <img src="{{ asset('img/icon/project-icon06.svg') }}" alt="icon">
                        <span>countries :</span> {{ implode(', ', $portfolio->countries) }}
                    </li>
                    @endif
                    
                    @if($portfolio->completion_date)
                    <li>
                        <img src="{{ asset('img/icon/project-icon07.svg') }}" alt="icon">
                        <span>completed date :</span> {{ $portfolio->completion_date->format('d-m-Y') }}
                    </li>
                    @endif
                </ul>
                
                {{-- Project Requirements --}}
                @if($portfolio->requirements && count($portfolio->requirements) > 0)
                <div class="services-outcome-wraps mt-50 mb-50">
                    <h2 class="details-content-title mb-15">Project requirement</h2>
                    <p>{{ $portfolio->short_description }}</p>
                    <ul class="service-outcome-list project-requerment list-unstyled mt-35">
                        @foreach($portfolio->requirements as $requirement)
                        <li>
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M24 12C24 13.024 22.742 13.868 22.49 14.812C22.23 15.788 22.888 17.148 22.394 18.002C21.892 18.87 20.382 18.974 19.678 19.678C18.974 20.382 18.87 21.892 18.002 22.394C17.148 22.888 15.788 22.23 14.812 22.49C13.868 22.742 13.024 24 12 24C10.976 24 10.132 22.742 9.188 22.49C8.212 22.23 6.852 22.888 5.998 22.394C5.13 21.892 5.026 20.382 4.322 19.678C3.618 18.974 2.108 18.87 1.606 18.002C1.112 17.148 1.77 15.788 1.51 14.812C1.258 13.868 0 13.024 0 12C0 10.976 1.258 10.132 1.51 9.188C1.77 8.212 1.112 6.852 1.606 5.998C2.108 5.13 3.618 5.026 4.322 4.322C5.026 3.618 5.13 2.108 5.998 1.606C6.852 1.112 8.212 1.77 9.188 1.51C10.132 1.258 10.976 0 12 0C13.024 0 13.868 1.258 14.812 1.51C15.788 1.77 17.148 1.112 18.002 1.606C18.87 2.108 18.974 3.618 19.678 4.322C20.382 5.026 21.892 5.13 22.394 5.998C22.888 6.852 22.23 8.212 22.49 9.188C22.742 10.132 24 10.976 24 12Z" fill="#00FF97" />
                                <path d="M15.5559 9.14076L11.3992 13.178L9.24437 11.0869C8.77664 10.6326 8.01773 10.6326 7.55001 11.0869C7.08229 11.5412 7.08229 12.2783 7.55001 12.7326L10.5729 15.6686C11.0279 16.1105 11.7668 16.1105 12.2218 15.6686L17.2484 10.7864C17.7162 10.3321 17.7162 9.59504 17.2484 9.14076C16.7807 8.68648 16.0236 8.68648 15.5559 9.14076Z" fill="#00FF97" />
                                </svg>
                            </span>
                            {{ is_array($requirement) ? $requirement['requirement'] : $requirement }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {{-- Before/After Comparison Section - Static as not in model --}}
                {{-- This section is kept static as there's no before/after data in the Portfolio model --}}
                {{-- <div class="comparison-container">
                    <div class="row mt-none-30">
                        <div class="col-lg-6 mt-0">
                            <div class="comparison-list xb-border bg_img wow fadeInUp" data-wow-duration="600ms" data-background="{{ asset('img/bg/comparison-bg.png') }}">
                                <h3 class="xb-item--title">Before</h3>
                                <ul class="xb-item--list list-unstyled">
                                    <li>
                                        <span><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.1" d="M21 10.5C21 11.396 19.8993 12.1345 19.6787 12.9605C19.4513 13.8145 20.027 15.0045 19.5947 15.7517C19.1555 16.5112 17.8342 16.6022 17.2183 17.2183C16.6022 17.8342 16.5112 19.1555 15.7517 19.5947C15.0045 20.027 13.8145 19.4513 12.9605 19.6787C12.1345 19.8993 11.396 21 10.5 21C9.604 21 8.8655 19.8993 8.0395 19.6787C7.1855 19.4513 5.9955 20.027 5.24825 19.5947C4.48875 19.1555 4.39775 17.8342 3.78175 17.2183C3.16575 16.6022 1.8445 16.5112 1.40525 15.7517C0.973 15.0045 1.54875 13.8145 1.32125 12.9605C1.10075 12.1345 0 11.396 0 10.5C0 9.604 1.10075 8.8655 1.32125 8.0395C1.54875 7.1855 0.973 5.9955 1.40525 5.24825C1.8445 4.48875 3.16575 4.39775 3.78175 3.78175C4.39775 3.16575 4.48875 1.8445 5.24825 1.40525C5.9955 0.973 7.1855 1.54875 8.0395 1.32125C8.8655 1.10075 9.604 0 10.5 0C11.396 0 12.1345 1.10075 12.9605 1.32125C13.8145 1.54875 15.0045 0.973 15.7517 1.40525C16.5112 1.8445 16.6022 3.16575 17.2183 3.78175C17.8342 4.39775 19.1555 4.48875 19.5947 5.24825C20.027 5.9955 19.4513 7.1855 19.6787 8.0395C19.8993 8.8655 21 9.604 21 10.5Z" fill="#00FF97" />
                                        <path d="M14.8747 7.01301L11.7781 10.11L14.8747 13.2068C15.3353 13.6676 15.3353 14.414 14.8747 14.8748C14.6446 15.1049 14.3428 15.2201 14.0412 15.2201C13.7392 15.2201 13.4374 15.1051 13.2074 14.8748L10.1101 11.7776L7.01301 14.8748C6.78289 15.1049 6.48113 15.2201 6.17928 15.2201C5.87751 15.2201 5.57595 15.1051 5.34563 14.8748C4.88502 14.4142 4.88502 13.6677 5.34563 13.2068L8.4422 10.11L5.34546 7.01301C4.88485 6.5524 4.88485 5.80581 5.34546 5.34519C5.80598 4.88494 6.55213 4.88494 7.01283 5.34519L10.1101 8.44217L13.2071 5.34519C13.6679 4.88494 14.4141 4.88494 14.8745 5.34519C15.3353 5.80581 15.3353 6.5524 14.8747 7.01301Z" fill="#00FF97" />
                                        </svg></span>
                                        Manual processes causing delays and errors.
                                    </li>
                                    <li>
                                        <span><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.1" d="M21 10.5C21 11.396 19.8993 12.1345 19.6787 12.9605C19.4513 13.8145 20.027 15.0045 19.5947 15.7517C19.1555 16.5112 17.8342 16.6022 17.2183 17.2183C16.6022 17.8342 16.5112 19.1555 15.7517 19.5947C15.0045 20.027 13.8145 19.4513 12.9605 19.6787C12.1345 19.8993 11.396 21 10.5 21C9.604 21 8.8655 19.8993 8.0395 19.6787C7.1855 19.4513 5.9955 20.027 5.24825 19.5947C4.48875 19.1555 4.39775 17.8342 3.78175 17.2183C3.16575 16.6022 1.8445 16.5112 1.40525 15.7517C0.973 15.0045 1.54875 13.8145 1.32125 12.9605C1.10075 12.1345 0 11.396 0 10.5C0 9.604 1.10075 8.8655 1.32125 8.0395C1.54875 7.1855 0.973 5.9955 1.40525 5.24825C1.8445 4.48875 3.16575 4.39775 3.78175 3.78175C4.39775 3.16575 4.48875 1.8445 5.24825 1.40525C5.9955 0.973 7.1855 1.54875 8.0395 1.32125C8.8655 1.10075 9.604 0 10.5 0C11.396 0 12.1345 1.10075 12.9605 1.32125C13.8145 1.54875 15.0045 0.973 15.7517 1.40525C16.5112 1.8445 16.6022 3.16575 17.2183 3.78175C17.8342 4.39775 19.1555 4.48875 19.5947 5.24825C20.027 5.9955 19.4513 7.1855 19.6787 8.0395C19.8993 8.8655 21 9.604 21 10.5Z" fill="#00FF97" />
                                        <path d="M14.8747 7.01301L11.7781 10.11L14.8747 13.2068C15.3353 13.6676 15.3353 14.414 14.8747 14.8748C14.6446 15.1049 14.3428 15.2201 14.0412 15.2201C13.7392 15.2201 13.4374 15.1051 13.2074 14.8748L10.1101 11.7776L7.01301 14.8748C6.78289 15.1049 6.48113 15.2201 6.17928 15.2201C5.87751 15.2201 5.57595 15.1051 5.34563 14.8748C4.88502 14.4142 4.88502 13.6677 5.34563 13.2068L8.4422 10.11L5.34546 7.01301C4.88485 6.5524 4.88485 5.80581 5.34546 5.34519C5.80598 4.88494 6.55213 4.88494 7.01283 5.34519L10.1101 8.44217L13.2071 5.34519C13.6679 4.88494 14.4141 4.88494 14.8745 5.34519C15.3353 5.80581 15.3353 6.5524 14.8747 7.01301Z" fill="#00FF97" />
                                        </svg></span>
                                        Limited scalability and growth potential.
                                    </li>
                                    <li>
                                        <span><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.1" d="M21 10.5C21 11.396 19.8993 12.1345 19.6787 12.9605C19.4513 13.8145 20.027 15.0045 19.5947 15.7517C19.1555 16.5112 17.8342 16.6022 17.2183 17.2183C16.6022 17.8342 16.5112 19.1555 15.7517 19.5947C15.0045 20.027 13.8145 19.4513 12.9605 19.6787C12.1345 19.8993 11.396 21 10.5 21C9.604 21 8.8655 19.8993 8.0395 19.6787C7.1855 19.4513 5.9955 20.027 5.24825 19.5947C4.48875 19.1555 4.39775 17.8342 3.78175 17.2183C3.16575 16.6022 1.8445 16.5112 1.40525 15.7517C0.973 15.0045 1.54875 13.8145 1.32125 12.9605C1.10075 12.1345 0 11.396 0 10.5C0 9.604 1.10075 8.8655 1.32125 8.0395C1.54875 7.1855 0.973 5.9955 1.40525 5.24825C1.8445 4.48875 3.16575 4.39775 3.78175 3.78175C4.39775 3.16575 4.48875 1.8445 5.24825 1.40525C5.9955 0.973 7.1855 1.54875 8.0395 1.32125C8.8655 1.10075 9.604 0 10.5 0C11.396 0 12.1345 1.10075 12.9605 1.32125C13.8145 1.54875 15.0045 0.973 15.7517 1.40525C16.5112 1.8445 16.6022 3.16575 17.2183 3.78175C17.8342 4.39775 19.1555 4.48875 19.5947 5.24825C20.027 5.9955 19.4513 7.1855 19.6787 8.0395C19.8993 8.8655 21 9.604 21 10.5Z" fill="#00FF97" />
                                        <path d="M14.8747 7.01301L11.7781 10.11L14.8747 13.2068C15.3353 13.6676 15.3353 14.414 14.8747 14.8748C14.6446 15.1049 14.3428 15.2201 14.0412 15.2201C13.7392 15.2201 13.4374 15.1051 13.2074 14.8748L10.1101 11.7776L7.01301 14.8748C6.78289 15.1049 6.48113 15.2201 6.17928 15.2201C5.87751 15.2201 5.57595 15.1051 5.34563 14.8748C4.88502 14.4142 4.88502 13.6677 5.34563 13.2068L8.4422 10.11L5.34546 7.01301C4.88485 6.5524 4.88485 5.80581 5.34546 5.34519C5.80598 4.88494 6.55213 4.88494 7.01283 5.34519L10.1101 8.44217L13.2071 5.34519C13.6679 4.88494 14.4141 4.88494 14.8745 5.34519C15.3353 5.80581 15.3353 6.5524 14.8747 7.01301Z" fill="#00FF97" />
                                        </svg></span>
                                        High operational costs and resource waste.
                                    </li>
                                </ul>
                                <span class="comparison-vs-logo xb-border">v/s</span>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-0">
                            <div class="comparison-list xb-border bg_img wow fadeInUp" data-wow-duration="600ms" data-background="{{ asset('img/bg/comparison-bg.png') }}">
                                <h3 class="xb-item--title">After</h3>
                                <ul class="xb-item--list list-unstyled">
                                    <li>
                                        <span>
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.1" d="M21 10.5C21 11.396 19.8993 12.1345 19.6787 12.9605C19.4513 13.8145 20.027 15.0045 19.5947 15.7517C19.1555 16.5112 17.8342 16.6022 17.2183 17.2183C16.6022 17.8342 16.5112 19.1555 15.7517 19.5947C15.0045 20.027 13.8145 19.4513 12.9605 19.6787C12.1345 19.8993 11.396 21 10.5 21C9.604 21 8.8655 19.8993 8.0395 19.6787C7.1855 19.4513 5.9955 20.027 5.24825 19.5947C4.48875 19.1555 4.39775 17.8342 3.78175 17.2183C3.16575 16.6022 1.8445 16.5112 1.40525 15.7517C0.973 15.0045 1.54875 13.8145 1.32125 12.9605C1.10075 12.1345 0 11.396 0 10.5C0 9.604 1.10075 8.8655 1.32125 8.0395C1.54875 7.1855 0.973 5.9955 1.40525 5.24825C1.8445 4.48875 3.16575 4.39775 3.78175 3.78175C4.39775 3.16575 4.48875 1.8445 5.24825 1.40525C5.9955 0.973 7.1855 1.54875 8.0395 1.32125C8.8655 1.10075 9.604 0 10.5 0C11.396 0 12.1345 1.10075 12.9605 1.32125C13.8145 1.54875 15.0045 0.973 15.7517 1.40525C16.5112 1.8445 16.6022 3.16575 17.2183 3.78175C17.8342 4.39775 19.1555 4.88875 19.5947 5.24825C20.027 5.9955 19.4513 7.1855 19.6787 8.0395C19.8993 8.8655 21 9.604 21 10.5Z" fill="#00FF97" />
                                            <path d="M13.5336 7.37076L9.53661 11.3678L7.46461 9.29751C7.01486 8.84776 6.28511 8.84776 5.83536 9.29751C5.38561 9.74726 5.38561 10.477 5.83536 10.9268L8.74211 13.8335C9.17961 14.271 9.89011 14.271 10.3276 13.8335L15.1611 9.00001C15.6109 8.55026 15.6109 7.82051 15.1611 7.37076C14.7114 6.92101 13.9834 6.92101 13.5336 7.37076Z" fill="#00FF97" />
                                            </svg>
                                        </span>
                                        Automated workflows increasing efficiency by 60%.
                                    </li>
                                    <li>
                                        <span>
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.1" d="M21 10.5C21 11.396 19.8993 12.1345 19.6787 12.9605C19.4513 13.8145 20.027 15.0045 19.5947 15.7517C19.1555 16.5112 17.8342 16.6022 17.2183 17.2183C16.6022 17.8342 16.5112 19.1555 15.7517 19.5947C15.0045 20.027 13.8145 19.4513 12.9605 19.6787C12.1345 19.8993 11.396 21 10.5 21C9.604 21 8.8655 19.8993 8.0395 19.6787C7.1855 19.4513 5.9955 20.027 5.24825 19.5947C4.48875 19.1555 4.39775 17.8342 3.78175 17.2183C3.16575 16.6022 1.8445 16.5112 1.40525 15.7517C0.973 15.0045 1.54875 13.8145 1.32125 12.9605C1.10075 12.1345 0 11.396 0 10.5C0 9.604 1.10075 8.8655 1.32125 8.0395C1.54875 7.1855 0.973 5.9955 1.40525 5.24825C1.8445 4.48875 3.16575 4.39775 3.78175 3.78175C4.39775 3.16575 4.48875 1.8445 5.24825 1.40525C5.9955 0.973 7.1855 1.54875 8.0395 1.32125C8.8655 1.10075 9.604 0 10.5 0C11.396 0 12.1345 1.10075 12.9605 1.32125C13.8145 1.54875 15.0045 0.973 15.7517 1.40525C16.5112 1.8445 16.6022 3.16575 17.2183 3.78175C17.8342 4.39775 19.1555 4.48875 19.5947 5.24825C20.027 5.9955 19.4513 7.1855 19.6787 8.0395C19.8993 8.8655 21 9.604 21 10.5Z" fill="#00FF97" />
                                            <path d="M13.5336 7.37076L9.53661 11.3678L7.46461 9.29751C7.01486 8.84776 6.28511 8.84776 5.83536 9.29751C5.38561 9.74726 5.38561 10.477 5.83536 10.9268L8.74211 13.8335C9.17961 14.271 9.89011 14.271 10.3276 13.8335L15.1611 9.00001C15.6109 8.55026 15.6109 7.82051 15.1611 7.37076C14.7114 6.92101 13.9834 6.92101 13.5336 7.37076Z" fill="#00FF97" />
                                            </svg>
                                        </span>
                                        Scalable infrastructure supporting business growth.
                                    </li>
                                    <li>
                                        <span>
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.1" d="M21 10.5C21 11.396 19.8993 12.1345 19.6787 12.9605C19.4513 13.8145 20.027 15.0045 19.5947 15.7517C19.1555 16.5112 17.8342 16.6022 17.2183 17.2183C16.6022 17.8342 16.5112 19.1555 15.7517 19.5947C15.0045 20.027 13.8145 19.4513 12.9605 19.6787C12.1345 19.8993 11.396 21 10.5 21C9.604 21 8.8655 19.8993 8.0395 19.6787C7.1855 19.4513 5.9955 20.027 5.24825 19.5947C4.48875 19.1555 4.39775 17.8342 3.78175 17.2183C3.16575 16.6022 1.8445 16.5112 1.40525 15.7517C0.973 15.0045 1.54875 13.8145 1.32125 12.9605C1.10075 12.1345 0 11.396 0 10.5C0 9.604 1.10075 8.8655 1.32125 8.0395C1.54875 7.1855 0.973 5.9955 1.40525 5.24825C1.8445 4.48875 3.16575 4.39775 3.78175 3.78175C4.39775 3.16575 4.48875 1.8445 5.24825 1.40525C5.9955 0.973 7.1855 1.54875 8.0395 1.32125C8.8655 1.10075 9.604 0 10.5 0C11.396 0 12.1345 1.10075 12.9605 1.32125C13.8145 1.54875 15.0045 0.973 15.7517 1.40525C16.5112 1.8445 16.6022 3.16575 17.2183 3.78175C17.8342 4.39775 19.1555 4.48875 19.5947 5.24825C20.027 5.9955 19.4513 7.1855 19.6787 8.0395C19.8993 8.8655 21 9.604 21 10.5Z" fill="#00FF97" />
                                            <path d="M13.5336 7.37076L9.53661 11.3678L7.46461 9.29751C7.01486 8.84776 6.28511 8.84776 5.83536 9.29751C5.38561 9.74726 5.38561 10.477 5.83536 10.9268L8.74211 13.8335C9.17961 14.271 9.89011 14.271 10.3276 13.8335L15.1611 9.00001C15.6109 8.55026 15.6109 7.82051 15.1611 7.37076C14.7114 6.92101 13.9834 6.92101 13.5336 7.37076Z" fill="#00FF97" />
                                            </svg>
                                        </span>
                                        40% reduction in operational costs.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- Solution and Result --}}
                @if($portfolio->solution_description)
                <h2 class="details-content-title mt-60 mb-15">Solution and result</h2>
                <div class="portfolio-solution-content">
                    {!! $portfolio->solution_description !!}
                </div>
                @endif
            </div>
        </section>
        <!-- project-details end -->


    </main>
    <!-- main area end -->

</div>

@endsection
