@php
    $message = urlencode(
    "Assalamu'alaikum. \nPerkenalkan saya [Nama]. Saya tertarik untuk berdonasi dan ingin mengetahui lebih lanjut tentang program yayasan. Apakah saya bisa mendapatkan informasi lebih lanjut?\nTerima kasih."
    );
@endphp
<footer class="bg-slate-950 pt-28 pb-10 px-6 lg:px-10">
    <div class="mx-auto max-w-7xl">
        <div class="grid gap-12 lg:grid-cols-4">
            <!-- Logo & Description -->
            <div class="lg:col-span-2">
                <div class="flex items-center gap-4">
                    <img
                        src="{{ asset('images/logo-1.png') }}"
                        alt="{{ config('app.name') }}"
                        class="h-20 w-20 bg-white/80 rounded-lg p-2 object-contain">
                    <div>
                        <h2 class="text-xl font-bold text-white">
                            Yayasan Bina Salamah
                        </h2>
                    </div>
                </div>
                <p class="mt-6 max-w-md text-sm leading-relaxed text-slate-400">
                    Yayasan Bina Salamah hadir untuk membantu yatim dan dhuafa melalui kegiatan
                    sosial pendidikan dan keagamaan.
                </p>
            </div>
            <!-- Navigation -->
            <div>
                <ul class="mt-4 space-y-3">
                    <li>
                        <a href="{{ url('/') }}" class="text-slate-400 hover:text-yellow-300 transition">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}" class="text-slate-400 hover:text-yellow-300 transition">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/kegiatan') }}" class="text-slate-400 hover:text-yellow-300 transition">
                            Kegiatan
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Contact -->
            <div>
                <h5 class="text-sm font-semibold text-white">
                    Temukan Kami Melalui:
                </h5>
                <ul class="mt-4 space-y-4">
                    <li class="flex flex-row text-sm">
                        <span class="mr-1.5">📍</span>
                        <a href="https://maps.app.goo.gl/5ABUq3s9bWUGd3bF9" target="_blank" class="text-slate-400 hover:text-yellow-300 transition">
                            Jl. H. Dul No.28 RT005/005, Kelurahan Bojong Pd. Terong, Kecamatan Cipayung, Depok, Jawa Barat, Indonesia
                        </a>
                    </li>
                    <li class="flex flex-row text-sm">
                        <span class="mr-1.5">📞</span>
                        <a href="https://wa.me/6281294162019?text={{ $message }}" target="_blank" class="text-slate-400 hover:text-yellow-300 transition">
                            +62 812 9416 2019
                        </a>
                    </li>
                    <li class="flex flex-row text-sm">
                        <span class="text-slate-400 mr-3">✉</span>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=binasalamah@gmail.com?text={{ $message }}" target="_blank" class="text-slate-400 hover:text-yellow-300 transition">
                            binasalamah@gmail.com
                        </a>
                    </li>
                </ul>
                <!-- Social Media-->
                <div class="mt-6 flex gap-4">
                    <!-- <a href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-slate-800 text-yellow-300 transition hover:bg-slate-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path fill="rgb(255, 212, 59)" d="M576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 440 146.7 540.8 258.2 568.5L258.2 398.2L205.4 398.2L205.4 320L258.2 320L258.2 286.3C258.2 199.2 297.6 158.8 383.2 158.8C399.4 158.8 427.4 162 438.9 165.2L438.9 236C432.9 235.4 422.4 235 409.3 235C367.3 235 351.1 250.9 351.1 292.2L351.1 320L434.7 320L420.3 398.2L351 398.2L351 574.1C477.8 558.8 576 450.9 576 320z"/></svg>
                    </a> -->
                    <a href="https://www.instagram.com/binasalamah/"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-slate-800 text-yellow-300 transition hover:bg-slate-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path fill="rgb(255, 212, 59)" d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Bottom Footer -->
        <div class="mt-12 border-t border-white/10 pt-8">
            <div class="items-center text-center gap-4 md:flex-row">
                <p class="text-sm text-slate-500">
                    © 2026 Yayasan Bina Salamah. Seluruh hak cipta dilindungi.
                </p>
            </div>
        </div>
    </div>
</footer>
