<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
<head>

    @include('frontend.layouts.metahelper')
    @yield('meta')

    @stack('before-styles')
    <link href="{{ asset('css/backend.min.css') }}" rel="stylesheet">
    @notifyCss
    <livewire:styles />
    @stack('after-styles')

</head>
<body class="c-app">

    @include('backend.includes.sidebar')

    <div class="c-wrapper c-fixed-components">

        @include('backend.includes.header')
        @include('includes.partials.logged-in-as')
        @include('includes.partials.backendannouncements')


        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        @include('includes.partials.messages')

                        @yield('content')

                    </div><!--fade-in-->
                </div><!--container-fluid-->
            </main>
        </div><!--c-body-->

        @include('backend.includes.footer')
    </div><!--c-wrapper-->

    @stack('before-scripts')
    <script src="{{ asset('js/manifest.min.js') }}"></script>
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/backend.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/cda77fc004.js" crossorigin="anonymous"></script>
    @notifyJs
    <livewire:scripts />
    @stack('after-scripts')
</body>
</html>
