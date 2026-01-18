{{-- ================= JS FILES ================= --}}

<!-- Core dependencies -->
<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<!-- Core utilities / layout helpers -->
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/easing.min.js') }}"></script>
<script src="{{ asset('js/scrollspy.js') }}"></script>

<!-- Animation & Effect libraries -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/parallaxie.js') }}"></script>
<script src="{{ asset('js/parallax-scroll.js') }}"></script>
<script src="{{ asset('js/imageRevealHover.js') }}"></script>
<script src="{{ asset('js/jquery.marquee.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
{{--  <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>  --}}
<script src="{{ asset('js/odometer.min.js') }}"></script>

<!-- Sliders -->
<script src="{{ asset('js/swiper.min.js') }}"></script>

<!-- Special plugins -->
<script src="{{ asset('js/plugin.js') }}"></script>
<script src="{{ asset('js/lenis.js') }}"></script>
<script src="{{ asset('js/magiccursor.js') }}"></script>

<!-- Main custom script -->
<script src="{{ asset('js/main.js') }}"></script>

@stack('scripts')
