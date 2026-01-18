<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>

@include('partials.head')
@include('partials.header')
@yield('content')
@include('partials.footer')
@include('partials.all-scripts')

<!-- JS -->
{{--  <script src="{{ asset('js/jquery.js') }}"></script>  --}}
<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/swiper.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
