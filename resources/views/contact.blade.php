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
                            <li class="breadcrumb-item">Contact Us</li>
                        </ul>
                        <h2 class="breadcrumb__title">Contact Us</h2>
                    </div>
                </div>
            </section>
            <!-- hero end -->

            <!-- contact start -->
                <section class="contact pt-30 pb-50">
                    <div class="container">
                        <div class="row mt-none-30">
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="xb-contact-items img-hove-effect xb-border">
                                    <div class="xb-item--inner">
                                        <div class="xb-icon">
                                            <img src="{{ asset('img/icon/service-icon01.svg')  }}" alt="icon">
                                        </div>
                                        <div class="xb-item--holder">
                                            <h3 class="title">Address</h3>
                                            <span class="xb-item--contact_info">4517 Washington, USA</span>
                                        
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="xb-contact-items img-hove-effect xb-border">
                                    <div class="xb-item--inner">
                                        <div class="xb-icon">
                                            <img src="{{ asset('img/icon/service-icon01.svg')  }}" alt="icon">
                                        </div>
                                        <div class="xb-item--holder">
                                            <h3 class="title">Phone Number</h3>
                                            <span class="xb-item--contact_info"><a href="tel:+1 (416) 123-4567">+1 (416) 123-4567</a></span>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="xb-contact-items img-hove-effect xb-border">
                                    <div class="xb-item--inner">
                                        <div class="xb-icon">
                                            <img src="{{ asset('img/icon/service-icon01.svg')  }}" alt="icon">
                                        </div>
                                        <div class="xb-item--holder">
                                            <h3 class="title">Email</h3>
                                            <span class="xb-item--contact_info"><a href="mailto:aivora@cadomain.com">aivora@cadomain.com</a></span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- contact end -->
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

            <!-- contact start -->
            <section class="contact">
                <div class="container">
                    <div class="xb-contact-wrap xb-border bg_img" data-background="{{ asset('img/bg/contact-bg02.png')  }}">
                        <div class="xb-contact-form xb-main-contact xb-border">
                            <div class="form-heading text-center mb-30">
                                <h3 class="title">Ready to collaborate with us?</h3>
                                <p class="sub-title clr-white">Who knows where a single message might lead you.</p>
                            </div>
                            <form action="#!" class="xb-contact-input-form main-contact-input-form">
                                <div class="row mt-none-20">
                                    <div class="col-lg-6 col-md-6 mt-20">
                                        <div class="xb-input-field">
                                            <input id="author-name" type="text" required>
                                            <label for="author-name">Your Name*</label>
                                            <img src="{{ asset('img/icon/user-balck-icon.svg')  }}" alt="icon">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-20">
                                        <div class="xb-input-field">
                                            <input id="author-email" type="email" required>
                                            <label for="author-email">Email Address*</label>
                                            <img src="{{ asset('img/icon/sms-balck-icon.svg')  }}" alt="icon">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-20">
                                        <div class="xb-input-field">
                                            <input id="author-phone" type="text" required>
                                            <label for="author-phone">Contact No*</label>
                                            <img src="{{ asset('img/icon/call-icon02.svg')  }}" alt="icon">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-20">
                                        <div class="xb-input-field xb-select-field">
                                        <select class="nice-select">
                                            <option value="1">Select Service*</option>
                                            <option value="2">AI SEO Service</option>
                                            <option value="3">Lead Generation</option>
                                            <option value="4">Social Media Marketing</option>
                                            <option value="5">PPC & Advertising</option>
                                            <option value="6">Web Development</option>
                                            <option value="7">Online Reputation Management</option>
                                        </select>
                                        <img src="{{ asset('img/icon/list-icon.svg')  }}" alt="icon">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 mt-20">
                                        <div class="xb-input-field xb-massage-field">
                                            <textarea id="massage" required></textarea>
                                            <label for="massage">Your Message..</label>
                                            <img src="{{ asset('img/icon/messages-icon.svg')  }}" alt="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-submit-btn mt-35">
                                    <button type="submit" class="thm-btn form-btn">
                                        send a message
                                        <span class="xb-icon">
                                            <img src="{{ asset('img/icon/rotate-arrow-black02.svg')  }}" alt="icon">
                                            <img src="{{ asset('img/icon/rotate-arrow-black02.svg')  }}" alt="icon">
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.254272231177!2d90.3654215!3d23.7985508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1592852423971!5m2!1sen!2sbd"></iframe>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact end -->

            
         </main>
         <!-- main area end -->
        
    </div>

@endsection
