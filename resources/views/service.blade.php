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
         <!-- main area start -->
         <main>

            <!-- hero start -->
            <section class="breadcrumb bg_img" data-background="{{ asset('img/bg/hero_bg.png')  }}">
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
            <section class="service pos-rel bg_img full-box" data-background="{{ asset('img/bg/service-gradient-bg.png')  }}">
                <div class="container">
                    <div class="row mt-none-30">

                        @forelse($services as $service)
                            <div class="col-lg-4 mt-20 pt-20 d-flex">
                                <div class="xb-ser-item xb-border img-hove-effect">
                                    <div class="xb-item--inner">

                                        {{-- Title --}}
                                        <h3 class="xb-item--title border-effect">
                                            <a href="{{ url('/services/' . $service->slug) }}">
                                                {{ $service->title }}
                                            </a>
                                        </h3>

                                        {{-- Short Description --}}
                                        <p class="xb-item--content">
                                            {{ $service->short_description }}
                                        </p>

                                        {{-- Images --}}
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

                                        {{-- Button --}}
                                        <div class="xb-item--btn mt-40">
                                            <a class="thm-btn agency-btn" href="{{ url('/services/' . $service->slug) }}">
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
                        @empty
                            <div class="col-12 text-center py-5">
                                <p class="text-muted">No services available at the moment.</p>
                            </div>
                        @endforelse

                    </div>

                </div>
            </section>
            <!-- service end -->




         </main>
         <!-- main area end -->

    </div>

@endsection
