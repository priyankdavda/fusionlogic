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

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/697b76e72893b51c32bbdb9f/1jg54gu60';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    
</body>
</html>
