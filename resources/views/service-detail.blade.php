@extends('layouts.app')

{{-- ===== SEO Meta Tags ===== --}}
@section('title', $service->meta_title ?: $service->title . ' - Fusion Logic')
@section('meta_description', $service->meta_description ?: $service->short_description)
@section('canonical', url('/services/' . $service->slug))

{{-- ===== Open Graph Tags ===== --}}
@section('og_title', $service->meta_title ?: $service->title)
@section('og_description', $service->meta_description ?: $service->short_description)
@section('og_image', $service->featured_image ? asset('storage/' . $service->featured_image) : '')

{{-- ===== Twitter Card Tags ===== --}}
@section('twitter_title', $service->meta_title ?: $service->title)
@section('twitter_description', $service->meta_description ?: $service->short_description)
@section('twitter_image', $service->featured_image ? asset('storage/' . $service->featured_image) : '')

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
                        <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                        <li class="breadcrumb-item">{{ $service->title }}</li>
                    </ul>
                    <h2 class="breadcrumb__title">{{ $service->title }}</h2>
                </div>
            </div>
        </section>
        <!-- hero end -->
        
        <!-- service-details start -->
        <section class="service-details pos-rel">
            <div class="container">
                
                <!-- Featured Image/Video Section -->
                @if($service->featured_image || $service->video_link)
                <div class="single-item-image service-det-img mb-60">
                    @if($service->featured_image)
                        <img src="{{ asset('storage/' . $service->featured_image) }}" alt="{{ $service->title }}">
                    @endif
                    
                    @if($service->video_link)
                        <a class="popup-video btn-video btn-video-center" href="{{ $service->video_link }}">
                            <span><svg width="27" height="30" viewBox="0 0 27 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.0957 13.268C26.429 14.0378 26.429 15.9623 25.0957 16.7321L3.95285 28.9389C2.61951 29.7087 0.952845 28.7465 0.952845 27.2069L0.952846 2.79319C0.952846 1.25359 2.61951 0.291337 3.95285 1.06114L25.0957 13.268Z" fill="#00020F"></path>
                            </svg></span>
                        </a>
                    @endif
                </div>
                @endif
                
                <!-- Title and Short Description -->
                @if($service->title)
                    <h2 class="details-content-title mb-15 mt-40">{{ $service->title }}</h2>
                @endif
                
                @if($service->short_description)
                    <p>{!! nl2br(e($service->short_description)) !!}</p>
                @endif

                <!-- Content Blocks Section -->
                @if($service->content_blocks && count($service->content_blocks) > 0)
                <div class="ai-award-wrap mt-60">
                    <div class="sec-title-three">
                        @if($service->content_blocks_tagline)
                        <h2 class="details-content-title mt-35 mb-0">{{ $service->content_blocks_tagline }}</h2>
                        @endif
                    </div>
                    
                    <div class="mt-40 details">
                        @foreach($service->content_blocks as $block)
                        <div class="ai-award-item wow fadeInUp">
                            @if(!empty($block['heading']))
                            <h3 class="xb-item--title xb-text-reveal mb-10">{{ $block['heading'] }}</h3>
                            @endif
                            
                            @if(!empty($block['description']))
                            <p class="xb-item--details">{{ $block['description'] }}</p>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <!-- Q&A Section -->
                @if($service->qna && count($service->qna) > 0)
                <div class="service-process-wrap pt-70 pb-70">
                    <div class="row mt-none-50 align-items-end">
                        <div class="col-lg-6 mt-50">
                            @if($service->qna_heading)
                            <h2 class="details-content-title">{{ $service->qna_heading }}</h2>
                            @endif
                            
                            @if($service->qna_tagline)
                            <h4 class="mt-10 mb-20">{{ $service->qna_tagline }}</h4>
                            @endif
                            
                            <div class="service_process_faq">
                                <div class="accordion" id="service_process_faq">
                                    @foreach($service->qna as $index => $item)
                                    <div class="accordion-item">
                                        <div class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{ $index + 1 }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse_{{ $index + 1 }}">
                                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}. {{ $item['question'] ?? '' }}
                                        </div>

                                        <div id="collapse_{{ $index + 1 }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" data-bs-parent="#service_process_faq">
                                            <div class="accordion-body">
                                                <p class="m-0">
                                                    {{ $item['answer'] ?? '' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-50">
                            <ul class="content_layer_group list-unstyled">
                                @foreach($service->qna as $index => $item)
                                <li data-bs-toggle="collapse" data-bs-target="#collapse_{{ $index + 1 }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse_{{ $index + 1 }}">
                                    <span>{{ $item['question'] ?? '' }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Main Description Content (WYSIWYG) -->
                @if($service->description)
                <div class="services-outcome-wrap">
                    <h2 class="details-content-title mb-15">About This Service</h2>
                    <div class="service-description-content">
                        {!! $service->description !!}
                    </div>
                </div>
                @endif
                
                <!-- Features List -->
                @if($service->features && count($service->features) > 0)
                <div class="services-outcome-wrap mt-50">
                    <h2 class="details-content-title mb-15">Key Features</h2>
                    <ul class="service-outcome-list list-unstyled mt-20">
                        @foreach($service->features as $feature)
                        <li>
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M24 12C24 13.024 22.742 13.868 22.49 14.812C22.23 15.788 22.888 17.148 22.394 18.002C21.892 18.87 20.382 18.974 19.678 19.678C18.974 20.382 18.87 21.892 18.002 22.394C17.148 22.888 15.788 22.23 14.812 22.49C13.868 22.742 13.024 24 12 24C10.976 24 10.132 22.742 9.188 22.49C8.212 22.23 6.852 22.888 5.998 22.394C5.13 21.892 5.026 20.382 4.322 19.678C3.618 18.974 2.108 18.87 1.606 18.002C1.112 17.148 1.77 15.788 1.51 14.812C1.258 13.868 0 13.024 0 12C0 10.976 1.258 10.132 1.51 9.188C1.77 8.212 1.112 6.852 1.606 5.998C2.108 5.13 3.618 5.026 4.322 4.322C5.026 3.618 5.13 2.108 5.998 1.606C6.852 1.112 8.212 1.77 9.188 1.51C10.132 1.258 10.976 0 12 0C13.024 0 13.868 1.258 14.812 1.51C15.788 1.77 17.148 1.112 18.002 1.606C18.87 2.108 18.974 3.618 19.678 4.322C20.382 5.026 21.892 5.13 22.394 5.998C22.888 6.852 22.23 8.212 22.49 9.188C22.742 10.132 24 10.976 24 12Z" fill="#00FF97" />
                                <path d="M15.5559 9.14076L11.3992 13.178L9.24437 11.0869C8.77664 10.6326 8.01773 10.6326 7.55001 11.0869C7.08229 11.5412 7.08229 12.2783 7.55001 12.7326L10.5729 15.6686C11.0279 16.1105 11.7668 16.1105 12.2218 15.6686L17.2484 10.7864C17.7162 10.3321 17.7162 9.59504 17.2484 9.14076C16.7807 8.68648 16.0236 8.68648 15.5559 9.14076Z" fill="#00FF97" />
                                </svg>
                            </span>
                            {{ is_array($feature) && isset($feature['feature']) ? $feature['feature'] : $feature }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <!-- Gallery Images -->
                @if($service->gallery && count($service->gallery) > 0)
                <div class="service-gallery mt-60">
                    <h2 class="details-content-title mb-30">Gallery</h2>
                    <div class="row mt-none-30">
                        @foreach($service->gallery as $image)
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="gallery-item">
                                <img src="{{ asset('storage/' . $image) }}" alt="{{ $service->title }}" class="img-fluid">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <!-- Call to Action -->
                <div class="mt-60">
                    <h2 class="details-content-title mb-15">Ready to Get Started?</h2>
                    <p>Let's discuss how we can help transform your business with {{ $service->title }}.</p>
                    
                    <div class="xb-item--btn mt-20 mb-70">
                        <a class="thm-btn agency-btn" href="{{ route('contact') }}">
                            <span class="text">
                                Get in Touch
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
        </section>
        <!-- service-details end -->
        
    </main>
    <!-- main area end -->
    
</div>

@endsection
