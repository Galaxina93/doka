<x-layouts.frontend_layout>
    @section('title', 'Renovierung & Trockenbau in Uetze – Bollmann Hausservice')

    <x-sections.page-container>
        <!-- Service Hero Section -->
        <section class="relative pt-16 overflow-hidden text-white rounded-3xl mt-6 shadow-xl"
                 style="background: url('{{ URL::to('/images/doka/bg.webp') }}') center/cover no-repeat;"
                 aria-label="Renovierung und Trockenbau in Uetze">
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
                        Renovierung & Trockenbau in Uetze und Umgebung
                    </h1>
                    <p class="text-lg md:text-xl mb-8 opacity-90 leading-relaxed">
                        Wir gestalten Ihre Wohn- und Gewerberäume neu. Von Malerarbeiten über Trennwände bis hin zu anspruchsvollem Innenausbau erhalten Sie bei uns alles aus einer Hand.
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
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Professioneller Innenausbau für Ihr Zuhause</h2>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Ob Ausbesserungen nach einem Schaden, eine vollständige Neugestaltung oder der Ausbau von ungenutztem Wohnraum (z. B. unter Treppen oder auf dem Dachboden) – Bollmann Hausservice steht für präzise Planung und fachgerechte Umsetzung.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Wir verwenden ausschließlich hochwertige Materialien und sorgen für glatte, bezugsfertige Oberflächen sowie eine solide Unterkonstruktion.
                        </p>
                    </div>
                    <div>
                        <img src="{{ URL::to('/images/doka/services/maler-ausbesserungsarbeiten.webp') }}" alt="Maler- und Ausbesserungsarbeiten" class="w-full h-80 object-cover rounded-2xl shadow-lg">
                    </div>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Unsere Renovierungsleistungen im Überblick</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-950 mb-3">Maler- & Spachtelarbeiten</h4>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Professionelles Abkleben, Spachteln von Gipskartonplatten (Q1 bis Q4) sowie exakter Anstrich mit langlebigen Qualitätsfarben.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25A2.25 2.25 0 0 1 13.5 8.25V6Z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-950 mb-3">Trockenbau & Trennwände</h4>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Einziehen neuer Wände aus Gipskarton zur Raumaufteilung, inklusive integrierter Wärme- und Schalldämmung.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21h8.25M17.25 18h-10.5m12.75-3h-15m16.5-3h-18m18-3H3m16.5-3h-15M12 3v18" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-950 mb-3">Wand- & Deckenverkleidung</h4>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Abhängen von Decken (z.B. für moderne LED-Spots), Montage von Paneelen und hochwertige Wandgestaltung.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="bg-gray-100 py-16 px-6 sm:px-12 text-center rounded-3xl mb-12 shadow-sm">
            <div class="max-w-3xl mx-auto">
                <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Bereit für ein neues Raumgefühl?</h3>
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
