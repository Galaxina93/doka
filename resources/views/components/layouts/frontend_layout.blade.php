<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16884172156"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-16884172156');
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- SEO Meta --}}
        <title>@yield('title', 'Bollmann Hausservice – Hausmeisterdienst in Uetze und Umgebung')</title>
        <meta name="description" content="Bollmann Hausservice – Ihr zuverlässiger und transparenter Hausmeisterdienst in Uetze und Umgebung. Persönlich, schnell und lösungsorientiert.">
        <meta name="keywords" content="Hausmeisterdienst, Uetze, Reinigung, Objektbetreuung, Immobilienservice, Facility Management, Handwerk">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Bollmann Hausservice">

        <!-- Canonical -->
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- Open Graph -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="Bollmann Hausservice – Hausmeisterdienst Uetze und Umgebung">
        <meta property="og:description" content="Zuverlässiger Hausmeisterdienst – Garten, Technik, Reinigung, 360° Service">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:site_name" content="Bollmann Hausservice">
        <meta property="og:image" content="{{ asset('images/logo/logo.png') }}">

        {{-- Fav Icon --}}
        <link rel="icon" href="{{ asset('images/logo/favicon.ico') }}" type="image/x-icon"/>

        {{-- Styles --}}
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- cookieconsent -->
        <link rel="stylesheet" href="{{ asset('lib/dp_cookieconsent/css/cookieconsent.css') }}?v=2">
        <script type="module" src="{{ asset('lib/dp_cookieconsent/js/cookieconsent-config.js') }}"></script>

        {{-- Swiper --}}
        <link href="{{ asset('components/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <script src="{{ asset('components/swiper/swiper-bundle.min.js') }}"></script>

        {{-- Scripts --}}
        <script src="{{ asset('js/app.js') }}" defer></script>

        {{-- Livewire --}}
        @livewireStyles
    </head>

    <body class="min-h-screen overflow-x-hidden antialiased">

        @include('frontend.partials.site_btn_up_and_down')

        <header>
            @include('frontend.navigation.navigation')
        </header>

        <main class="pt-32">
            <div>
                {{ $slot }}
            </div>
        </main>

        {{-- Footer --}}
        @include('frontend.footer.footer')

        @livewireScripts
    </body>
</html>
