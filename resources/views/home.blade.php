@extends('layouts.app')

{{-- ===== SEO ===== --}}
@section('title', 'Fusion Logic – AI & IT Solutions')
@section('meta_description', 'Fusion Logic provides AI-driven SEO, Web Development, Digital Marketing and IT solutions.')
@section('canonical', url('/'))
@section('og_title', 'Fusion Logic – AI & IT Solutions')
@section('og_description', 'AI-driven digital solutions for growing businesses.')
@section('twitter_title', 'Fusion Logic – AI & IT Solutions')
@section('twitter_description', 'AI-driven digital solutions for growing businesses.')

@section('content')

@include('partials.back-to-top')

<div class="body_wrap o-clip">
    <div class="body-overlay"></div>

    <main>

    {{-- ================= HERO SECTION ================= --}}
    @if($activeBanner)
    <section class="hero hero-style--two pos-rel bg_img"
            data-background="{{ $activeBanner->background_image ? asset('storage/' . $activeBanner->background_image) : asset('img/bg/dm.webp') }}"
            style="background-image: url('{{ $activeBanner->background_image ? asset('storage/' . $activeBanner->background_image) : asset('img/bg/dm.webp') }}');">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-content hero-content--two" style="text-align: {{ $activeBanner->text_alignment }}; color: {{ $activeBanner->text_color }};">

                        <h2 class="title scale-animation wow" style="color: {{ $activeBanner->text_color }};">
                            {!! $activeBanner->heading !!}
                        </h2>

                        @if($activeBanner->paragraph)
                        <p class="sub-title scale-animation wow" style="color: {{ $activeBanner->text_color }};">
                            {{ $activeBanner->paragraph }}
                        </p>
                        @endif

                        @if($activeBanner->button_text && $activeBanner->button_link)
                        <div class="hero-btn scale-animation wow">
                            <a class="thm-btn agency-btn"
                            href="{{ $activeBanner->button_link }}"
                            target="{{ $activeBanner->button_target }}"
                            style="background-color: {{ $activeBanner->button_color }};">
                                <span class="text">{{ $activeBanner->button_text }}</span>

                                <span class="arrow">
                                    <span class="arrow-icon">
                                        {{-- Arrow SVG --}}
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="5.06592" y="19.9785" width="20.5712" height="2.61221"
                                                transform="rotate(-40.2798 5.06592 19.9785)" fill="white"/>
                                            <rect x="7.97095" y="7.24463" width="2.61221" height="2.61221"
                                                transform="rotate(-40.2798 7.97095 7.24463)" fill="white"/>
                                            <rect x="11.6523" y="7.54834" width="2.61221" height="2.61221"
                                                transform="rotate(-40.2798 11.6523 7.54834)" fill="white"/>
                                            <rect x="15.334" y="7.85205" width="2.61221" height="2.61221"
                                                transform="rotate(-40.2798 15.334 7.85205)" fill="white"/>
                                            <rect x="18.7119" y="11.8374" width="2.61221" height="2.61221"
                                                transform="rotate(-40.2798 18.7119 11.8374)" fill="white"/>
                                            <rect x="18.4084" y="15.52" width="2.61221" height="2.61221"
                                                transform="rotate(-40.2798 18.4084 15.52)" fill="white"/>
                                            <rect x="18.104" y="19.2012" width="2.61221" height="2.61221"
                                                transform="rotate(-40.2798 18.104 19.2012)" fill="white"/>
                                        </svg>

                                        {{-- Duplicate SVG for animation --}}
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="5.06592" y="19.9785" width="20.5712" height="2.61221"
                                                transform="rotate(-40.2798 5.06592 19.9785)" fill="white"/>
                                            <rect x="7.97095" y="7.24463" width="2.61221" height="2.61221"
                                                transform="rotate(-40.2798 7.97095 7.24463)" fill="white"/>
                                            <rect x="11.6523" y="7.54834" width="2.61221" height="2.61221"
                                                transform="rotate(-40.2798 11.6523 7.54834)" fill="white"/>
                                            <rect x="15.334" y="7.85205" width="2.61221" height="2.61221"
                                                transform="rotate(-40.2798 15.334 7.85205)" fill="white"/>
                                            <rect x="18.7119" y="11.8374" width="2.61221" height="2.61221"
                                                transform="rotate(-40.2798 18.7119 11.8374)" fill="white"/>
                                            <rect x="18.4084" y="15.52" width="2.61221" height="2.61221"
                                                transform="rotate(-40.2798 18.4084 15.52)" fill="white"/>
                                            <rect x="18.104" y="19.2012" width="2.61221" height="2.61221"
                                                transform="rotate(-40.2798 18.104 19.2012)" fill="white"/>
                                        </svg>
                                    </span>
                                </span>
                            </a>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    {{-- ================= HERO SECTION END ================= --}}

    {{-- ================= BRAND SECTION ================= --}}
    <section class="brand pt-0 pb-0">
        <div class="container">
            <div class="xb-brand-wrap xb-border">

                {{-- STATIC HEADING (UNCHANGED) --}}
                <div class="brand-sub-title xb-border">
                    <p>
                        World's Best <span>120 Companies</span> Work With Us
                    </p>
                </div>

                <div class="brand-marquee marquee-left">
                    <div class="xb-brand-inner ul_li_between">

                        @foreach($brands as $brand)
                            <div class="xb-brand-item">
                                @if($brand->website_url)
                                    <a href="{{ $brand->website_url }}" target="_blank" rel="nofollow noopener">
                                @endif
                                <img
                                    src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $brand->logo }}"
                                    alt="{{ $brand->name }}"
                                    loading="lazy"
                                >

                                @if($brand->website_url)
                                    </a>
                                @endif
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- ================= BRAND SECTION END ================= --}}


        {{-- ================= SERVICES SECTION ================= --}}
        <section class="service pt-80">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="sec-title custom-sec-title xb-sec-padding text-center">
                            <span class="sub-title">Our Main Services</span>
                            <h2 class="title">
                                Scalable solutions for growing businesses
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xb-service-wrap bg_img"
                data-background="{{ asset('img/bg/service-bg.png') }}">

                @forelse($services as $index => $service)
                    <div class="xb-service-item xb-border xb-mouseenter {{ $index === 0 ? 'active' : '' }}">
                        <div class="xb-item--inner">

                            <div class="xb-item--item">
                                <div class="xb-item--head-item">
                                    <h3 class="xb-item--title border-effect">
                                        <a href="{{ url('/services/' . $service->slug) }}">
                                            {{ $service->title }}
                                        </a>
                                    </h3>
                                    <a class="xb-item--icon" href="{{ url('/services/' . $service->slug) }}">
                                        <img src="{{ asset('img/icon/rotate-arrow-black.svg') }}" alt="arrow">
                                    </a>
                                </div>

                                <p class="xb-item--content">
                                    {{ $service->short_description }}
                                </p>

                                <div class="img-hove-effect">
                                    <div class="xb-item--img xb-img">
                                        @if($service->gallery && count($service->gallery) > 0)
                                            @foreach(array_slice($service->gallery, 0, 4) as $image)
                                                <a href="{{ url('/services/' . $service->slug) }}">
                                                    <img src="{{ asset('storage/' . $image) }}" alt="{{ $service->title }}">
                                                </a>
                                            @endforeach
                                        @elseif($service->featured_image)
                                            @for($i = 0; $i < 4; $i++)
                                                <a href="{{ url('/services/' . $service->slug) }}">
                                                    <img src="{{ asset('storage/' . $service->featured_image) }}" alt="{{ $service->title }}">
                                                </a>
                                            @endfor
                                        @else
                                            @for($i = 0; $i < 4; $i++)
                                                <a href="{{ url('/services/' . $service->slug) }}">
                                                    <img src="{{ asset('img/service/img03.jpg') }}" alt="{{ $service->title }}">
                                                </a>
                                            @endfor
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="service-vertical-text">
                                <h3 class="xb-item--title">
                                    <a href="{{ url('/services/' . $service->slug) }}">
                                        {{ $service->title }}
                                    </a>
                                </h3>
                                <a class="xb-icon" href="{{ url('/services/' . $service->slug) }}">
                                    {{-- Arrow SVG --}}
                                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="6.28979" y="21.4111" width="22.36" height="2.83936"
                                            transform="rotate(-40.2798 6.28979 21.4111)" fill="white"/>
                                        <rect x="9.44751" y="7.57031" width="2.83936" height="2.83936"
                                            transform="rotate(-40.2798 9.44751 7.57031)" fill="white"/>
                                        <rect x="13.449" y="7.90015" width="2.83936" height="2.83936"
                                            transform="rotate(-40.2798 13.449 7.90015)" fill="white"/>
                                        <rect x="17.4507" y="8.23047" width="2.83936" height="2.83936"
                                            transform="rotate(-40.2798 17.4507 8.23047)" fill="white"/>
                                        <rect x="21.1223" y="12.5627" width="2.83936" height="2.83936"
                                            transform="rotate(-40.2798 21.1223 12.5627)" fill="white"/>
                                        <rect x="20.7925" y="16.5649" width="2.83936" height="2.83936"
                                            transform="rotate(-40.2798 20.7925 16.5649)" fill="white"/>
                                        <rect x="20.4617" y="20.5667" width="2.83936" height="2.83936"
                                            transform="rotate(-40.2798 20.4617 20.5667)" fill="white"/>
                                    </svg>
                                </a>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">No services available at the moment.</p>
                    </div>
                @endforelse

            </div>
        </section>
        {{-- ================= SERVICES SECTION END ================= --}}

        {{-- ================= PORTFOLIO / PROJECT SECTION ================= --}}
        <section class="project bg_img pt-90 pb-100"
                data-background="{{ asset('img/bg/project-bg.png') }}">

            <div class="container">
                <div class="sec-title custom-sec-title xb-sec-padding text-center">
                    <span class="sub-title">Our Portfolio</span>
                    <h2 class="title">
                        See the results that reflect our hard work
                    </h2>

                    <div class="xb-heading-btn d-inline mt-15">
                        <a class="thm-btn agency-btn" href="#">
                            <span class="text">View More Portfolio</span>
                            <span class="arrow">
                                <span class="arrow-icon">
                                    {{--  @include('partials.arrow-svg')  --}}
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="5.06592" y="19.9785" width="20.5712" height="2.61221"
                                            transform="rotate(-40.2798 5.06592 19.9785)" fill="white"/>
                                        <rect x="7.97095" y="7.24463" width="2.61221" height="2.61221"
                                            transform="rotate(-40.2798 7.97095 7.24463)" fill="white"/>
                                        <rect x="11.6523" y="7.54834" width="2.61221" height="2.61221"
                                            transform="rotate(-40.2798 11.6523 7.54834)" fill="white"/>
                                    </svg>

                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

          

            <div class="container mxw-1800">
                <div class="xb-project-wrap">

                    {{-- Pagination (UI only) --}}
                    <div class="xb-project-pagination-wrap">
                        <ul class="xb-project-pagination">
                            @for($i = 1; $i <= 4; $i++)
                                <li class="{{ $i === 2 ? 'active' : '' }}">{{ $i }}</li>
                            @endfor
                        </ul>
                    </div>

                    <div class="xb-project-inner">
                        <div class="xb-project-inner">
                            @foreach($portfolios as $portfolio)
                                <div class="xb-project-item bg_img"
                                    data-background="{{ 
                                        rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $portfolio->featured_image 
                                    }}">
                        
                                    <div class="xb-project-content">
                                        <div class="xb-item--inner xb-border">
                        
                                            <h2 class="xb-item--title">
                                                {{ $portfolio->title }}
                                            </h2>
                        
                                            <p class="xb-item--content">
                                                {{ $portfolio->short_description }}
                                            </p>
                        
                                            <ul class="xb-item--list ul_li">
                                                <li>
                                                    Services:
                                                    <span>{{ implode(', ', $portfolio->services ?? []) }}</span>
                                                </li>
                                                <li>
                                                    Country:
                                                    <span>{{ implode(', ', $portfolio->countries ?? []) }}</span>
                                                </li>
                                            </ul>
                        
                                            <ul class="xb-item--list ul_li">
                                                <li>
                                                    Client:
                                                    <span>{{ $portfolio->client_name }}</span>
                                                </li>
                                            </ul>
                        
                                            <div class="xb-item---btn mt-50">
                                                <a class="thm-btn agency-btn"
                                                   href="{{ route('portfolio.show', $portfolio->slug) }}">
                                                    <span class="text">Read More</span>
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
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- ================= PORTFOLIO SECTION END ================= --}}

       {{-- ================= WHY CHOOSE US ================= --}}
        <section class="why-choose-us bg_img pt-70 pb-100">
            <div class="container">

                <div class="sec-title custom-sec-title text-center">
                    <span class="sub-title">Why Choose Us</span>
                    <h2 class="title">Proven expertise. Measurable results.</h2>
                </div>

                <div class="row mt-25">
                    @foreach($whyChooseUsItems as $index => $item)
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="xb-feature-item wow fadeInUp"
                                data-wow-delay="{{ 700 + ($index * 100) }}ms"
                                data-wow-duration="600ms">

                                <div class="xb-item--inner xb-border">
                                    <span class="xb-item--icon">

                                        {{-- SVG preferred --}}
                                        @if(!empty($item->icon_svg))
                                            {!! $item->icon_svg !!}

                                        {{-- Image fallback --}}
                                        @elseif(!empty($item->icon_image))
                                            <img
                                                src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $item->icon_image }}"
                                                alt="{{ $item->title }}"
                                            >
                                        @endif

                                    </span>

                                    <div class="xb-item--holder">
                                        <h2 class="xb-item--title">{{ $item->title }}</h2>
                                        <p class="xb-item--content">{{ $item->description }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
        {{-- ================= WHY CHOOSE US END ================= --}}


        {{-- ================= CASE STUDIES ================= --}}
        <section id="process" class="process-sction z-1">
            <div class="container">
                <div class="row">

                    {{-- LEFT SIDE --}}
                    <div class="col-lg-5">
                        <div class="xb-process-left-container wow fadeInLeft" data-wow-duration="600ms">
                            <div class="sec-title custom-sec-title xb-sec-padding text-center">
                                <span class="sub-title">Case Studies</span>
                                <h2 class="title d-inline">Projects that deliver impact</h2>

                                <div class="xb-heading-btn d-inline">
                                    <a class="thm-btn agency-btn" 
                                        {{-- href="{{ route('case-studies.index') }}" --}}
                                    >
                                        <span class="text">View All Case Studies</span>
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

                    {{-- RIGHT SIDE --}}
                    <div class="col-lg-7">
                        <div class="xb-process-right-container pb-50 mt-none-30 wow fadeInRight"
                            data-wow-duration="600ms">

                            @foreach($caseStudies as $case)
                                <div class="xb-process-item mt-30">
                                    <div class="container">
                                        <div class="row align-items-start mb-4 case-studies">

                                            {{-- Screenshot --}}
                                            <div class="col-md-9">
                                                <img
                                                    src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $case->featured_image }}"
                                                    class="img-fluid rounded shadow"
                                                    alt="{{ $case->title }}"
                                                >
                                            </div>

                                            {{-- Meta --}}
                                            <div class="col-md-3 text-end right-content">
                                                <h3 class="industry-tag">{{ $case->industry }}</h3>

                                                @if($case->country)
                                                    <span class="d-block small">Country: {{ $case->country }}</span>
                                                @endif

                                                <div class="project-name mt-2">
                                                    <h5 class="fw-bold mb-1">Project</h5>
                                                    <p class="mb-0 project-link">
                                                        {{ $case->title }}
                                                    </p>
                                                </div>
                                            </div>

                                            {{-- Details --}}
                                            <div class="row g-4">
                                                <div class="col-md-4">
                                                    <div class="info-box">
                                                        <h5 class="fw-bold mb-1">Challenge</h5>
                                                        <p>{{ $case->challenge }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="info-box">
                                                        <h5 class="fw-bold mb-1">Results</h5>
                                                        <p class="fw-bold text-success">
                                                            {{ Str::limit($case->results, 50) }}
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="info-box">
                                                        <h5 class="fw-bold mb-1">Keywords</h5>
                                                        <p>{{ implode(', ', $case->keywords ?? []) }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- ================= CASE STUDIES END ================= --}}


       {{-- ================= INDUSTRIES SECTION ================= --}}
        <section class="industries pb-80 bg_img"
        data-background="{{ asset('img/bg/industries-bg02.png') }}">

        <div class="container">
        <div class="sec-title sec-title-center text-center mb-50">
            <span class="sub-title mb-0">Industries Served</span>
            <h2 class="title">Industries we served with FL</h2>
        </div>
        </div>

        <div class="xb-industries-wrapper d-inline-block">
        <div class="marquee-right">
            <div class="xb-industries-inner ul_li">
                @foreach($industries as $industry)
                    <div class="xb-industries-item xb-border">
                        <div class="xb-icon">

                            {{-- SVG preferred --}}
                            @if(!empty($industry->icon_svg))
                                {!! $industry->icon_svg !!}

                            {{-- Image fallback --}}
                            @elseif(!empty($industry->icon_image))
                                <img
                                    src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $industry->icon_image }}"
                                    alt="{{ $industry->title }}"
                                >
                            @endif

                        </div>

                        <h3 class="xb-title">{{ $industry->title }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
        </div>

        </section>
        {{-- ================= INDUSTRIES SECTION END ================= --}}


        {{-- ================= CONTACT / LEAD FORM ================= --}}
        <section class="contact-section pt-80 pb-100 bg_img"
                data-background="{{ asset('img/bg/contact-bg.png') }}">

            <div class="container">
                <div class="row mt-none-50 justify-content-center">

                    {{-- LEFT CONTENT --}}
                    <div class="col-lg-6 mt-50">
                        <div class="xb-content-wrap">
                            <div class="sec-title contact-sec-title">
                                <span class="sub-title mb-15">Our Achievements</span>
                                <h2 class="title horizontal-shape">
                                    We are trusted Fusion Logic
                                </h2>
                            </div>

                            <div class="xb-contact-conent wow fadeInLeft">
                                <div class="xb-contact-inner ul_li_between">
                                    <div class="xb-contact-item">
                                        <h3 class="xb-item--number xb-odm">
                                            <span class="xbo" data-count="5">00</span><span class="suffix">K+</span>
                                        </h3>
                                        <p>Projects Successfully Delivered</p>
                                    </div>
                                    <div class="xb-contact-item">
                                        <h3 class="xb-item--number xb-odm">
                                            <span class="xbo" data-count="95">00</span><span class="suffix">%</span>
                                        </h3>
                                        <p>Client Satisfaction Rate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- FORM --}}
                    <div class="col-lg-6 mt-50">
                        <div class="xb-contact-form xb-border">
                            <div class="form-heading text-center mb-30">
                                <h3 class="title">Ready to collaborate with us?</h3>
                                <p class="sub-title">Who knows where a single message might lead you.</p>
                            </div>

                            <form method="POST" action="#" class="xb-contact-input-form">
                                @csrf

                                <div class="row mt-none-20">
                                    <div class="col-lg-6 mt-20">
                                        <div class="xb-input-field">
                                            <input type="text" name="name" required>
                                            <label>Your Name*</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-20">
                                        <div class="xb-input-field">
                                            <input type="email" name="email" required>
                                            <label>Email Address*</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-20">
                                        <div class="xb-input-field">
                                            <input type="text" name="phone" required>
                                            <label>Contact No*</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-20">
                                        <div class="xb-input-field xb-select-field">
                                            <select name="service" class="nice-select">
                                                <option value="">Select Service*</option>
                                                <option>AI-driven SEO & AEO</option>
                                                <option>Lead Generation</option>
                                                <option>Brand & Social Management</option>
                                                <option>AI Graphics & Videos</option>
                                                <option>Web Development</option>
                                                <option>Digital Marketing</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-20">
                                        <div class="xb-input-field xb-massage-field">
                                            <textarea name="message" required></textarea>
                                            <label>Your Message..</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-submit-btn mt-35">
                                    <button type="submit" class="thm-btn form-btn">
                                        Submit Here
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- ================= CONTACT END ================= --}}

       {{-- ================= TESTIMONIALS ================= --}}
        <section class="testimonial pb-110 bg_img"
        data-background="{{ asset('img/bg/testimonial-bg.png') }}">

        <div class="container">
        <div class="sec-title sec-title-center text-center mb-50">
            <span class="sub-title mb-15">Our Testimonial</span>
            <h2 class="title">Hear from our happy customers</h2>
        </div>
        </div>

        <div class="xb-testimonial-slider">
        <div class="swiper-wrapper">

            @foreach($testimonials as $testimonial)
                <div class="swiper-slide">
                    <div class="xb-testimonial-item">
                        <div class="xb-item--inner xb-border">

                            <p class="xb-item--content">
                                "{{ $testimonial->quote }}"
                            </p>

                            <div class="xb-item--author ul_li">
                                <div class="xb-item--avatar">
                                    @if($testimonial->avatar)
                                        <img
                                            src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $testimonial->avatar }}"
                                            alt="{{ $testimonial->name }}"
                                        >
                                    @endif
                                </div>

                                <div class="xb-item--holder">
                                    <h3 class="xb-item--name">
                                        {{ $testimonial->name }}
                                    </h3>

                                    <span class="xb-item--desig">
                                        {{ trim($testimonial->designation . ' - ' . $testimonial->company, ' -') }}
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        </div>
        </section>
        {{-- ================= TESTIMONIAL END ================= --}}


        {{-- ================= FAQ ================= --}}
        <section id="faq" class="faq pos-rel pt-40 pb-90 bg_img"
        data-background="{{ asset('img/bg/faq-bg.png') }}">

        <div class="container">
        <div class="sec-title sec-title-center text-center mb-50">
            <span class="sub-title mb-15 wow fadeInUp">FAQ's</span>
            <h2 class="title wow fadeInUp" data-wow-delay="150ms">
                Have a question? Look here
            </h2>
        </div>

        <div class="row">
            @foreach($faqs->chunk(ceil($faqs->count() / 2)) as $faqColumn)
                <div class="col-lg-6">
                    <div class="xb-faq wow fadeInUp">
                        <ul class="accordion_box list-unstyled">

                            @foreach($faqColumn as $faq)
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        {{ $faq->question }}
                                        <span class="arrow"><span></span></span>
                                    </div>

                                    <div class="acc_body">
                                        <div class="content">
                                            {!! $faq->answer !!}
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
        </div>

        <span class="faq-linear-shape"></span>
        </section>
        {{-- ================= FAQ END ================= --}}


        {{-- ================= BLOG ================= --}}
        <section class="blog pt-90 pb-15 bg_img"
                data-background="{{ asset('img/bg/blog-bg.png') }}">

            <div class="container">
                <div class="row mt-none-30">

                    {{-- LEFT CONTENT (STATIC) --}}
                    <div class="col-lg-4 mt-30">
                        <div class="sec-title blog-sec-title mb-70">
                            <span class="sub-title mb-15">Expert Insights</span>
                            <h2 class="title">Latest SEO & Marketing Blogs</h2>
                        </div>

                        <div class="blog-btn">
                            <a class="thm-btn agency-btn" 
                                {{-- href="{{ route('blogs.index') }}" --}}
                            >
                                <span class="text">View More Blog</span>
                                <span class="arrow">
                                    <span class="arrow-icon">
                                        @include('partials.arrow-svg')
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>

                    {{-- BLOG LIST --}}
                    <div class="col-lg-8 mt-30">
                        <div class="row mt-none-30">

                            @foreach($blogs as $blog)
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="xb-blog-item xb-small-blog-item wow fadeInUp">
                                        <div class="xb-item--inner img-hove-effect xb-border">

                                            {{-- BLOG IMAGE --}}
                                            <div class="xb-img">
                                                <a 
                                                    {{-- href="{{ route('blogs.show', $blog->slug) }}" --}}
                                                >
                                                    <img
                                                        src="{{ rtrim(config('services.cms.asset_url'), '/') . '/storage/' . $blog->featured_image }}"
                                                        alt="{{ $blog->title }}"
                                                    >
                                                </a>
                                            </div>

                                            {{-- CONTENT --}}
                                            <div class="xb-item--holder">
                                                <ul class="xb-item--meta ul_li list-unstyled">
                                                    <li>
                                                        <img src="{{ asset('img/icon/blog-icon01.svg') }}">
                                                        {{ $blog->category?->name }}
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset('img/icon/blog-icon02.svg') }}">
                                                        {{ $blog->published_at?->format('M d, Y') }}
                                                    </li>
                                                </ul>

                                                <h2 class="xb-item--title">
                                                    <a 
                                                        {{-- href="{{ route('blogs.show', $blog->slug) }}" --}}
                                                    >
                                                        {{ $blog->title }}
                                                    </a>
                                                </h2>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            @if($blogs->isEmpty())
                                <div class="col-12">
                                    <p>No blogs published yet.</p>
                                </div>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- ================= BLOG END ================= --}}




    </main>
</div>

@endsection
