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
        <title>@yield('title', 'Doka Hausservice – Hausmeisterdienst in Braunschweig & Peine')</title>
        <meta name="description" content="Doka Hausservice – Ihr zuverlässiger und transparenter Hausmeisterdienst in Braunschweig & Peine. Persönlich, schnell und lösungsorientiert.">
        <meta name="keywords" content="Hausmeisterdienst, Braunschweig, Peine, Reinigung, Objektbetreuung, Immobilienservice, Facility Management">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Doka Hausservice eGbR">

        <!-- Canonical -->
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- Open Graph -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="Doka Hausservice – Hausmeisterdienst Braunschweig & Peine">
        <meta property="og:description" content="Zuverlässiger Hausmeisterdienst – Garten, Technik, Reinigung, 360° Service">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:site_name" content="Doka Hausservice">
        <meta property="og:image" content="{{ asset('images/logo/felix_logo.png') }}">

        <!-- X (Twitter) Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@FelixMachts">
        <meta name="twitter:title" content="Doka Hausservice – Hausmeisterdienst">
        <meta name="twitter:description" content="Zuverlässiger Hausmeisterservice in Peine & Braunschweig">
        <meta name="twitter:image" content="{{ asset('images/logo/felix_logo.png') }}">

        {{-- Fav Icon --}}
        <link rel="icon" href="{{ asset('images/logo/favicon.ico') }}" type="image/x-icon"/>

        {{-- Styles --}}
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- cookieconsent -->
        <link rel="stylesheet" href="{{ asset('lib/dp_cookieconsent/css/cookieconsent.css') }}">
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

        <main>
            <div>
                {{ $slot }}
            </div>
        </main>

        {{-- Footer --}}
        @include('frontend.footer.footer')

        @livewireScripts
    </body>
</html>
