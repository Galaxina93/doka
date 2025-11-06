<footer class="relative text-white py-16 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ URL::to('/images/examples/420-536x354.jpg') }}" alt="Footer Hintergrund" class="w-full h-full object-cover">
        <div class="absolute inset-0" style="background-color: rgba(30, 41, 55, 0.9);"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto py-10 px-6 lg:px-12 grid grid-cols-1 md:grid-cols-3 gap-10">

        <div>
            <img src="{{ URL::to('/images/logo/logo.png') }}" alt="Doka Hausservice Logo" class="w-36 mb-4">
            <p class="text-gray-300 text-sm">Ihr Partner für professionellen Hausservice in Uetze und Umgebung.</p>
        </div>

        <div>
            <h4 class="text-lg font-semibold mb-3 text-white">Standort</h4>
            <p class="text-gray-100 text-sm mb-2">
                <span class="font-medium">Doka Hausservice eGbR</span><br>
                Dahrenhorst 2<br>
                31311 Uetze
            </p>
        </div>

        <div>
            <h4 class="text-lg font-semibold mb-3 text-white">Kontakt & Navigation</h4>
            <ul class="text-gray-100 text-sm space-y-2">
                <li><a href="tel:+4917654630078" class="hover:text-white transition">+49 176 5463 0078</a></li>
                <li><a href="mailto:kontakt@doka-hausservice.de" class="hover:text-white transition">kontakt@doka-hausservice.de</a></li>
                <li><a href="/impressum" class="hover:text-white transition">Impressum</a></li>
                <li><a href="/datenschutz" class="hover:text-white transition">Datenschutzerklärung</a></li>
            </ul>
        </div>

    </div>

    <div class="relative z-10 mt-12 text-center text-gray-200 text-sm pt-6">
        &copy; 2025 Doka Hausservice. Alle Rechte vorbehalten.
    </div>
</footer>
