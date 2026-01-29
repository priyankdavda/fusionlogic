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
                        <div class="xb-project-item">
                            <div class="xb-project-content">
                                <div class="xb-item--inner xb-border">
                                    <h2 class="xb-item--title">Chatbot and NLP projects..</h2>
                                    <p class="xb-item--content clr-white">We build smart chatbots and NLP tools that understand and respond naturally. From customer support to document analysis, our AI solutions automate communication, save time, and improve user experience.</p>
                                    <div class="xb-item--btn mt-40">
                                        <a class="thm-btn agency-btn" href="portfolio-details.php">
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
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img02.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img02.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img02.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img02.jpg')  }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="xb-project-item">
                            <div class="xb-project-content">
                                <div class="xb-item--inner xb-border">
                                    <h2 class="xb-item--title">General AI projects..</h2>
                                    <p class="xb-item--content clr-white">We deliver AI solutions that streamline operations, boost efficiency, and enable smarter decisions. From automation to data insights, our projects are built to solve real business challenges with intelligent technology.</p>
                                    <div class="xb-item--btn mt-40">
                                        <a class="thm-btn agency-btn" href="portfolio-details.php">
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
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img03.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img03.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img03.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img03.jpg')  }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="xb-project-item">
                            <div class="xb-project-content">
                                <div class="xb-item--inner xb-border">
                                    <h2 class="xb-item--title">Computer vision projects..</h2>
                                    <p class="xb-item--content clr-white">We develop AI systems that see and understand visual data—detecting objects, recognizing patterns, and automating inspections. Our computer vision solutions help businesses improve accuracy, decision-making.</p>
                                    <div class="xb-item--btn mt-40">
                                        <a class="thm-btn agency-btn" href="portfolio-details.php">
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
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img04.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img04.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img04.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img04.jpg')  }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="xb-project-item">
                            <div class="xb-project-content">
                                <div class="xb-item--inner xb-border">
                                    <h2 class="xb-item--title">E-commerce and marketing..</h2>
                                    <p class="xb-item--content clr-white">We create AI solutions that boost sales and customer engagement—like smart product recommendations, dynamic pricing, and behavior-based targeting. Our tools help brands personalize experiences and grow faster.</p>
                                    <div class="xb-item--btn mt-40">
                                        <a class="thm-btn agency-btn" href="portfolio-details.php">
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
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img05.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img05.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img05.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img05.jpg')  }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="xb-project-item">
                            <div class="xb-project-content">
                                <div class="xb-item--inner xb-border">
                                    <h2 class="xb-item--title">Data science analytics..</h2>
                                    <p class="xb-item--content clr-white">We turn complex data into clear, actionable insights. From predictive models to real-time dashboards, our AI-powered analytics help businesses make smarter, faster decisions with confidence.</p>
                                    <div class="xb-item--btn mt-40">
                                        <a class="thm-btn agency-btn" href="portfolio-details.php">
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
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img06.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img06.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img06.jpg')  }}" alt="image"></a>
                                    <a href="portfolio-details.php"><img src="{{ asset('img/project/img06.jpg')  }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="blog-pagination ul_li">
                        <li><a class="xb-border" href="#!"><i class="fas fa-chevron-double-left"></i></a></li>
                        <li><a class="xb-border" href="#!">1</a></li>
                        <li class="active"><a class="xb-border" href="#!">2</a></li>
                        <li><a class="xb-border" href="#!">3</a></li>
                        <li><a class="xb-border" href="#!"><i class="fas fa-chevron-double-right"></i></a></li>
                    </ul>
                </div>
            </section>
            <!-- service end -->





         </main>
         <!-- main area end -->

    </div>

@endsection
