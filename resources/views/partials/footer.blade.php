@php
    $footer = \App\Models\Footer::getActive();
@endphp

@if($footer)
<footer class="footer footer-style-one mt-60">
    <div class="xb-footer-wrap">

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
            <div class="xb-footer-nav-item follow-us">
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
            </div>

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
