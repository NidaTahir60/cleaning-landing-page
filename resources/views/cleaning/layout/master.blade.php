<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>cleaning - Services</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Professional cleaning services for homes and businesses. Efficient, reliable, and thorough solutions for all your cleaning needs." />
        
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendors.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/icon.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/demos/logistics/logistics.css') }}" />

    </head>
    <body data-mobile-nav-style="classic">
        
        @include('cleaning.partials.header')
        
        @yield('content')
        
        @include('cleaning.partials.footer')
        
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        
        <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/vendors.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

    </body>
</html>