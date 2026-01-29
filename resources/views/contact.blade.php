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
                            @if(!empty($footer->contact_info['address']))
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="xb-contact-items img-hove-effect xb-border">
                                    <div class="xb-item--inner">
                                        <div class="xb-icon">
                                            <img src="{{ asset('img/icon/service-icon01.svg')  }}" alt="icon">
                                        </div>
                                        <div class="xb-item--holder">
                                            <h3 class="title">Address</h3>
                                            <span class="xb-item--contact_info">{{ collect($footer->contact_info['address'])->filter()->join(', ') }}</span>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(!empty($footer->contact_info['phone']))
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="xb-contact-items img-hove-effect xb-border">
                                    <div class="xb-item--inner">
                                        <div class="xb-icon">
                                            <img src="{{ asset('img/icon/service-icon01.svg')  }}" alt="icon">
                                        </div>
                                        <div class="xb-item--holder">
                                            <h3 class="title">Phone Number</h3>
                                            <span class="xb-item--contact_info"><a href="tel:{{ $footer->contact_info['phone'] }}">{{ $footer->contact_info['phone'] }}</a></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(!empty($footer->contact_info['email']))

                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="xb-contact-items img-hove-effect xb-border">
                                    <div class="xb-item--inner">
                                        <div class="xb-icon">
                                            <img src="{{ asset('img/icon/service-icon01.svg')  }}" alt="icon">
                                        </div>
                                        <div class="xb-item--holder">
                                            <h3 class="title">Email</h3>
                                            <span class="xb-item--contact_info"><a href="mailto:{{ $footer->contact_info['email'] }}"> {{ $footer->contact_info['email'] }}</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </section>
            <!-- contact end -->


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
