    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ appName() }} | @yield('title')</title>
    <meta property="og:site_name" content="@yield('sitename', appName())" />
    <meta name="author" content="@yield('meta_author', 'Antasus Development Team')">
    <meta name="keywords" content="KEYWORD 1, KEYWORD 2, KEYWORD 3" />
    <meta name="robots" content="index, follow, max-snippet:[120], max-image-preview:[large]" />
    <meta property=“og:description“ content="KURZE BESCHREIBUNG DES INHALTS" />
    <meta name="description" content="@yield('meta_description', appName())">
