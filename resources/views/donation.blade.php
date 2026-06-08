<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi | Yayasan Bina Salamah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" href="{{ asset('images/logo-1.png') }}" type="image/png">
</head>
<body>
    @php
    $message = urlencode(
    "Assalamu'alaikum. \nPerkenalkan saya [Nama]. Saya tertarik untuk berdonasi dan ingin mengetahui lebih lanjut tentang program yayasan. Apakah saya bisa mendapatkan informasi lebih lanjut?\nTerima kasih."
    );
@endphp
    <div class="min-h-screen bg-slate-50 py-10 px-4">
    <div class="max-w-3xl mx-auto">
        <!-- Back Button -->
        <a href="{{ url('/') }}"
            class="inline-flex items-center gap-2 text-sm font-medium text-slate-600 hover:text-slate-900 transition mb-6">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 19l-7-7 7-7" />
            </svg>
            Kembali ke Beranda
        </a>
        <div class="bg-white rounded-3xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="p-8 text-center border-b border-gray-100">
                <img
                    src="{{ asset('images/logo-1.png') }}"
                    alt="Logo Yayasan"
                    class="w-20 h-20 mx-auto mb-4 object-contain">
                <h1 class="text-2xl font-bold text-slate-900">
                    Yayasan Bina Salamah
                </h1>
                <p class="mt-2 text-slate-600">
                    Donasi melalui Transfer Bank Syariah Indonesia (BSI)
                </p>
            </div>
            <div class="p-8" x-data="{ copied: false }">
                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6">
                    <div class="flex justify-center items-center gap-3">
                        <div class="flex flex-col">
                            <p class="text-sm text-gray-500 text-center">
                                Nomor Rekening
                            </p>
                            <h2 class="text-3xl font-semibold text-center text-slate-900 mt-2 tracking-wide">
                                7020452476
                            </h2>
                        </div>
                        <div class="mt-8">
                            <button @click="
                                navigator.clipboard.writeText('7020452476');
                                copied = true;
                                setTimeout(() => copied = false, 2000);
                            ">
                                <svg xmlns="http://www.w3.org/2000/svg" x-show="!copied" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6  text-black hover:text-gray-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" x-show="copied" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col mt-5 gap-2 items-center">
                        <div class="p-4 text-center">
                            <p class="text-xs text-gray-500 sm:text-center">Bank</p>
                            <p class="font-semibold text-center">
                                BSI
                            </p>
                        </div>
                        <div class="p-4 text-center">
                            <p class="text-xs text-gray-500 sm:text-center">Atas Nama</p>
                            <p class="font-semibold text-center">
                                Muldiyono QQ Yys Bina Salamah
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <p class="text-sm text-slate-500">
                        Setelah melakukan transfer, silakan hubungi kami untuk konfirmasi donasi.
                    </p>
                </div>
                <!-- WhatsApp Button -->
                <a href="https://wa.me/6281294162019?text={{ $message }}"
                    target="_blank"
                    class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-full bg-emerald-500 px-5 py-3 text-white font-medium hover:bg-emerald-600 transition">
                    <span>Hubungi Kami</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 640 640"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>