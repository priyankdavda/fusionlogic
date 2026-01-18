<!-- header start -->
<header id="xb-header-area" class="header-area header-style--one header-transparent is-sticky">
    <div class="xb-header stricky">
        <div class="container mxw-1650">
            <div class="header__wrap ul_li_between">
                <div class="xb-header-logo">
                    <a href="{{ url('/') }}" class="logo1">
                        <img src="{{ asset('img/logo/fusion-logic.svg') }}" alt="Fusion Logic">
                    </a>
                </div>
                
                <div class="main-menu__wrap navbar navbar-expand-lg p-0">
                    <nav class="main-menu collapse navbar-collapse">
                        <ul>
                            @foreach($navigationItems as $item)
                                <li class="{{ $item->hasChildren() ? 'menu-item-has-children' : '' }} {{ $item->css_class ?? '' }}">
                                    <a href="{{ $item->url ?? '#' }}" target="{{ $item->target ?? '_self' }}">
                                        @if($item->icon)
                                            <i class="{{ $item->icon }}"></i>
                                        @endif
                                        <span>{{ $item->title }}</span>
                                    </a>
                                    
                                    @if($item->activeChildren->count() > 0)
                                        <ul class="submenu">
                                            @foreach($item->activeChildren as $child)
                                                <li class="{{ $child->hasChildren() ? 'menu-item-has-children' : '' }} {{ $child->css_class ?? '' }}">
                                                    <a href="{{ $child->url ?? '#' }}" target="{{ $child->target ?? '_self' }}">
                                                        @if($child->icon)
                                                            <i class="{{ $child->icon }}"></i>
                                                        @endif
                                                        <span>{{ $child->title }}</span>
                                                    </a>
                                                    
                                                    @if($child->activeChildren->count() > 0)
                                                        <ul class="submenu">
                                                            @foreach($child->activeChildren as $grandchild)
                                                                <li class="{{ $grandchild->css_class ?? '' }}">
                                                                    <a href="{{ $grandchild->url ?? '#' }}" target="{{ $grandchild->target ?? '_self' }}">
                                                                        @if($grandchild->icon)
                                                                            <i class="{{ $grandchild->icon }}"></i>
                                                                        @endif
                                                                        <span>{{ $grandchild->title }}</span>
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                
                <div class="header-btn">
                    <a class="thm-btn" href="{{ url('/quote') }}">Request A Quote</a>
                </div>
                
                <div class="header-bar-mobile side-menu d-lg-none">
                    <a class="xb-nav-mobile" href="javascript:void(0);">
                        <i class="far fa-bars"></i>
                    </a>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div class="xb-header-wrap">
                <div class="xb-header-menu">
                    <div class="xb-header-menu-scroll">
                        <div class="xb-menu-close xb-hide-xl xb-close"></div>
                        <div class="xb-logo-mobile xb-hide-xl">
                            <a href="{{ url('/') }}" rel="home">
                                <img src="{{ asset('img/logo/logo.svg') }}" alt="Fusion Logic">
                            </a>
                        </div>

                        <nav class="xb-header-nav">
                            <ul class="xb-menu-primary clearfix">
                                @foreach($navigationItems as $item)
                                    <li class="{{ $item->hasChildren() ? 'menu-item menu-item-has-children' : 'menu-item' }} {{ $item->css_class ?? '' }}">
                                        <a href="{{ $item->url ?? '#' }}" target="{{ $item->target ?? '_self' }}">
                                            @if($item->icon)
                                                <i class="{{ $item->icon }}"></i>
                                            @endif
                                            <span>{{ $item->title }}</span>
                                        </a>
                                        
                                        @if($item->activeChildren->count() > 0)
                                            <ul class="sub-menu">
                                                @foreach($item->activeChildren as $child)
                                                    <li class="{{ $child->hasChildren() ? 'menu-item menu-item-has-children' : '' }} {{ $child->css_class ?? '' }}">
                                                        <a href="{{ $child->url ?? '#' }}" target="{{ $child->target ?? '_self' }}">
                                                            @if($child->icon)
                                                                <i class="{{ $child->icon }}"></i>
                                                            @endif
                                                            <span>{{ $child->title }}</span>
                                                        </a>
                                                        
                                                        @if($child->activeChildren->count() > 0)
                                                            <ul class="sub-menu">
                                                                @foreach($child->activeChildren as $grandchild)
                                                                    <li class="{{ $grandchild->css_class ?? '' }}">
                                                                        <a href="{{ $grandchild->url ?? '#' }}" target="{{ $grandchild->target ?? '_self' }}">
                                                                            @if($grandchild->icon)
                                                                                <i class="{{ $grandchild->icon }}"></i>
                                                                            @endif
                                                                            <span>{{ $grandchild->title }}</span>
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="xb-header-menu-backdrop"></div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->