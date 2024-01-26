<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('frontend.components.head')
</head>

<body>
     <!-- Page Preloder -->
     <div id="preloder">
        <div class="loader"></div>
    </div>
    @include('frontend.components.header')
    @yield('content')
    @include('frontend.components.footer')
 <!-- Js Plugins -->
 <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
 <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
 <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
 <script src="{{ asset('js/mixitup.min.js') }}"></script>
 <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>