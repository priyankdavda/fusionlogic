@php
    $footer = \App\Models\Footer::getActive();
@endphp

@if($footer)

<footer class="footer footer-style-one mt-60">
    <div class="xb-footer-wrap pt-0">
        @if(!empty($footer->social_links))
            <div class="xb-social-media-wrap mt-0">
                @foreach($footer->social_links as $social)
                    <div class="xb-social-media-item ul_li_between">
                        <div class="xb-item--holder ul_li">
                            <div class="xb-item--icon">
                                <i class="fa-brands {{ $social['icon'] }}"></i>
                            </div>
                            <span class="xb-item--name">
                                {{ ucfirst($social['platform']) }}
                            </span>
                        </div>

                        <span class="xb-item--arrow">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="5.06641" y="19.2783" width="20.5712" height="2.61221"
                                    transform="rotate(-40.2798 5.06641 19.2783)" fill="white"/>
                                <rect x="7.97144" y="6.54443" width="2.61221" height="2.61221"
                                    transform="rotate(-40.2798 7.97144 6.54443)" fill="white"/>
                                <rect x="11.6528" y="6.84814" width="2.61221" height="2.61221"
                                    transform="rotate(-40.2798 11.6528 6.84814)" fill="white"/>
                                <rect x="15.3345" y="7.15186" width="2.61221" height="2.61221"
                                    transform="rotate(-40.2798 15.3345 7.15186)" fill="white"/>
                                <rect x="18.7124" y="11.1372" width="2.61221" height="2.61221"
                                    transform="rotate(-40.2798 18.7124 11.1372)" fill="white"/>
                                <rect x="18.4089" y="14.8198" width="2.61221" height="2.61221"
                                    transform="rotate(-40.2798 18.4089 14.8198)" fill="white"/>
                                <rect x="18.1045" y="18.501" width="2.61221" height="2.61221"
                                    transform="rotate(-40.2798 18.1045 18.501)" fill="white"/>
                            </svg>
                        </span>

                        <a class="xb-overlay"
                        href="{{ $social['url'] }}"
                        target="_blank"
                        aria-label="{{ $social['platform'] }}">
                        </a>
                    </div>
                @endforeach
            </div>
        @endif

        {{-- Top Navigation --}}
        <div class="xb-footer-nav">

            {{-- Services --}}
            <div class="xb-footer-nav-item">
                <h2 class="title">FL Services</h2>
                <ul>
                    @foreach($footer->services ?? [] as $item)
                        <li>
                            <a href="{{ $item['url'] }}"
                               @if($item['open_new_tab'] ?? false) target="_blank" @endif>
                                {{ $item['title'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Information --}}
            <div class="xb-footer-nav-item">
                <h2 class="title">Information</h2>
                <ul>
                    @foreach($footer->information ?? [] as $item)
                        <li>
                            <a href="{{ $item['url'] }}"
                               @if($item['open_new_tab'] ?? false) target="_blank" @endif>
                                {{ $item['title'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Resources --}}
            <div class="xb-footer-nav-item">
                <h2 class="title">Resources</h2>
                <ul>
                    @foreach($footer->resources ?? [] as $item)
                        <li>
                            <a href="{{ $item['url'] }}"
                               @if($item['open_new_tab'] ?? false) target="_blank" @endif>
                                {{ $item['title'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Social Links --}}
            <!-- <div class="xb-footer-nav-item follow-us">
                <h2 class="title">Follow Us</h2>
                <ul>
                    @foreach($footer->social_links ?? [] as $social)
                        <li>
                            <a href="{{ $social['url'] }}" target="_blank">
                                @if(!empty($social['icon']))
                                    <i class="fa-brands {{ $social['icon'] }}"></i>
                                @endif
                                {{ ucfirst($social['platform']) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div> -->

        </div>

        {{-- Contact Info --}}
        <div class="xb-footer-bottom 3-col">

            @if(!empty($footer->contact_info['address']))
                <div class="contact-item">
                    <img src="{{ asset('img/icon/location-icon.svg') }}">
                    <span class="contact-method">
                        {{ collect($footer->contact_info['address'])->filter()->join(', ') }}
                    </span>
                </div>
            @endif

            @if(!empty($footer->contact_info['phone']))
                <div class="contact-item">
                    <a href="tel:{{ $footer->contact_info['phone'] }}">
                        <img src="{{ asset('img/icon/call-icon.svg') }}">
                    </a>
                    <a class="contact-method" href="tel:{{ $footer->contact_info['phone'] }}">
                        {{ $footer->contact_info['phone'] }}
                    </a>
                </div>
            @endif

            @if(!empty($footer->contact_info['email']))
                <div class="contact-item">
                    <a class="mail" href="mailto:{{ $footer->contact_info['email'] }}">
                        <img src="{{ asset('img/icon/email-icon-green.svg') }}">
                    </a>
                    <a class="contact-method" href="mailto:{{ $footer->contact_info['email'] }}">
                        {{ $footer->contact_info['email'] }}
                    </a>
                </div>
            @endif

        </div>

        {{-- Copyright --}}
        <div class="xb-footer-bottom-copyright">
            <div class="contact-item">
                <p>
                    Copyright © {{ $footer->copyright_year }}
                    {{ $footer->copyright_text }}
                </p>
            </div>
        </div>

    </div>
</footer>
@endif
