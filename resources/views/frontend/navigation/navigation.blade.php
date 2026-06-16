<div class="w-full">
    <!-- Navigation -->
    <nav class="bg-primary fixed w-full top-0 z-50" style="box-shadow: none !important; border: none !important;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-32">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center gap-2">
                        <img src="{{ URL::to('/images/logo/logo.png') }}" alt="Bollmann Hausservice Logo" class="h-32">
                    </a>
                </div>

                <!-- Desktop Menü -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-8">
                        <a href="/#home" class="text-white hover:text-gray-900 transition-colors font-semibold">Startseite</a>
                        
                        <!-- Dropdown für Leistungen -->
                        <div class="relative group py-2">
                            <button class="text-white hover:text-gray-900 transition-colors flex items-center gap-1 font-semibold focus:outline-none">
                                Leistungen
                                <svg class="w-4 h-4 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="absolute left-0 mt-2 w-64 bg-white rounded-xl shadow-xl py-2 hidden group-hover:block transition-all duration-300 z-50 border border-gray-100">
                                <a href="/leistungen/renovierung" class="block px-4 py-2 text-gray-700 hover:bg-primary hover:text-white transition-colors text-sm font-semibold">Renovierung & Trockenbau</a>
                                <a href="/leistungen/boden-und-fugenarbeiten" class="block px-4 py-2 text-gray-700 hover:bg-primary hover:text-white transition-colors text-sm font-semibold">Boden- & Fugenarbeiten</a>
                                <a href="/leistungen/hausmeisterservice" class="block px-4 py-2 text-gray-700 hover:bg-primary hover:text-white transition-colors text-sm font-semibold">Hausmeisterservice</a>
                                <a href="/leistungen/reinigung" class="block px-4 py-2 text-gray-700 hover:bg-primary hover:text-white transition-colors text-sm font-semibold">Reinigung (Innen & Außen)</a>
                                <a href="/leistungen/winterdienst" class="block px-4 py-2 text-gray-700 hover:bg-primary hover:text-white transition-colors text-sm font-semibold">Winterdienst</a>
                                <a href="/leistungen/haushaltsaufloesung" class="block px-4 py-2 text-gray-700 hover:bg-primary hover:text-white transition-colors text-sm font-semibold">Haushaltsauflösung</a>
                                <div class="border-t border-gray-100 my-1"></div>
                                <a href="/#services" class="block px-4 py-2 text-primary hover:bg-gray-50 transition-colors text-sm font-bold">Alle Leistungen anzeigen</a>
                            </div>
                        </div>
                        
                        <a href="/#team" class="text-white hover:text-gray-900 transition-colors font-semibold">Über uns</a>
                        <a href="/#reference" class="text-white hover:text-gray-900 transition-colors font-semibold">Referenzen</a>
                        <a href="/#contact" class="text-white hover:text-gray-900 transition-colors font-semibold">Kontakt</a>
                    </div>
                </div>
 
                <!-- Mobile Toggle Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white hover:text-gray-200">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
 
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="/#home" class="block px-3 py-2 text-gray-700 hover:text-primary font-semibold">Startseite</a>
                
                <div class="px-3 py-2">
                    <span class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Leistungen</span>
                    <div class="mt-1 pl-4 space-y-1">
                        <a href="/leistungen/renovierung" class="block py-2 text-gray-600 hover:text-primary text-sm font-semibold">Renovierung & Trockenbau</a>
                        <a href="/leistungen/boden-und-fugenarbeiten" class="block py-2 text-gray-600 hover:text-primary text-sm font-semibold">Boden- & Fugenarbeiten</a>
                        <a href="/leistungen/hausmeisterservice" class="block py-2 text-gray-600 hover:text-primary text-sm font-semibold">Hausmeisterservice</a>
                        <a href="/leistungen/reinigung" class="block py-2 text-gray-600 hover:text-primary text-sm font-semibold">Reinigung (Innen & Außen)</a>
                        <a href="/leistungen/winterdienst" class="block py-2 text-gray-600 hover:text-primary text-sm font-semibold">Winterdienst</a>
                        <a href="/leistungen/haushaltsaufloesung" class="block py-2 text-gray-600 hover:text-primary text-sm font-semibold">Haushaltsauflösung</a>
                    </div>
                </div>
                
                <a href="/#team" class="block px-3 py-2 text-gray-700 hover:text-primary font-semibold">Über uns</a>
                <a href="/#reference" class="block px-3 py-2 text-gray-700 hover:text-primary font-semibold">Referenzen</a>
                <a href="/#contact" class="block px-3 py-2 text-gray-700 hover:text-primary font-semibold">Kontakt</a>
            </div>
        </div>
    </nav>
</div>
