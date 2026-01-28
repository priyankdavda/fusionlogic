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
                        <div class="col-lg-4 mt-20 pt-20 d-flex">
                            <div class="xb-ser-item xb-border img-hove-effect">
                                <div class="xb-item--inner">
                                    <h3 class="xb-item--title border-effect">
                                        <a href="/it/ai-seo-service.php">AEO/SEO Service </a>
                                    </h3>
                                    <p class="xb-item--content">Our AI SEO services include technical SEO, local SEO services, e-commerce SEO service, and YouTube SEO service, powered by data models that predict ranking opportunities and drive long-term organic traffic.</p>
                                    <div class="xb-item--img xb-img">
                                        <a href="/it/ai-seo-service.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/ai-seo-service.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/ai-seo-service.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/ai-seo-service.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                    </div>
                                    <div class="xb-item--btn mt-40">
                                        <a class="thm-btn agency-btn" href="/it/ai-seo-service.php">
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
                        </div>
                        <div class="col-lg-4 mt-20 pt-20 d-flex">
                            <div class="xb-ser-item xb-border img-hove-effect">
                                <div class="xb-item--inner">
                                    <h3 class="xb-item--title border-effect">
                                        <a href="/it/lead-generation.php">Lead Generation</a>
                                    </h3>
                                    
                                    <p class="xb-item--content">We build high-intent funnels using landing page optimization services, paid ads, and CRO to turn visitors into qualified leads ready to convert.</p>
                                    <div class="xb-item--img xb-img">
                                        <a href="/it/lead-generation.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/lead-generation.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/lead-generation.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/lead-generation.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                    </div>
                                    <div class="xb-item--btn mt-40">
                                        <a class="thm-btn agency-btn" href="/it/lead-generation.php">
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
                        </div>
                        <div class="col-lg-4 mt-20 pt-20 d-flex">
                            <div class="xb-ser-item xb-border img-hove-effect">
                                <div class="xb-item--inner">
                                    <h3 class="xb-item--title border-effect">
                                        <a href="/it/social-media-marketing.php">Social & Brand Management </a>
                                    </h3>
                                
                                    <p class="xb-item--content">From Meta ad services to LinkedIn ad services, we create scroll-stopping creatives backed by audience intelligence and performance testing.</p>
                                    <div class="xb-item--img xb-img">
                                        <a href="/it/social-media-marketing.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/social-media-marketing.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/social-media-marketing.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/social-media-marketing.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                    </div>
                                    <div class="xb-item--btn mt-40">
                                        <a class="thm-btn agency-btn" href="/it/social-media-marketing.php">
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
                        </div>
                        <div class="col-lg-4 mt-20 pt-20 d-flex">
                            <div class="xb-ser-item xb-border img-hove-effect">
                                <div class="xb-item--inner">
                                    <h3 class="xb-item--title border-effect">
                                        <a href="/it/ai-video-creation.php">AI Content Creation </a>
                                    </h3>
                                    
                                    <p class="xb-item--content">Fusion Logic provides AI Video Creation and Editing for Business that looks human, sounds natural, and fits real marketing goals.</p>
                                    <div class="xb-item--img xb-img">
                                        <a href="/it/ai-video-creation.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/ai-video-creation.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/ai-video-creation.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/ai-video-creation.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                    </div>
                                    <div class="xb-item--btn mt-40">
                                        <a class="thm-btn agency-btn" href="/it/ai-video-creation.php">
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
                        </div>
                        <div class="col-lg-4 mt-20 pt-20 d-flex">
                            <div class="xb-ser-item xb-border img-hove-effect">
                                <div class="xb-item--inner">
                                    <h3 class="xb-item--title border-effect">
                                        <a href="/it/web-development.php">Web Development</a>
                                    </h3>
                                    
                                    <p class="xb-item--content">Conversion-ready websites built for speed, SEO, UX, and scalability because great digital marketing fails without a strong foundation.</p>
                                    <div class="xb-item--img xb-img">
                                        <a href="/it/web-development.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/web-development.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/web-development.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                        <a href="/it/web-development.php"><img src="{{ asset('img/service/img03.jpg')  }}" alt="image"></a>
                                    </div>
                                    <div class="xb-item--btn mt-40">
                                        <a class="thm-btn agency-btn" href="/it/web-development.php">
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
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- service end -->
            


            
         </main>
         <!-- main area end -->
        
    </div>

@endsection
