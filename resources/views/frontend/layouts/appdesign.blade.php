<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
<head>

    @include('frontend.layouts.metahelper')
    @yield('meta')

    @stack('before-styles')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">

    <livewire:styles />
    @stack('after-styles')

    @include('includes.partials.ga')
</head>
<body>
    @include('includes.partials.read-only')
    @include('includes.partials.logged-in-as')
    @include('frontend.includes.partials.header')
    @include('includes.partials.announcements')



    <div class="app"  id="app">


        <main class="container py-4">
            @include('includes.partials.messages')
            @yield('content')
        </main>
    </div><!--app-->
    @include('cookieConsent::index')
    @include('frontend.includes.partials.footer')

    @stack('before-scripts')
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/frontend.js') }}"></script>

    <livewire:scripts />

    @stack('after-scripts')

    @include('frontend.auth.login')
    @include('frontend.auth.register')

</body>
</html>
