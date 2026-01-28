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
                            <li class="breadcrumb-item">About Us</li>
                        </ul>
                        <h2 class="breadcrumb__title">About Us</h2>
                    </div>
                </div>
            </section>
            <!-- hero end -->

            
            <!-- about-us start -->
            <section id="about-us" class="about-us pt-10 pb-70">
                <div class="container-fluid">
                    <div class="ai-about-us-wrap mlr-20">
                        <div class="sec-title sec-title-center about-sec-title about-sec-title-two mt-45">
                            <span class="sub-title mb-10">Who We are?</span>
                            <h2 class="title">
                                Your Trusted IT & Software Development Partner
                            </h2>
                            <p class="content">Fusion Logic didn’t start with a pitch deck.  It started with frustration. We kept seeing businesses spend
                            money online and still feel stuck. The websites looked fine, but didn’t work.
                            Marketing reports were long but unclear. Nothing felt connected. So we built a team that focuses on making things simpler,
                            clearer, and more useful. We work with businesses across the USA. We use AI when it helps. We step back when it doesn’t. The goal is steady progress, not noise. </p>
                        </div>
                        <div class="row mt-25 three-blocks">
                            @foreach($whyChooseUsItems as $index => $item)
                                <div class="col-lg-4 col-md-6 mt-30 d-flex">
                                    <div class="xb-feature-item wow fadeInUp w-100"
                                        data-wow-delay="{{ 700 + ($index * 100) }}ms"
                                        data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-delay: 800ms; animation-name: fadeInUp;">

                                        <div class="xb-item--inner xb-border h-100 w-100">
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
                </div>
            </section>
            <!-- about-us end -->

            <div class="bg_img" data-background="{{ asset('img/bg/features-gradient-bg.png')  }}">

                <!-- who-we-are start -->
                <section class="who-we-are what-we-believe pt-55">
                    <div class="container">
                        <div class="sec-title sec-title-center about-sec-title about-sec-title-two mt-20">
                        <h2 class="title">
                            What We Believe In
                        </h2>
                    </div>
                        <div class="row mt-0">
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="xb-feature-item">
                                <div class="xb-item--inner xb-border">

                                    <div class="xb-item--holder">
                                        <h2 class="xb-item--title">Clarity Over Speed</h2>
                                        <p class="xb-item--content">Moving fast doesn’t help if you’re going the wrong way.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="xb-feature-item">
                                <div class="xb-item--inner xb-border">

                                    <div class="xb-item--holder">
                                        <h2 class="xb-item--title">AI as a Tool, Not a Crutch</h2>
                                        <p class="xb-item--content"> It helps with data & patterns. Decisions still need judgment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="xb-feature-item">
                                <div class="xb-item--inner xb-border">

                                    <div class="xb-item--holder">
                                        <h2 class="xb-item--title">Work That Makes Sense Later</h2>
                                        <p class="xb-item--content"> If it only works for a month, it’s not finished.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </section>
                <!-- who-we-are end -->
                <section class="brand pt-110 pb-90">
                    <div class="container">
                        <div class="xb-brand-wrap xb-border">

                            {{-- STATIC HEADING (UNCHANGED) --}}
                            <div class="brand-sub-title xb-border">
                                <p>
                                    Worlds Best <span>120 Companies</span> Work With Us
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
            </div>

            <!-- feature start -->
            <section class="feature-section bg_img parallaxie" data-background="{{ asset('img/bg/feature-bg.jpg')  }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="xb-feature-content">
                                <div class="sec-title sec-title-center fea-sec-title mb-35">
                                    <span class="sub-title mb-20">Why We are Better?</span>
                                    <h2 class="title title-line_height">Why Fusion Logic Is Here</h2>
                                    <p>Fusion Logic exists because too many businesses were left confused after hiring agencies.
                                    Not angry. Just unsure what they paid for. We didn’t want to be part of that.</p>
                                </div>
                                <div class="row mt-none-30">
                                    <div class="col-lg-6 col-md-6 mt-30">
                                        <div class="xb-feature-item xb-feature-item2">
                                            <div class="xb-item--inner xb-border">
                                                <span class="xb-item--icon"><img src="{{ asset('img/icon/fea-small-icon01.svg')  }}" alt="icon"></span>
                                                <h2 class="xb-item--title">We explain things in simple language</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-30">
                                        <div class="xb-feature-item xb-feature-item2 xb-border">
                                            <div class="xb-item--inner xb-border">
                                                <span class="xb-item--icon"><img src="{{ asset('img/icon/fea-small-icon04.svg')  }}" alt="icon"></span>
                                                <h2 class="xb-item--title">We don’t hide behind dashboardss</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-30">
                                        <div class="xb-feature-item xb-feature-item2">
                                            <div class="xb-item--inner xb-border">
                                                <span class="xb-item--icon"><img src="{{ asset('img/icon/fea-small-icon02.svg')  }}" alt="icon"></span>
                                                <h2 class="xb-item--title">We say no when something won’t help</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-30">
                                        <div class="xb-feature-item xb-feature-item2 xb-border">
                                            <div class="xb-item--inner xb-border">
                                                <span class="xb-item--icon"><img src="{{ asset('img/icon/fea-small-icon06.svg')  }}" alt="icon"></span>
                                                <h2 class="xb-item--title">We treat each business like it matters</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- feature end -->

            <!-- team start -->
            <section class="team pt-70 pb-20 bg_img" data-background="{{ asset('img/bg/team-bg.png')  }}">
                <div class="container">
                    <div class="sec-title sec-title-center text-center mb-45">
                        <span class="sub-title mb-20">Our Specialists</span>
                        <h2 class="title title-line_height">Dedicated professionals</h2>
                    </div>
                    <div class="row mt-none-55">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-55">
                            <div class="xb-team-item xb-border">
                                <div class="xb-item--img">
                                    <img src="{{ asset('img/team/img01.jpg')  }}" alt="image">
                                </div>
                                <div class="xb-item--holder ul_li_between">
                                    <div class="xb-item--author">
                                        <h2 class="xb-item--name">Ethan Reynolds</h2>
                                        <span class="xb-item--desig">AI Engineer</span>
                                    </div>
                                    <span class="xb-item--social xb-border"><a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></span>
                                </div>
                                <div class="xb-bg"><img src="{{ asset('img/team/noice-bg.png')  }}" alt="image"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-55">
                            <div class="xb-team-item xb-border">
                                <div class="xb-item--img">
                                    <img src="{{ asset('img/team/img01.jpg')  }}" alt="image">
                                </div>
                                <div class="xb-item--holder ul_li_between">
                                    <div class="xb-item--author">
                                        <h2 class="xb-item--name">Priya Ramirez</h2>
                                        <span class="xb-item--desig">Data Scientist</span>
                                    </div>
                                    <span class="xb-item--social xb-border"><a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></span>
                                </div>
                                <div class="xb-bg"><img src="{{ asset('img/team/noice-bg.png')  }}" alt="image"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-55">
                            <div class="xb-team-item xb-border">
                                <div class="xb-item--img">
                                    <img src="{{ asset('img/team/img01.jpg')  }}" alt="image">
                                </div>
                                <div class="xb-item--holder ul_li_between">
                                    <div class="xb-item--author">
                                        <h2 class="xb-item--name">Aiden Brooks</h2>
                                        <span class="xb-item--desig">AI Researcher</span>
                                    </div>
                                    <span class="xb-item--social xb-border"><a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></span>
                                </div>
                                <div class="xb-bg"><img src="{{ asset('img/team/noice-bg.png')  }}" alt="image"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-55">
                            <div class="xb-team-item xb-border">
                                <div class="xb-item--img">
                                    <img src="{{ asset('img/team/img01.jpg')  }}" alt="image">
                                </div>
                                <div class="xb-item--holder ul_li_between">
                                    <div class="xb-item--author">
                                        <h2 class="xb-item--name">Grayson Cole</h2>
                                        <span class="xb-item--desig">AI Solutions Architect</span>
                                    </div>
                                    <span class="xb-item--social xb-border"><i class="fa-brands fa-linkedin-in"></i></span>
                                </div>
                                <div class="xb-bg"><img src="{{ asset('img/team/noice-bg.png')  }}" alt="image"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-55">
                            <div class="xb-team-item xb-border">
                                <div class="xb-item--img">
                                    <img src="{{ asset('img/team/img01.jpg')  }}" alt="image">
                                </div>
                                <div class="xb-item--holder ul_li_between">
                                    <div class="xb-item--author">
                                        <h2 class="xb-item--name">Eliana Rose</h2>
                                        <span class="xb-item--desig"> Intelligence Analyst</span>
                                    </div>
                                    <span class="xb-item--social xb-border"><i class="fa-brands fa-linkedin-in"></i></span>
                                </div>
                                <div class="xb-bg"><img src="{{ asset('img/team/noice-bg.png')  }}" alt="image"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-55">
                            <div class="xb-team-item xb-border">
                                <div class="xb-item--img">
                                    <img src="{{ asset('img/team/img01.jpg')  }}" alt="image">
                                </div>
                                <div class="xb-item--holder ul_li_between">
                                    <div class="xb-item--author">
                                        <h2 class="xb-item--name">Carter Vaughn</h2>
                                        <span class="xb-item--desig">AI Project Manager</span>
                                    </div>
                                    <span class="xb-item--social xb-border"><i class="fa-brands fa-linkedin-in"></i></span>
                                </div>
                                <div class="xb-bg"><img src="{{ asset('img/team/noice-bg.png')  }}" alt="image"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-55">
                            <div class="xb-team-item xb-border">
                                <div class="xb-item--img">
                                    <img src="{{ asset('img/team/img01.jpg')  }}" alt="image">
                                </div>
                                <div class="xb-item--holder ul_li_between">
                                    <div class="xb-item--author">
                                        <h2 class="xb-item--name">Logan Pierce</h2>
                                        <span class="xb-item--desig">AI Solutions Architect</span>
                                    </div>
                                    <span class="xb-item--social xb-border"><i class="fa-brands fa-linkedin-in"></i></span>
                                </div>
                                <div class="xb-bg"><img src="{{ asset('img/team/noice-bg.png')  }}" alt="image"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-55">
                            <div class="xb-team-item xb-border">
                                <div class="xb-item--img">
                                    <img src="{{ asset('img/team/img01.jpg')  }}" alt="image">
                                </div>
                                <div class="xb-item--holder ul_li_between">
                                    <div class="xb-item--author">
                                        <h2 class="xb-item--name">Emerson Tate</h2>
                                        <span class="xb-item--desig">AI Product Manager</span>
                                    </div>
                                    <span class="xb-item--social xb-border"><a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></span>
                                </div>
                                <div class="xb-bg"><img src="{{ asset('img/team/noice-bg.png')  }}" alt="image"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- team end -->
            
         </main>
         <!-- main area end -->
        
    </div>

@endsection
