<footer class="relative text-white py-16 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ URL::to('/images/doka/bg.webp') }}" alt="Footer Hintergrund" class="w-full h-full object-cover">
        <div class="absolute inset-0" style="background-color: rgba(30, 41, 55, 0.95);"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto py-10 px-6 lg:px-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

        <!-- Column 1: Info & Socials -->
        <div class="flex flex-col justify-between">
            <div>
                <img src="{{ URL::to('/images/logo/logo.png') }}" alt="Bollmann Hausservice Logo" class="h-20 mb-4 filter brightness-0 invert">
                <p class="text-gray-300 text-sm mb-4">Ihr Partner für professionellen Hausservice in Uetze und Umgebung.</p>
            </div>
            <div class="flex space-x-3 mt-4">
                <a href="https://www.tiktok.com/@kbhausservice?_r=1&_t=ZG-97FiZE8aCAa" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors duration-200" title="TikTok">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12.525.01c1.306-.022 2.616-.01 3.921-.018 0 1.954.912 3.652 2.611 4.542.008 1.284.004 2.569.004 3.853a8.16 8.16 0 0 1-4.745-1.637v6.865a6.452 6.452 0 0 1-6.402 6.442C5.361 20.089 3 17.514 3 14.512c0-3.327 2.822-5.968 6.136-5.882.1 0 .202.012.302.023v3.743c-.1-.016-.201-.03-.303-.03-1.296-.06-2.484.81-2.616 2.068-.198 1.905 1.603 3.32 3.35 2.766a2.66 2.66 0 0 0 1.76-2.528V.011Z" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Column 2: Leistungen subpages -->
        <div>
            <h4 class="text-lg font-semibold mb-4 text-white border-b border-primary/20 pb-2">Unsere Leistungen</h4>
            <ul class="text-gray-300 text-sm space-y-2">
                <li><a href="/leistungen/renovierung" class="hover:text-white transition">Renovierung & Trockenbau</a></li>
                <li><a href="/leistungen/boden-und-fugenarbeiten" class="hover:text-white transition">Boden- & Fugenarbeiten</a></li>
                <li><a href="/leistungen/hausmeisterservice" class="hover:text-white transition">Hausmeisterservice</a></li>
                <li><a href="/leistungen/reinigung" class="hover:text-white transition">Gebäudereinigung</a></li>
                <li><a href="/leistungen/winterdienst" class="hover:text-white transition">Winterdienst</a></li>
                <li><a href="/leistungen/haushaltsaufloesung" class="hover:text-white transition">Haushaltsauflösung</a></li>
            </ul>
        </div>

        <!-- Column 3: Standort -->
        <div>
            <h4 class="text-lg font-semibold mb-4 text-white border-b border-primary/20 pb-2">Standort</h4>
            <p class="text-gray-300 text-sm mb-2 leading-relaxed">
                <span class="font-bold text-white">Bollmann Hausservice</span><br>
                Dahrenhorst 2<br>
                31311 Uetze
            </p>
        </div>

        <!-- Column 4: Kontakt & Rechtliches -->
        <div>
            <h4 class="text-lg font-semibold mb-4 text-white border-b border-primary/20 pb-2">Kontakt & Rechtliches</h4>
            <ul class="text-gray-300 text-sm space-y-2">
                <li><span class="text-gray-400">Mobil:</span> <a href="tel:+491772739040" class="hover:text-white transition font-medium text-white">+49 177 2739040</a></li>
                <li><span class="text-gray-400">Büro:</span> <a href="tel:+4951734040062" class="hover:text-white transition font-medium text-white">05173 - 404 00 62</a></li>
                <li><a href="mailto:kontakt@hausservice-bollmann.de" class="hover:text-white transition break-all">kontakt@hausservice-bollmann.de</a></li>
                <li class="pt-2"><a href="/impressum" class="hover:text-white transition">Impressum</a></li>
                <li><a href="/datenschutz" class="hover:text-white transition">Datenschutzerklärung</a></li>
            </ul>
        </div>

    </div>

    <div class="relative z-10 mt-12 text-center text-gray-400 text-sm pt-6 border-t border-gray-800/80">
        &copy; {{ date('Y') }} Bollmann Hausservice. Alle Rechte vorbehalten.
    </div>
</footer>
