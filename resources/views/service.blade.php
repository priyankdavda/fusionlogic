@extends('layouts.app')

{{-- ===== SEO Meta Tags ===== --}}
@section('title', page_seo('services', 'title', 'Fusion Logic – AI & IT Solutions'))
@section('meta_description', page_seo('services', 'meta_description', 'Fusion Logic provides AI-driven SEO, Web Development, Digital Marketing and IT solutions.'))
@section('canonical', page_seo('services', 'canonical', url('/')))

{{-- ===== Open Graph Tags ===== --}}
@section('og_title', page_seo('services', 'og_title', 'Fusion Logic – AI & IT Solutions'))
@section('og_description', page_seo('services', 'og_description', 'AI-driven digital solutions for growing businesses.'))
@section('og_image', page_seo('services', 'og_image'))

{{-- ===== Twitter Card Tags ===== --}}
@section('twitter_title', page_seo('services', 'twitter_title', 'Fusion Logic – AI & IT Solutions'))
@section('twitter_description', page_seo('services', 'twitter_description', 'AI-driven digital solutions for growing businesses.'))
@section('twitter_image', page_seo('services', 'twitter_image'))

{{-- ===== Extra CSS for Swiper ===== --}}
@push('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
<style>
/* Slider card & layout fixes */
.serviceSwiper .swiper-slide {
    height: auto;
    display: flex;
}

.serviceSwiper .xb-ser-item {
    display: flex;
    flex-direction: column;
    height: 100%;
    width: 100%;
}

.serviceSwiper .xb-item--inner {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
}

.serviceSwiper .xb-item--content {
    min-height: 90px;
}

.serviceSwiper .xb-item--img img {
    width: 100%;
    height: 260px;
    object-fit: cover;
}

.serviceSwiper .swiper-button-next,
.serviceSwiper .swiper-button-prev {
    color: #fff;
}

/* Remove unwanted column padding */
.mt-20, .pt-20 {
    margin-top: 20px !important;
    padding-top: 20px !important;
}
</style>
@endpush

@section('content')

@include('partials.back-to-top')

<div class="body_wrap o-clip">

    <div class="body-overlay"></div>

    <main>

        <!-- hero start -->
        <section class="breadcrumb bg_img" data-background="{{ asset('img/bg/hero_bg.png') }}">
            <div class="container">
                <div class="breadcrumb__content">
                    <ul class="breadcrumb__list clearfix list-unstyled">
                        <li class="breadcrumb-item"><a href="/">home</a></li>
                        <li class="breadcrumb-item">Service</li>
                    </ul>
                    <h2 class="breadcrumb__title">Service</h2>
                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- service start -->
        <section class="service pos-rel bg_img full-box pt-80 pb-80"
            data-background="{{ asset('img/bg/service-gradient-bg.png') }}">

            <div class="container">

                <div class="swiper serviceSwiper mt-none-30">
                    <div class="swiper-wrapper">

                        @forelse($services as $service)
                            <div class="swiper-slide">
                                <div class="mt-20 pt-20 d-flex w-100">
                                    <div class="xb-ser-item xb-border img-hove-effect w-100">
                                        <div class="xb-item--inner">

                                            <!-- Title -->
                                            <h3 class="xb-item--title border-effect">
                                                <a href="{{ url('/services/' . $service->slug) }}">
                                                    {{ $service->title }}
                                                </a>
                                            </h3>

                                            <!-- Short Description -->
                                            <p class="xb-item--content">
                                                {{ $service->short_description }}
                                            </p>

                                            <!-- Images -->
                                            <div class="xb-item--img xb-img">
                                                @if($service->gallery && count($service->gallery) > 0)
                                                    @foreach(array_slice($service->gallery, 0, 4) as $image)
                                                        <a href="{{ url('/services/' . $service->slug) }}">
                                                            <img
                                                                src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $image }}"
                                                                alt="{{ $service->title }}">
                                                        </a>
                                                    @endforeach
                                                @elseif($service->featured_image)
                                                    @for($i = 0; $i < 4; $i++)
                                                        <a href="{{ url('/services/' . $service->slug) }}">
                                                            <img
                                                                src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $service->featured_image }}"
                                                                alt="{{ $service->title }}">
                                                        </a>
                                                    @endfor
                                                @else
                                                    @for($i = 0; $i < 4; $i++)
                                                        <a href="{{ url('/services/' . $service->slug) }}">
                                                            <img src="{{ asset('img/service/img03.jpg') }}"
                                                                alt="{{ $service->title }}">
                                                        </a>
                                                    @endfor
                                                @endif
                                            </div>

                                            <!-- Button -->
                                            <div class="xb-item--btn mt-40">
                                                <a class="thm-btn agency-btn"
                                                    href="{{ url('/services/' . $service->slug) }}">
                                                    <span class="text">read more</span>
                                                    <span class="arrow">
                                                        <span class="arrow-icon">
                                                            @include('partials.arrow-svg')
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="swiper-slide text-center py-5">
                                <p class="text-muted">No services available at the moment.</p>
                            </div>
                        @endforelse

                    </div>

                    <!-- Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
        </section>
        <!-- service end -->

    </main>

</div>

@endsection

{{-- ===== Swiper JS ===== --}}
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".serviceSwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        speed: 800,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 3,
            },
        },
    });
</script>
@endpush
