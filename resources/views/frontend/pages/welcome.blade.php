<x-layouts.frontend_layout>

    <x-sections.page-container>

        <!-- Hero Section -->
        <section id="home"
                 class="relative pt-16 overflow-hidden text-white"
                 style="background: url('{{ URL::to('/images/doka/bg.png') }}') center/cover no-repeat;"
                 aria-label="Doka Hausservice - Ihr Partner für Handwerk und Gebäudeservice in Uetze und Umgebung">

            <div class="absolute inset-0 bg-black opacity-60"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-40 relative z-10">
                <div class="text-center">

                    <h1 class="text-2xl md:text-6xl font-bold mb-8">
                        Doka Hausservice: Handwerk & Betreuung aus einer Hand.
                    </h1>

                    <p class="text-xl md:text-2xl mb-14 opacity-90">
                        Von Renovierung und Innenausbau bis zum kompletten Hausmeisterservice – wir sind Ihr zuverlässiger Partner in Uetze und Umgebung.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                        <a href="#contact"
                           class="bg-white text-primary px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105"
                           aria-label="Jetzt unverbindlich Kontakt aufnehmen">
                            JETZT Anfrage senden
                        </a>
                    </div>

                    <div class="flex justify-center items-center gap-2 text-white mt-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <a href="tel:+4917654630078" class="hover:underline text-2xl">
                            +49 176 5463 0078
                        </a>
                    </div>

                    <p class="text-sm mt-4 opacity-75">
                        Ihre Anfrage ist natürlich komplett unverbindlich
                    </p>
                </div>

            </div>

            <div class="absolute top-20 left-10 w-20 h-20 bg-white opacity-10 rounded-full"></div>
            <div class="absolute bottom-20 right-10 w-32 h-32 bg-white opacity-10 rounded-full" style="animation-delay: 1s;"></div>
        </section>

        <!-- Service Section -->
        <section id="services" class="bg-white text-black py-24 px-6 lg:px-12">
            <header class="text-center mb-16">
                <h2 class="text-primary font-bold text-3xl sm:text-4xl lg:text-5xl">Unsere Leistungen im Detail</h2>
                <p class="mt-4 text-gray-600 text-base max-w-3xl mx-auto">
                    Vom Innenausbau bis zur Objektpflege: Wir sind Ihr zuverlässiger Partner für Renovierung, Instandhaltung und Betreuung Ihrer Immobilie.
                </p>
            </header>

            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Leistung: 1. Innenausbau (Maler, Trockenbau) --}}
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform hover:scale-105 motion-safe:animate-fadeIn flex flex-col" style="animation-delay: 0s;">
                    <figure>
                        <img src="{{ URL::to('/images/doka/services/maler-ausbesserungsarbeiten.png') }}" alt="Maler- und Ausbesserungsarbeiten" class="w-full h-56 object-cover">
                    </figure>
                    <div class="bg-gradient-to-br from-primary to-primary-dark p-6">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Renovierung</h3>
                    </div>
                    <div class="p-6 flex-1">
                        <p class="text-gray-600 mb-4">Frische Wände und neue Räume. Wir setzen Ihre Vorstellungen vom Anstrich bis zum Innenausbau professionell um.</p>
                        <ul class="text-sm text-gray-500 space-y-1 list-disc list-inside">
                            <li>Maler- & Ausbesserungsarbeiten</li>
                            <li>Trockenbauarbeiten</li>
                            <li>Wand- & Deckenverkleidung</li>
                        </ul>
                    </div>
                </article>

                {{-- Leistung: 2. Boden- & Fugenarbeiten --}}
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform hover:scale-105 motion-safe:animate-fadeIn flex flex-col" style="animation-delay: 0.2s;">
                    <figure>
                        <img src="{{ URL::to('/images/doka/services/laminat-bodenverlegung.png') }}" alt="Laminat- und Bodenverlegung" class="w-full h-56 object-cover">
                    </figure>
                    <div class="bg-gradient-to-br from-primary to-primary-dark p-6">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h9A2.25 2.25 0 0 1 19.5 6v.878m-13.5 0A2.25 2.25 0 0 0 4.5 9v.878m13.5 0A2.25 2.25 0 0 1 19.5 9v.878m0 0A2.25 2.25 0 0 1 18 11.25v2.25a2.25 2.25 0 0 1-2.25 2.25h-9A2.25 2.25 0 0 1 4.5 13.5v-2.25A2.25 2.25 0 0 1 6 9v-.878m13.5 0v.878" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Boden- & Fugenarbeiten</h3>
                    </div>
                    <div class="p-6 flex-1">
                        <p class="text-gray-600 mb-4">Ein neuer Boden wertet jeden Raum auf. Wir verlegen fachgerecht und erneuern Abdichtungen präzise.</p>
                        <ul class="text-sm text-gray-500 space-y-1 list-disc list-inside">
                            <li>Laminat- & Bodenverlegung</li>
                            <li>Silikon- & Fugenarbeiten</li>
                            <li>Sockelleistenmontage</li>
                        </ul>
                    </div>
                </article>

                {{-- Leistung: 3. Hausmeisterservice --}}
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform hover:scale-105 motion-safe:animate-fadeIn flex flex-col" style="animation-delay: 0.4s;">
                    <figure>
                        <img src="{{ URL::to('/images/doka/services/hausmeisterservice.png') }}" alt="Hausmeisterservice Collage (Reparatur, Heckenschnitt)" class="w-full h-56 object-cover">
                    </figure>
                    <div class="bg-gradient-to-br from-primary to-primary-dark p-6">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Hausmeisterservice</h3>
                    </div>
                    <div class="p-6 flex-1">
                        <p class="text-gray-600 mb-4">Ihr zuverlässiger Partner vor Ort. Wir kümmern uns um die technische Betreuung und Instandhaltung Ihrer Immobilie.</p>
                        <ul class="text-sm text-gray-500 space-y-1 list-disc list-inside">
                            <li>Rund-ums-Haus-Service</li>
                            <li>Regelmäßige Objektkontrollen</li>
                            <li>Kleinreparaturen & Wartung</li>
                        </ul>
                    </div>
                </article>

                {{-- Leistung: 4. Gebäudereinigung & Außenpflege --}}
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform hover:scale-105 motion-safe:animate-fadeIn flex flex-col" style="animation-delay: 0.6s;">
                    <figure>
                        <img src="{{ URL::to('/images/doka/services/gebaeudereinigung.png') }}" alt="Professionelle Gebäudereinigung einer Lobby" class="w-full h-56 object-cover">
                    </figure>
                    <div class="bg-gradient-to-br from-primary to-primary-dark p-6">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09Z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Reinigung (Innen & Außen)</h3>
                    </div>
                    <div class="p-6 flex-1">
                        <p class="text-gray-600 mb-4">Für einen sauberen und gepflegten ersten Eindruck. Wir reinigen zuverlässig Ihre Innen- und Außenbereiche.</p>
                        <ul class="text-sm text-gray-500 space-y-1 list-disc list-inside">
                            <li>Gebäudereinigung (z.B. Treppenhaus)</li>
                            <li>Außenreinigung (Hof, Wege)</li>
                            <li>Pflege von Parkplätzen</li>
                        </ul>
                    </div>
                </article>

                {{-- Leistung: 5. Winterdienst --}}
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform hover:scale-105 motion-safe:animate-fadeIn flex flex-col" style="animation-delay: 0.8s;">
                    <figure>
                        <img src="{{ URL::to('/images/doka/services/winterdienst.png') }}" alt="Zuverlässiger Winterdienst mit Räumfahrzeug" class="w-full h-56 object-cover">
                    </figure>
                    <div class="bg-gradient-to-br from-primary to-primary-dark p-6">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 0 0 4.5 4.5H18a3.75 3.75 0 0 0 1.332-7.257 3 3 0 0 0-3.758-3.848 5.25 5.25 0 0 0-10.233 2.33A4.502 4.502 0 0 0 2.25 15Z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Winterdienst</h3>
                    </div>
                    <div class="p-6 flex-1">
                        <p class="text-gray-600 mb-4">Sicher durch die kalte Jahreszeit. Wir sorgen für freie und sichere Wege gemäß den gesetzlichen Vorgaben.</p>
                        <ul class="text-sm text-gray-500 space-y-1 list-disc list-inside">
                            <li>Schnee- & Eisbeseitigung</li>
                            <li>Streudienst für Wege & Parkplätze</li>
                            <li>24/7-Bereitschaft im Winter</li>
                        </ul>
                    </div>
                </article>

                {{-- Leistung: 6. Haushaltsauflösung --}}
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform hover:scale-105 motion-safe:animate-fadeIn flex flex-col" style="animation-delay: 1s;">
                    <figure>
                        <img src="{{ URL::to('/images/doka/services/haushaltsaufloesung.png') }}" alt="Haushaltsauflösung und Entrümplung" class="w-full h-56 object-cover">
                    </figure>
                    <div class="bg-gradient-to-br from-primary to-primary-dark p-6">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12.578 0a48.108 48.108 0 0 1-3.478-.397m15.908 0A48.11 48.11 0 0 0 12 5.19c-2.67 0-5.193.358-7.602.997M11.99 5.19c-.07.35-.12.71-.12 1.075v3.692c0 .408.08.81.23 1.187m0 0h2.14c.15-.376.23-.778.23-1.187V6.265c0-.366-.05-.726-.12-1.075M12 12h.008v.008H12V12Z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Haushaltsauflösung</h3>
                    </div>
                    <div class="p-6 flex-1">
                        <p class="text-gray-600 mb-4">Wir schaffen Platz und Ordnung. Diskret, schnell und besenrein – von der Entrümplung bis zur Auflösung.</p>
                        <ul class="text-sm text-gray-500 space-y-1 list-disc list-inside">
                            <li>Komplette Haushaltsauflösungen</li>
                            <li>Entrümplung (Keller, Dachboden)</li>
                            <li>Fachgerechte Entsorgung</li>
                        </ul>
                    </div>
                </article>

            </div>
        </section>

        <!-- Team Section -->
        <section id="team" class="bg-gray-100 text-black py-24 px-6 lg:px-12">
            <header class="text-center mb-16">
                <h2 class="text-primary font-bold text-3xl sm:text-4xl lg:text-5xl">Lernen Sie die Geschäftsführer kennen</h2>
                <p class="mt-4 text-gray-600 text-base max-w-3xl mx-auto">
                    Karsten Bollmann und Dominik Jung sind Ihre direkten Ansprechpartner und Gründer der Doka Hausservice eGbR.
                </p>
            </header>

            <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">

                {{-- Teammitglied 1: Karsten Bollmann --}}
                <article class="bg-white rounded-2xl shadow-lg p-8 text-center flex flex-col items-center">
                    <figure class="mb-6">
                        <img src="{{ URL::to('/images/doka/karsten_bollmann.jpg') }}" alt="Portrait von Karsten Bollmann" class="w-40 h-40 rounded-full object-cover mx-auto shadow-md">
                    </figure>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Karsten Bollmann</h3>
                    <p class="text-primary font-semibold mb-4">Geschäftsführer & Gründer</p>
                    <p class="text-gray-600 mb-4 flex-1">
                        Als einer der Gründer von Doka Hausservice legt Karsten Bollmann höchsten Wert auf Qualität, Zuverlässigkeit und eine saubere Ausführung aller handwerklichen Tätigkeiten.
                    </p>
                </article>

                {{-- Teammitglied 2: Dominik Jung --}}
                <article class="bg-white rounded-2xl shadow-lg p-8 text-center flex flex-col items-center">
                    <figure class="mb-6">
                        <img src="{{ URL::to('/images/doka/dominik_jung.png') }}" alt="Portrait von Dominik Jung" class="w-40 h-40 rounded-full object-cover mx-auto shadow-md">
                    </figure>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Dominik Jung</h3>
                    <p class="text-primary font-semibold mb-4">Geschäftsführer & Gründer</p>
                    <p class="text-gray-600 mb-4 flex-1">
                        Dominik Jung ist Ihr Ansprechpartner für die Objektbetreuung und den Servicegedanken. Er koordiniert die Einsätze und sorgt dafür, dass Ihre Immobilie stets perfekt betreut ist.
                    </p>
                </article>

            </div>
        </section>

        <!-- Process Section -->
        <section id="process" class="bg-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 fade-in">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Unser bewährter 5-Schritte-Prozess</h2>
                    <p class="text-xl text-gray-600">Für Transparenz und Qualität bei jedem Schritt.</p>
                </div>

                <div class="relative">
                    <div class="hidden lg:block absolute top-16 left-0 w-full h-1 bg-gray-200 my-4">
                        <div class="h-full bg-gradient-to-r from-primary to-primary-light w-full"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
                        <div class="text-center fade-in">
                            <div class="relative">
                                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white text-xl font-bold mx-auto mb-4 shadow-lg">
                                    1
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 pt-4">Erstgespräch</h3>
                            <p class="text-gray-600 text-sm">Sie schildern uns Ihr Anliegen.</p>
                        </div>

                        <div class="text-center fade-in" style="animation-delay: 0.2s;">
                            <div class="relative">
                                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white text-xl font-bold mx-auto mb-4 shadow-lg">
                                    2
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 pt-4">Planung & Konzeption</h3>
                            <p class="text-gray-600 text-sm">Gemeinsame Definition Ihrer Ziele.</p>
                        </div>

                        <div class="text-center fade-in" style="animation-delay: 0.4s;">
                            <div class="relative">
                                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white text-xl font-bold mx-auto mb-4 shadow-lg">
                                    3
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 pt-4">Lösungsvorschlag</h3>
                            <p class="text-gray-600 text-sm">Sie erhalten ein klares Konzept.</p>
                        </div>

                        <div class="text-center fade-in" style="animation-delay: 0.6s;">
                            <div class="relative">
                                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white text-xl font-bold mx-auto mb-4 shadow-lg">
                                    4
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 pt-4">Umsetzung</h3>
                            <p class="text-gray-600 text-sm">Präzise und pünktliche Realisierung.</p>
                        </div>

                        <div class="text-center fade-in" style="animation-delay: 0.8s;">
                            <div class="relative">
                                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white text-xl font-bold mx-auto mb-4 shadow-lg">
                                    5
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 pt-4">Ergebnis & Übergabe</h3>
                            <p class="text-gray-600 text-sm">Wir prüfen gemeinsam das Ergebnis.</p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12 fade-in">
                    <p class="text-xl text-gray-600 mb-8 italic">
                        "Vertrauen Sie auf einen Partner, der Ihre Vision versteht und professionell umsetzt.
                        Wir sind bereit, wenn Sie es sind."
                    </p>
                    <button onclick="scrollToContact()" class="bg-primary text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-primary-dark transition-all transform hover:scale-105 pulse-button">
                        Jetzt unverbindlich anfragen
                    </button>
                </div>
            </div>
        </section>

        <!--References Section-->
        <section id="reference" class="bg-white py-16 px-6 md:px-12">
            <div class="max-w-7xl mx-auto text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Was wir schon gemacht haben</h2>
                <p class="text-lg text-gray-700 max-w-3xl mx-auto">Ein kleiner Einblick in unsere Arbeiten. Alle aufgezeigten Tätigkeiten wurden bei unterschiedlichen Kunden durchgeführt.</p>
            </div>

            <div class="my-12">
                <div class="max-w-5xl mx-auto">
                    @livewire('global.widgets.header-slider')
                </div>
            </div>

            {{--Zwei Bilder pro Kachel--}}
            {{--<div class="max-w-6xl mx-auto grid gap-6 grid-cols-1 sm:grid-cols-2 text-left">
                @php
                    $items = [
                        ['image1' => '/images/slider/Bau eines Zauns.jpg', 'image2' => '/images/slider/Hecken rückschneiden.jpg', 'title' => 'Zaunbau & Heckenrückschnitt', 'text' => 'Gerader Zaun mit Pforte & gepflegte Hecken – sauber getrennt und effizient umgesetzt.'],
                        ['image1' => '/images/slider/Rasen vertikutieren.jpg', 'image2' => '/images/slider/Dach reinigen.jpg', 'title' => 'Rasenpflege & Dachreinigung', 'text' => 'Grüner Rasen, sauberes Dach – für einen gepflegten Außenbereich.'],
                        ['image1' => '/images/slider/Schornstein ausleeren.jpg', 'image2' => '/images/slider/Lampen anbauen.jpg', 'title' => 'Schornstein & Lampen', 'text' => 'Bauschutt raus, Licht rein – clever kombiniert.'],
                        ['image1' => '/images/slider/Neue Türen samt Zargen einbauen.jpg', 'image2' => '/images/slider/Silikonfugen erneuern.jpg', 'title' => 'Türen & Fugen erneuern', 'text' => 'Neue Türen, neue Hygiene – professionell umgesetzt.'],
                        ['image1' => '/images/slider/Dachrinnen reinigen.jpg', 'image2' => '/images/slider/Garten erneuern.jpg', 'title' => 'Dachrinne & Gartenpflege', 'text' => 'Garten neu gedacht & Wasserablauf gesichert.'],
                        ['image1' => '/images/slider/Hof mit Hochdruckreiniger säubern.jpg', 'image2' => '/images/slider/Garageneinfahrt neu pflastern.jpg', 'title' => 'Hofreinigung & Pflasterarbeiten', 'text' => 'Sauberkeit und neuer Bodenbelag für Außenbereiche.'],
                        ['image1' => '/images/slider/Badezimmer bauen.jpg', 'image2' => '/images/slider/Tapezieren der Wände.jpg', 'title' => 'Badezimmer & Tapeten', 'text' => 'Bad modernisieren und Wohnräume auffrischen.'],
                        ['image1' => '/images/slider/Boden neu verlegen.jpg', 'image2' => '/images/slider/Lampen und Steckdosen anbringen.jpg', 'title' => 'Boden & Elektrik', 'text' => 'Solider Untergrund trifft auf sichere Elektrik.'],
                        ['image1' => '/images/slider/Fassaden reinigen.jpg', 'image2' => '/images/slider/Trockenbauarbeiten.jpg', 'title' => 'Fassade & Trockenbau', 'text' => 'Frischer Look für außen und flexible Raumlösungen innen.'],
                        ['image1' => '/images/slider/Giebelwand dämmen.jpg', 'image2' => '/images/slider/Rückbau Küche.jpg', 'title' => 'Dämmung & Rückbau', 'text' => 'Energieeffizienz durch Giebelwanddämmung – alte Küchen weichen für neue Möglichkeiten.'],
                    ];
                @endphp

                @foreach ($items as $item)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-300 ease-in-out hover:-translate-y-2 hover:scale-105 hover:shadow-xl">
                        <div class="flex w-full">
                            <div class="w-1/2 h-full">
                                <img src="{{ $item['image1'] }}" alt="Bild 1" class="object-cover w-full h-full">
                            </div>
                            <div class="w-1/2 h-full">
                                <img src="{{ $item['image2'] }}" alt="Bild 2" class="object-cover w-full h-full">
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-primary mb-1">{{ $item['title'] }}</h3>
                            <p class="text-gray-600 text-sm">{{ $item['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>--}}

{{--            --}}{{-- Reference Tiles – Einzelkacheln je Bild --}}{{--
            <div class="max-w-6xl mx-auto grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 text-left">
                @php
                    $items = [
                        ['image' => '/images/slider/Bau eines Zauns.jpg', 'title' => 'Zaunbau', 'text' => 'Gerader Zaun mit Pforte – solide montiert und langlebig.'],
                        ['image' => '/images/slider/Hecken rückschneiden.jpg', 'title' => 'Heckenrückschnitt', 'text' => 'Gepflegte Hecken für ein aufgeräumtes Gesamtbild.'],

                        ['image' => '/images/slider/Rasen vertikutieren.jpg', 'title' => 'Rasenpflege', 'text' => 'Rasen vertikutieren für dichte und gesunde Grünflächen.'],
                        ['image' => '/images/slider/Dach reinigen.jpg', 'title' => 'Dachreinigung', 'text' => 'Sauberes Dach für bessere Optik und längere Haltbarkeit.'],

                        ['image' => '/images/slider/Schornstein ausleeren.jpg', 'title' => 'Schornstein ausleeren', 'text' => 'Sichere Reinigung und Entleerung von Schornsteinen.'],
                        ['image' => '/images/slider/Lampen anbauen.jpg', 'title' => 'Lampen montieren', 'text' => 'Neue Beleuchtung schnell und sicher installiert.'],

                        ['image' => '/images/slider/Neue Türen samt Zargen einbauen.jpg', 'title' => 'Türen einbauen', 'text' => 'Moderne Türen samt Zargen – fachgerecht eingebaut.'],
                        ['image' => '/images/slider/Silikonfugen erneuern.jpg', 'title' => 'Silikonfugen erneuern', 'text' => 'Für dichte und hygienische Anschlussfugen.'],

                        ['image' => '/images/slider/Dachrinnen reinigen.jpg', 'title' => 'Dachrinne reinigen', 'text' => 'Laubfrei für optimalen Wasserabfluss.'],
                        ['image' => '/images/slider/Garten erneuern.jpg', 'title' => 'Garten neu gestalten', 'text' => 'Gartenpflege und Neugestaltung aus einer Hand.'],

                        ['image' => '/images/slider/Hof mit Hochdruckreiniger säubern.jpg', 'title' => 'Hofreinigung', 'text' => 'Mit Hochdruck für ein sauberes Umfeld.'],
                        ['image' => '/images/slider/Garageneinfahrt neu pflastern.jpg', 'title' => 'Einfahrt pflastern', 'text' => 'Robuste und saubere Garageneinfahrten neu verlegt.'],

                        ['image' => '/images/slider/Badezimmer bauen.jpg', 'title' => 'Badezimmerbau', 'text' => 'Modernes Bad für mehr Wohnkomfort.'],
                        ['image' => '/images/slider/Tapezieren der Wände.jpg', 'title' => 'Wände tapezieren', 'text' => 'Neue Tapeten für frischen Wohnstil.'],

                        ['image' => '/images/slider/Boden neu verlegen.jpg', 'title' => 'Boden verlegen', 'text' => 'Neuer Boden – fachgerecht und sauber verlegt.'],
                        ['image' => '/images/slider/Lampen und Steckdosen anbringen.jpg', 'title' => 'Elektrik installieren', 'text' => 'Sichere Elektroinstallationen für Wohn- und Arbeitsräume.'],

                        ['image' => '/images/slider/Fassaden reinigen.jpg', 'title' => 'Fassade reinigen', 'text' => 'Frischer Look durch saubere Fassadenflächen.'],
                        ['image' => '/images/slider/Trockenbauarbeiten.jpg', 'title' => 'Trockenbau', 'text' => 'Flexible Raumaufteilung und moderne Wandlösungen.'],

                        ['image' => '/images/slider/Giebelwand dämmen.jpg', 'title' => 'Giebelwand dämmen', 'text' => 'Wärmeschutz verbessern durch fachgerechte Dämmung.'],
                        ['image' => '/images/slider/Rückbau Küche.jpg', 'title' => 'Küche zurückbauen', 'text' => 'Rückbau alter Küchen für neue Gestaltungsmöglichkeiten.'],

                        [
                            'image' => '/images/slider/Neue Elektrik verlegen.jpg',
                            'title' => 'Elektrik verlegen',
                            'text' => 'Komplette Neuverlegung von Stromleitungen – sicher und normgerecht.'
                        ], [
                            'image' => '/images/slider/Umzug durchführen.jpg',
                            'title' => 'Umzugshilfe',
                            'text' => 'Effizienter Umzug – Möbel, Kartons und Montage aus einer Hand.'
                        ], [
                            'image' => '/images/slider/Neue Pflanzen einpflanzen.jpg',
                            'title' => 'Pflanzen einsetzen',
                            'text' => 'Neue Pflanzen fachgerecht eingepflanzt für blühende Gärten.'
                        ], [
                            'image' => '/images/slider/Hof fegen.jpg',
                            'title' => 'Hof kehren',
                            'text' => 'Gründliche Hofreinigung für ein gepflegtes Erscheinungsbild.'
                        ],

                    ];
                @endphp

                @foreach ($items as $index => $item)
                    <div class="reference-tile {{ $index > 5 ? 'hidden opacity-0 scale-95' : 'opacity-100 scale-100' }} transition-all duration-500">
                        <div class="flex flex-col h-full bg-white rounded-xl shadow-md overflow-hidden transform transition duration-300 ease-in-out hover:-translate-y-2 hover:scale-105 hover:shadow-xl">
                            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="object-cover w-full h-48">
                            <div class="p-4 flex-1 flex flex-col justify-between">
                                <h3 class="text-lg font-semibold text-primary mb-1">{{ $item['title'] }}</h3>
                                <p class="text-gray-600 text-sm">{{ $item['text'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Buttons -->
            <div class="text-center mt-6">
                <button id="load-more-btn" class="bg-primary mt-8 inline-block text-white font-semibold py-3 px-8 rounded-lg hover:bg-primary-dark transition">
                    Mehr laden...
                </button>

                <button id="show-less-btn" class="bg-primary mt-8 hidden text-white font-semibold py-3 px-8 rounded-lg hover:bg-primary-dark transition">
                    Weniger anzeigen
                </button>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const tiles = document.querySelectorAll('.reference-tile');
                    const loadMoreBtn = document.getElementById('load-more-btn');
                    const showLessBtn = document.getElementById('show-less-btn');
                    const reference = document.getElementById('reference');
                    const initialVisible = 6;
                    let visibleCount = initialVisible;

                    function showTiles(count) {
                        tiles.forEach((tile, index) => {
                            if (index < count) {
                                tile.classList.remove('hidden');
                                setTimeout(() => {
                                    tile.classList.add('opacity-100', 'scale-100');
                                    tile.classList.remove('opacity-0', 'scale-95');
                                }, 10); // kleiner Delay für Transition
                            }
                        });
                    }

                    function hideTiles(fromIndex) {
                        tiles.forEach((tile, index) => {
                            if (index >= fromIndex) {
                                tile.classList.add('opacity-0', 'scale-95');
                                tile.classList.remove('opacity-100', 'scale-100');
                                setTimeout(() => {
                                    tile.classList.add('hidden');
                                }, 400); // Zeit für die Animation (muss mit CSS duration matchen)
                            }
                        });
                    }

                    loadMoreBtn.addEventListener('click', function () {
                        let nextVisible = visibleCount + 3;
                        showTiles(nextVisible);
                        visibleCount = nextVisible;

                        if (visibleCount >= tiles.length) {
                            loadMoreBtn.classList.add('hidden');
                            showLessBtn.classList.remove('hidden');
                        }
                    });

                    showLessBtn.addEventListener('click', function () {
                        hideTiles(initialVisible);
                        visibleCount = initialVisible;
                        showLessBtn.classList.add('hidden');
                        loadMoreBtn.classList.remove('hidden');

                        // Nach oben zur Referenz scrollen
                        setTimeout(() => {
                            reference.scrollIntoView({ behavior: 'smooth' });
                        }, 300);
                    });
                });
            </script>--}}

        </section>

        {{--Contact Section--}}
        @livewire('global.widgets.contact-form')

    </x-sections.page-container>

</x-layouts.frontend_layout>


