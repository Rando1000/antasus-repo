<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
<head>

    @include('frontend.layouts.metahelper')
    @yield('meta')

    @stack('before-styles')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/frontend.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cryptowallet.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/market.css') }}" rel="stylesheet"> --}}

    <livewire:styles />
    @stack('after-styles')

    @include('includes.partials.ga')
</head>
<body>
    
    @include('includes.partials.read-only')
    @include('includes.partials.logged-in-as')
    @include('includes.partials.announcements')
    @include('frontend.includes.partials.header')

    {{-- @foreach ($categories as $category) --}}
        
    

    

    {{-- @endforeach --}}

    <div class="app"  id="app">


        <main class="containery">
            @include('includes.partials.messages')
            @yield('content')
        </main>
    </div><!--app-->
    @include('cookieConsent::index')
    @include('frontend.includes.partials.footer')

    @stack('before-scripts')
    <script src="{{ asset('js/manifest.min.js') }}"></script>
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/frontend.min.js') }}"></script>
    <script src="{{ asset('js/market.js') }}"></script>
    <script src="{{ asset('js/preis-pro.js') }}"></script>
    {{-- <script src="{{ asset('js/searchbar.js') }}"></script> --}}
    <script src="https://kit.fontawesome.com/cda77fc004.js" crossorigin="anonymous"></script>

    <livewire:scripts />

    @stack('after-scripts')

    @include('frontend.auth.login')
    @include('frontend.auth.register')

</body>
</html>
