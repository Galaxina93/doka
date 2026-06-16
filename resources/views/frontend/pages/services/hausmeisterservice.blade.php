<x-layouts.frontend_layout>
    @section('title', 'Hausmeisterservice in Uetze – Bollmann Hausservice')

    <x-sections.page-container>
        <!-- Service Hero Section -->
        <section class="relative pt-16 overflow-hidden text-white rounded-3xl mt-6 shadow-xl"
                 style="background: url('{{ URL::to('/images/doka/bg.png') }}') center/cover no-repeat;"
                 aria-label="Hausmeisterservice in Uetze">
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
                        Hausmeisterservice in Uetze und Umgebung
                    </h1>
                    <p class="text-lg md:text-xl mb-8 opacity-90 leading-relaxed">
                        Die Rundumbetreuung für Ihre Immobilie. Ob Privathaus, Wohnanlage oder Gewerbeobjekt – wir sorgen für Sauberkeit, Sicherheit und tadellose Funktion.
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
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Werterhalt und Sicherheit für Ihre Objekte</h2>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Ein gepflegtes Gebäude ist die Visitenkarte Ihres Hauses oder Unternehmens. Wir übernehmen die regelmäßige technische Betreuung und Objektkontrolle. 
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Mit unserem Rund-ums-Haus-Service stellen wir sicher, dass Leuchtmittel zeitnah ausgetauscht werden, Mülltonnen pünktlich bereitstehen und kleinere Mängel oder Defekte repariert werden, bevor größere Schäden entstehen.
                        </p>
                    </div>
                    <div>
                        <img src="{{ URL::to('/images/doka/services/hausmeisterservice.png') }}" alt="Hausmeisterservice und Objektbetreuung" class="w-full h-80 object-cover rounded-2xl shadow-lg">
                    </div>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Unsere Hausmeisterleistungen im Überblick</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-950 mb-3">Rund-ums-Haus-Service</h4>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Pünktlicher Mülltonnendienst, allgemeine Kontrollgänge und Überwachung der Haustechnik für einen reibungslosen Alltag.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-950 mb-3">Objektkontrollen</h4>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Regelmäßige Begehung Ihrer Immobilie zur Mängelerkennung, Funktionsprüfung von Türen/Toren und Notbeleuchtungen.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.67 2.67 0 0 0 21 17.25l-5.83-5.83m-3.75 3.75-3.75-3.75m3.75 3.75H3.75m13.5-13.5L11.42 8.83M15 3h6v6M3 7.5h10.5M3 12h10.5" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-950 mb-3">Kleinreparaturen</h4>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Schnelle Behebung kleinerer Defekte (Schlösser tauschen, Türen einstellen, Leuchtmittelwechsel) ohne teure Spezialfirmen.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="bg-gray-100 py-16 px-6 sm:px-12 text-center rounded-3xl mb-12 shadow-sm">
            <div class="max-w-3xl mx-auto">
                <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Sorgen Sie für ein gepflegtes Umfeld</h3>
                <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                    Gerne erstellen wir für Sie ein individuelles Betreuungskonzept für Ihr Objekt. Kontaktieren Sie uns unverbindlich.
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
