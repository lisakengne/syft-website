<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Syft Consulting" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Syft Consulting" />
    <meta name="description" content="Syft Consulting website" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    <link href="{{ asset('public/fonts/circo.css') }}" rel="stylesheet" type="text/css"/>


    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    <!-- title  -->
    <title>@yield('title', "Syft Consulting")</title>

    <!-- favicon -->
    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('public/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/plugins-mobile.css') }}" />

    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('public/search/search.css') }}" />

    <!-- switcher css -->
    <link href="{{ asset('public/css/switcher.css') }}" rel="stylesheet">
    <!-- core style css -->
    <link href="{{ asset('public/css/styles-3.css') }}" rel="stylesheet" id="colors" />
    <link href="{{ asset('public/css/custom.css') }}" rel="stylesheet" />

    {!! NoCaptcha::renderJs() !!}

    @yield('style')



</head>

<body>

<!-- start page loading -->
<div id="preloader">
    <div class="row loader">
        <div class="loader-icon"></div>
    </div>
</div>
<!-- end page loading -->

<!-- start main-wrapper section -->
<div class="main-wrapper">

    <!-- start header section -->
    @include('frontend.includes.header')
    <!-- end header section -->
    @yield('content')
    <!-- start footer section -->
    @include('frontend.includes.footer')
    <!-- end footer section -->

</div>

<!-- end main-wrapper section -->

<!-- start scroll to top -->
<a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
<!-- end scroll to top -->
<!-- core.min js -->

<script src="{{ asset('public/js/core.min.js') }}"></script>
<script src="{{asset('public/js/plugins/toastr.js')}}"></script>

<!-- Serch -->
<script src="{{ asset('public/search/search.js') }}"></script>

<!-- custom scripts -->
<script src="{{ asset('public/js/main.js') }}"></script>


<!-- contact form scripts -->
<script src="{{ asset('public/js/mailform/jquery.form.min.js') }}"></script>
<script src="{{ asset('public/js/mailform/jquery.rd-mailform.min.c.js') }}"></script>
<script src="{{ asset('public/js/plugins/swiper.min.js') }}"></script>
<script src="{{ asset('public/js/global.js')}}"></script>
<!-- Start of LiveChat (www.livechatinc.com) code -->
{{--<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12794856;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/12794856/" rel="nofollow">Chat with</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->--}}
{!! NoCaptcha::renderJs(session()->get('locale'), true, 'recaptchaCallback') !!}
<script>
    $(document).ready(function (){
        var $window =  $(window);
        $window.on('scroll', function () {
            var scroll = $window.scrollTop();
            var innerlogo = $(".navbar-brand.inner-logo img");
            var bluelogo = $(".navbar-brand.blue-logo img");
            var darklogo = $(".navbar-brand.dark-logo img");
            if (scroll <= 50) {
                $("header").removeClass("scrollHeader").addClass("fixedHeader");
                bluelogo.attr('src', '{{ asset('public/img/logos/logo-white.png') }}');
                darklogo.attr('src', '{{ asset('public/img/logos/logo-white.png') }}');
                innerlogo.attr('src', '{{ asset('public/img/logos/logo-white.png') }}');
            } else {
                $("header").removeClass("fixedHeader").addClass("scrollHeader");
                darklogo.attr('src', '{{ asset('public/img/logos/Nexah_dark_logo_2023.png') }}');
                if ($window.width() >= 992) {
                    bluelogo.attr('src', '{{ asset('public/img/logos/logo-blue.png') }}');
                    innerlogo.attr('src', '{{ asset('public/img/logos/logo.png') }}');
                }
            }
        });

    });
</script>


@yield('script')

</body>

</html>
