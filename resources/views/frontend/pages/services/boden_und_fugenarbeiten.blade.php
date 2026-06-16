<x-layouts.frontend_layout>
    @section('title', 'Boden- & Fugenarbeiten in Uetze – Bollmann Hausservice')

    <x-sections.page-container>
        <!-- Service Hero Section -->
        <section class="relative pt-16 overflow-hidden text-white rounded-3xl mt-6 shadow-xl"
                 style="background: url('{{ URL::to('/images/doka/bg.webp') }}') center/cover no-repeat;"
                 aria-label="Boden- und Fugenarbeiten in Uetze">
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
                        Bodenverlegung & Fugenarbeiten in Uetze
                    </h1>
                    <p class="text-lg md:text-xl mb-8 opacity-90 leading-relaxed">
                        Wir sorgen für den perfekten Boden unter Ihren Füßen und dauerhaft dichte Fugen. Präzise Verlegung und saubere Abdichtungen für Langlebigkeit und Ästhetik.
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
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Ein neuer Boden wertet jeden Raum auf</h2>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Ob pflegeleichtes Laminat, moderner Vinylboden oder passgenaue Sockelleisten – wir verlegen Böden fachgerecht und präzise. 
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Zusätzlich erneuern wir verschlissene Silikonfugen in Küche, Bad und Wohnbereich. Saubere Fugen sind nicht nur optisch wichtig, sondern schützen Ihre Bausubstanz auch zuverlässig vor Feuchtigkeitsschäden.
                        </p>
                    </div>
                    <div>
                        <img src="{{ URL::to('/images/doka/services/laminat-bodenverlegung.webp') }}" alt="Laminat- und Bodenverlegung" class="w-full h-80 object-cover rounded-2xl shadow-lg">
                    </div>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Unsere Leistungen im Bereich Boden & Fugen</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75 2.25 12l4.179 2.25m-4.179-2.25 4.179-2.25M2.25 12h19.5m0 0-4.179-2.25M17.321 9.75l4.179 2.25m-4.179-2.25 4.179 2.25M21.25 12l-4.179 2.25M17.321 14.25l-4.179 2.25m0 0L9 12l4.143-2.25M13.143 14.25 9 12" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-950 mb-3">Laminat- & Vinylverlegung</h4>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Fachgerechtes Verlegen inklusive Trittschalldämmung, Übergangsschienen und professioneller Untergrundvorbereitung.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-950 mb-3">Silikon- & Fugenarbeiten</h4>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Entfernung alter, schimmeliger Fugen und fachgerechtes Ziehen neuer elastischer Fugen in Sanitärbereichen und Küchen.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-950 mb-3">Sockelleistenmontage</h4>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Präziser Gehrungsschnitt und saubere Montage von Holz-, Kunststoff- oder MDF-Leisten für einen perfekten Wandabschluss.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="bg-gray-100 py-16 px-6 sm:px-12 text-center rounded-3xl mb-12 shadow-sm">
            <div class="max-w-3xl mx-auto">
                <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Geben Sie Ihren Räumen ein neues Aussehen</h3>
                <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                    Kontaktieren Sie uns direkt für ein kostenloses, transparentes Angebot. Wir beraten Sie gerne unverbindlich vor Ort.
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
