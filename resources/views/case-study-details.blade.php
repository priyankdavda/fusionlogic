@extends('layouts.app')

{{-- ===== SEO Meta Tags ===== --}}
@section('title', $caseStudy->meta_title ?? $caseStudy->title . ' – Fusion Logic')
@section('meta_description', $caseStudy->meta_description ?? Str::limit(strip_tags($caseStudy->challenge ?? $caseStudy->subheading), 160))
@section('canonical', route('case-studies.show', $caseStudy->slug))

{{-- ===== Open Graph Tags ===== --}}
@section('og_title', $caseStudy->meta_title ?? $caseStudy->title)
@section('og_description', $caseStudy->meta_description ?? Str::limit(strip_tags($caseStudy->challenge ?? $caseStudy->subheading), 200))
@section('og_image', $caseStudy->featured_image ? rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $caseStudy->featured_image : '')

{{-- ===== Twitter Card Tags ===== --}}
@section('twitter_title', $caseStudy->meta_title ?? $caseStudy->title)
@section('twitter_description', $caseStudy->meta_description ?? Str::limit(strip_tags($caseStudy->challenge ?? $caseStudy->subheading), 200))
@section('twitter_image', $caseStudy->featured_image ? rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $caseStudy->featured_image : '')

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
                        <li class="breadcrumb-item"><a href="{{ route('case-studies') }}">Case Studies</a></li>
                        <li class="breadcrumb-item">{{ Str::limit($caseStudy->title, 30) }}</li>
                    </ul>
                    <h2 class="breadcrumb__title">Case Study Details</h2>
                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- case-studies-details start -->
        <section class="project-details pb-0 mt-30">
            <div class="container">
                <h2 class="details-content-title mb-0">{{ $caseStudy->title }}</h2>
                
                {{-- Subheading Section - Dynamic from model --}}
                @if($caseStudy->subheading)
                <div class="pro-descriptions">
                    <p>{{ $caseStudy->subheading }}</p>
                </div>
                @endif
                
                {{-- Main Content Section - Dynamic from model --}}
                @if($caseStudy->content)
                <div class="pro-descriptions">
                    {!! $caseStudy->content !!}
                </div>
                @endif

                {{-- Gallery Images Section - Dynamic from model --}}
                @if($caseStudy->gallery && count($caseStudy->gallery) > 0)
                <div class="xb-about-img-wrap bg_img wow portfolio-gallery" data-background="{{ asset('img/bg/about-bg.png') }}">
                    <div class="marquee-left">
                        <div class="portfolio-img-inner ul_li">
                            @foreach($caseStudy->gallery as $galleryImage)
                            <div class="xb-portfolio-img-items">
                                <div class="xb-img">
                                    <img src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $galleryImage }}" 
                                         alt="{{ $caseStudy->title }}">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                {{-- Project Meta Information - Dynamic from model --}}
                <ul class="project-meta ul_li_between mt-40 icons">
                    @if($caseStudy->industry)
                    <li>
                        <img src="{{ asset('img/icon/project-icon04.svg') }}" alt="icon"> 
                        <span>Industries :</span> {{ $caseStudy->industry }}
                    </li>
                    @endif
                    
                    @if($caseStudy->country)
                    <li>
                        <img src="{{ asset('img/icon/project-icon05.svg') }}" alt="icon"> 
                        <span>Country :</span> {{ $caseStudy->country }}
                    </li>
                    @endif
                    
                    @if($caseStudy->service)
                    <li>
                        <img src="{{ asset('img/icon/project-icon06.svg') }}" alt="icon"> 
                        <span>Service :</span> {{ $caseStudy->service }}
                    </li>
                    @endif
                    
                    @if($caseStudy->completed_date)
                    <li>
                        <img src="{{ asset('img/icon/project-icon07.svg') }}" alt="icon"> 
                        <span>completed date :</span> {{ $caseStudy->completed_date->format('d-m-Y') }}
                    </li>
                    @endif
                </ul>

                {{-- Challenge and Keywords Section - Dynamic from model --}}
                @if($caseStudy->challenge || ($caseStudy->challenges && count($caseStudy->challenges) > 0) || ($caseStudy->keywords && count($caseStudy->keywords) > 0))
                <div class="services-outcome-wraps mt-100 mb-50">
                    <div class="row mt-none-30">
                        @if($caseStudy->challenge || ($caseStudy->challenges && count($caseStudy->challenges) > 0))
                        <div class="col-lg-6">
                            <h2 class="details-content-title mb-15">Challenges We Face</h2>
                            
                            {{-- Challenge Description - Dynamic from model --}}
                            @if($caseStudy->challenge)
                            <p>{{ $caseStudy->challenge }}</p>
                            @endif
                            
                            {{-- Challenge List - Dynamic from model (JSON repeater field) --}}
                            @if($caseStudy->challenges && count($caseStudy->challenges) > 0)
                            <ul class="service-outcome-list project-requerment list-unstyled mt-35">
                                @foreach($caseStudy->challenges as $challengeItem)
                                <li>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2" d="M24 12C24 13.024 22.742 13.868 22.49 14.812C22.23 15.788 22.888 17.148 22.394 18.002C21.892 18.87 20.382 18.974 19.678 19.678C18.974 20.382 18.87 21.892 18.002 22.394C17.148 22.888 15.788 22.23 14.812 22.49C13.868 22.742 13.024 24 12 24C10.976 24 10.132 22.742 9.188 22.49C8.212 22.23 6.852 22.888 5.998 22.394C5.13 21.892 5.026 20.382 4.322 19.678C3.618 18.974 2.108 18.87 1.606 18.002C1.112 17.148 1.77 15.788 1.51 14.812C1.258 13.868 0 13.024 0 12C0 10.976 1.258 10.132 1.51 9.188C1.77 8.212 1.112 6.852 1.606 5.998C2.108 5.13 3.618 5.026 4.322 4.322C5.026 3.618 5.13 2.108 5.998 1.606C6.852 1.112 8.212 1.77 9.188 1.51C10.132 1.258 10.976 0 12 0C13.024 0 13.868 1.258 14.812 1.51C15.788 1.77 17.148 1.112 18.002 1.606C18.87 2.108 18.974 3.618 19.678 4.322C20.382 5.026 21.892 5.13 22.394 5.998C22.888 6.852 22.23 8.212 22.49 9.188C22.742 10.132 24 10.976 24 12Z" fill="#00FF97" />
                                        <path d="M15.5559 9.14076L11.3992 13.178L9.24437 11.0869C8.77664 10.6326 8.01773 10.6326 7.55001 11.0869C7.08229 11.5412 7.08229 12.2783 7.55001 12.7326L10.5729 15.6686C11.0279 16.1105 11.7668 16.1105 12.2218 15.6686L17.2484 10.7864C17.7162 10.3321 17.7162 9.59504 17.2484 9.14076C16.7807 8.68648 16.0236 8.68648 15.5559 9.14076Z" fill="#00FF97" />
                                        </svg>
                                    </span>
                                    {{ is_array($challengeItem) ? $challengeItem['challenge'] : $challengeItem }}
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        @endif
                        
                        @if($caseStudy->keywords && count($caseStudy->keywords) > 0)
                        <div class="col-lg-6">
                            <div class="table-wrap">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Keyword</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($caseStudy->keywords as $index => $keyword)
                                        <tr>
                                            <td>{{ $keyword }}</td>
                                            <td>
                                                {{-- {{ $index + 1 }} --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endif

                {{-- Top-Performing Pages Section - Static as not in model --}}
                {{-- Note: This section is kept static as page performance metrics are not in the CaseStudy model --}}
                {{-- <h2 class="details-content-title mt-60 mb-15">Top-Performing Pages</h2>
                <p>The top-performing pages on the Home & Heat website contributed significantly to the traffic surge:</p>
                <p>Homepage: 500 visits </p>
                <p>Smart Thermostats Category Page: 200 visits</p>
                <p>Underfloor Heating Product Page: 180 visits</p>
                <p>Radiators Guide Blog Post: 150 visits</p> --}}

                {{-- Results Section - Dynamic from model --}}
                @if($caseStudy->results)
                <h2 class="details-content-title mt-60 mb-15">Results</h2>
                <div class="case-study-results">
                    <p>{{ $caseStudy->results }}</p>
                </div>
                @endif
            </div>
        </section>
        <!-- case-studies-details end -->

    </main>
    <!-- main area end -->

</div>

@endsection
