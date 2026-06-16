<x-layouts.frontend_layout>
    @section('title', 'Gebäudereinigung & Außenpflege in Uetze – Bollmann Hausservice')

    <x-sections.page-container>
        <!-- Service Hero Section -->
        <section class="relative pt-16 overflow-hidden text-white rounded-3xl mt-6 shadow-xl"
                 style="background: url('{{ URL::to('/images/doka/bg.webp') }}') center/cover no-repeat;"
                 aria-label="Gebäudereinigung und Außenreinigung in Uetze">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/85 to-transparent"></div>
            
            <div class="max-w-7xl mx-auto px-6 sm:px-12 py-24 relative z-10">
                <div class="max-w-3xl">
                    <a href="/#services" class="inline-flex items-center text-primary-light hover:text-white mb-6 text-sm font-semibold transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                        Zurück zur Übersicht
                    </a>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">
                        Gebäudereinigung & Außenreinigung in Uetze
                    </h1>
                    <p class="text-lg md:text-xl mb-8 opacity-90 leading-relaxed">
                        Ein sauberes Umfeld sorgt für Wohlbefinden und sichert den langfristigen Wert Ihrer Immobilie. Wir reinigen gründlich und zuverlässig – innen wie außen.
                    </p>
                    <a href="/#contact" class="inline-block bg-primary text-white px-8 py-4 rounded-full font-semibold text-base hover:bg-primary-dark transition-all transform hover:scale-105 shadow-md">
                        Kostenloses Angebot anfordern
                    </a>
                </div>
            </div>
        </section>

        <!-- Details Section -->
        <section class="py-20 px-6 sm:px-12 text-black bg-white">
            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Sauberkeit, die man sieht und spürt</h2>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Ob regelmäßige Treppenhausreinigung in Mehrfamilienhäusern, professionelle Kehrdienste auf Wegen und Parkplätzen oder die Beseitigung von Laub im Herbst – wir reinigen gründlich und materialschonend.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Wir stimmen unsere Reinigungszyklen individuell auf Ihren Bedarf ab. Zuverlässigkeit und Diskretion sind für uns bei jedem Auftrag selbstverständlich.
                        </p>
                    </div>
                    <div>
                        <img src="{{ URL::to('/images/doka/services/gebaeudereinigung.webp') }}" alt="Professionelle Gebäudereinigung" class="w-full h-80 object-cover rounded-2xl shadow-lg">
                    </div>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Unsere Reinigungsdienstleistungen im Überblick</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.746 3.746 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-950 mb-3">Treppenhausreinigung</h4>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Regelmäßiges Fegen und Wischen von Stufen, Podesten, Geländern sowie das Reinigen von Gemeinschaftsfenstern und Eingangstüren.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18M3 12h18" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-950 mb-3">Außen- & Wegereinigung</h4>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Befreiung von Hofeinfahrten, Zuwegen und Müllstandplätzen von Unkraut, Wildwuchs, Schmutz und herbstlichem Laub.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21h8.25M17.25 18h-10.5m12.75-3h-15m16.5-3h-18m18-3H3m16.5-3h-15M12 3v18" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-950 mb-3">Parkplatzpflege</h4>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Säuberung von Kunden- und Mitarbeiterparkplätzen, Einsammeln von Müll und Sicherstellung einer sauberen Außenwirkung.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="bg-gray-100 py-16 px-6 sm:px-12 text-center rounded-3xl mb-12 shadow-sm">
            <div class="max-w-3xl mx-auto">
                <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Gepflegte Immobilien begeistern Besucher</h3>
                <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                    Gerne übernehmen wir die regelmäßige Reinigung Ihrer Objekte. Kontaktieren Sie uns für ein unverbindliches Angebot.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="/#contact" class="bg-primary text-white px-8 py-4 rounded-full font-semibold hover:bg-primary-dark transition-all transform hover:scale-105 shadow-md">
                        Jetzt anfragen
                    </a>
                    <a href="tel:+491772739040" class="flex items-center gap-2 text-gray-800 font-bold hover:underline text-lg">
                        <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        0177 - 273 90 40
                    </a>
                </div>
            </div>
        </section>
    </x-sections.page-container>
</x-layouts.frontend_layout>
