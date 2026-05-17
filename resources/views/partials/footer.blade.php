<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<footer class="bg-slate-800/90 py-12 px-6 lg:px-15 rounded-tl-lg rounded-tr-lg">
    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Yayasan Bina Salamah</span>
                    <img src="{{ asset('images/logo-1.png') }}" alt="Yayasan Bina Salamah" class="w-24 h-24 object-contain bg-white rounded-xl p-2" />
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="flex flex-column justify-center gap-x-8 gap-y-4">
                <a href="#" class="text-base font-semibold text-gray-300 hover:text-white transition-colors">Beranda</a>
                <a href="#" class="text-base font-semibold text-gray-300 hover:text-white transition-colors">Kegiatan</a>
                <a href="#" class="text-base font-semibold text-gray-300 hover:text-white transition-colors">Tentang Kami</a>
            </div>

            <!-- Donation Button -->
            <div class="flex">
                <a href="#" class="rounded-full inline-flex gap-2 px-5 py-2.5 text-sm text-gray-900 font-medium justify-center relative items-center w-auto focus:outline-2 focus:outline-offset-2 focus:outline-yellow-500 bg-yellow-300 hover:bg-amber-300 hover:text-gray-800 transition-colors">
                    <span>Donasi sekarang</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="rounded-full border border-gray-900/20 p-1 size-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="mt-12 border-t border-slate-800 pt-8 flex items-center justify-center text-center">
            <p class="text-sm text-gray-400">
                &copy; 2026 Yayasan Bina Salamah. All rights reserved.
            </p>
        </div>
    </div>
</footer>
</body>
</html>
