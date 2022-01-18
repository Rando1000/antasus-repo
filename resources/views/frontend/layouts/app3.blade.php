<!DOCTYPE html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
<head>

    @include('frontend.layouts.metahelper')
    @yield('meta')

    @stack('before-styles')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" />
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/account.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    

    <livewire:styles />
    @stack('after-styles')
    @notifyCss
    @include('includes.partials.ga')
</head>
<body>
    @include('includes.partials.read-only')
    @include('includes.partials.logged-in-as')

    <x:notify-messages />
    @include('frontend.includes.sidebaracc')




    <div class="app"  id="app">



        <main class="container py-4" id="mains">

            @include('includes.partials.messages')
            @yield('content')
            
        </main>
    </div><!--app-->
    @include('cookieConsent::index')


    @stack('before-scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('js/manifest.min.js') }}"></script>
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/frontend.min.js') }}"></script>
    <script src="{{ asset('js/accounts.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/cda77fc004.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <livewire:scripts />
    @notifyJs
    @stack('after-scripts')

    @include('frontend.auth.login')
    @include('frontend.auth.register')

</body>
</html>
