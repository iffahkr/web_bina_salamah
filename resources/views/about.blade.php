<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami | Yayasan Bina Salamah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" href="{{ asset('images/logo-1.png') }}" type="image/png">
</head>
<body>
    @include('components.navbar')
    <!-- Header Section -->
    @include('components.header', [
        'title' => 'Tentang Kami',
        'description' => 'Mengenal Yayasan Bina Salamah dan komitmen kami dalam mengasuh, mendidik, serta memberdayakan anak-anak yatim dan dhuafa.',
        'image' => asset('images/rihlah.jpg'),
    ])
    <!-- Introduction Section -->
    <section class="relative overflow-hidden bg-linear-to-br from-yellow-50 via-white to-blue-50 py-24">
    <div class="absolute top-0 right-0 w-96 h-96 bg-yellow-200/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-200/20 rounded-full blur-3xl"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-14 pl-6 border-l-4 border-yellow-400">
            <span
                class="mb-3 inline-flex px-4 py-2 rounded-full text-xs font-bold tracking-[0.2em] text-yellow-700 bg-yellow-100 uppercase">
                Profil Yayasan
            </span>
            <h2 class="mt-4 text-2xl md:text-3xl font-bold text-gray-900 leading-tight max-w-3xl">
                Hadir untuk Membina,
                <span class="text-yellow-500">
                    Bertumbuh dalam Amanah
                </span>
            </h2>
        </div>
        <!-- Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-20 items-center">
            <!-- Image -->
            <div class="relative">
                <div
                    class="absolute -top-6 -left-6 w-72 h-72 bg-yellow-300 rounded-[40px] -z-10 opacity-25 blur-xl">
                </div>
                <div
                    class="absolute -bottom-6 -right-6 w-72 h-72 bg-blue-300 rounded-[40px] -z-10 opacity-25 blur-xl">
                </div>
                <img
                    src="{{ asset('images/3-section2.jpeg') }}"
                    alt="Yayasan Bina Salamah"
                    class="w-full h-125 object-cover rounded-[40px] shadow-2xl border-4 border-white transition duration-500 hover:scale-[1.02]">
                <!-- Floating Badge -->
                <div
                    class="absolute -bottom-6 -left-6 bg-white/90 backdrop-blur-md p-5 rounded-2xl shadow-xl border border-white/50 flex items-center gap-4">
                    <div class="p-3 bg-blue-50 rounded-2xl text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold text-gray-900">
                            35+
                        </span>
                        <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            Yatim & Dhuafa Dibina
                        </span>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div>
                <p class="text-[17px] leading-8 text-gray-600 text-justify">
                    Yayasan Bina Salamah merupakan lembaga sosial yang berdiri sejak tahun
                    2006 dan berfokus pada pendampingan serta santunan bagi anak yatim
                    dan dhuafa. Berawal dari kepedulian sederhana terhadap anak-anak
                    yatim di sekitar lingkungan, yayasan ini tumbuh melalui kepercayaan
                    masyarakat dan para donatur hingga menjadi lembaga yang memiliki
                    legalitas resmi.
                </p>
                <p class="mt-6 text-[17px] leading-8 text-gray-600 text-justify">
                    Hingga saat ini, Yayasan Bina Salamah terus berupaya menjadi ruang
                    pembinaan, santunan, dan pemberdayaan bagi anak yatim dan dhuafa
                    dengan menjunjung tinggi nilai amanah, kepedulian, serta keikhlasan
                    dalam setiap langkah pengabdiannya.
                </p>
                <div class="mt-10 flex flex-wrap gap-3">
                    <span class="inline-flex items-center px-4 py-2 rounded-full bg-blue-50 text-blue-700 font-medium text-sm">
                        🤲 Amanah
                    </span>
                    <span class="inline-flex items-center px-4 py-2 rounded-full bg-yellow-50 text-yellow-700 font-medium text-sm">
                        🌱 Kepedulian
                    </span>
                    <span class="inline-flex items-center px-4 py-2 rounded-full bg-green-50 text-green-700 font-medium text-sm">
                        📖 Pembinaan
                    </span>
                    <span
                        class="inline-flex items-center px-4 py-2 rounded-full bg-purple-50 text-purple-700 font-medium text-sm">
                        ✨ Kemandirian
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Visi & Misi Section -->
    <div class="bg-linear-to-b from-gray-50 to-white border-y border-gray-100 py-16 lg:py-18">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-6 sm:mb-8">
                <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold tracking-widest text-blue-600 bg-blue-100 uppercase mb-4">
                    Visi & Misi
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Arah & Langkah Perjuangan Kami</h2>
                <p class="mt-4 text-lg text-gray-600">
                    Selama hampir dua dekade, Yayasan Bina Salamah terus berupaya menjadi rumah pembinaan bagi anak yatim dan dhuafa dengan semangat keikhlasan dan amanah.
                </p>
            </div>
            <!-- Image Grid -->
             <div class="grid grid-cols-3 gap-3 py-8 sm:py-12 items-center">
                <img
                    src="{{ asset('images/section-2.jpeg') }}"
                    class="h-72 w-50 object-cover rounded-2xl shadow-2xl justify-self-end translate-x-8">
                <img
                    src="{{ asset('images/image-hero.jpeg') }}"
                    class="h-96 w-full object-cover rounded-2xl shadow-2xl">
                <img
                    src="{{ asset('images/2section-2.jpeg') }}"
                    class="h-72 w-50 object-cover rounded-2xl shadow-2xl justify-self-start -translate-x-8">
            </div>
            <!-- Content -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mt-10 items-start">
                <!-- Visi Column (5/12 grid span) -->
                <div class="lg:col-span-5 bg-linear-to-br from-slate-900 to-blue-950 text-white rounded-3xl p-8 sm:p-10 shadow-2xl relative overflow-hidden transition-all duration-300 hover:shadow-blue-900/10">
                    <!-- Decorative backdrop pattern -->
                    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [bg-size:16px_16px]"></div>
                    <div class="relative z-10 space-y-6">
                        <div class="inline-flex p-4 bg-white/10 rounded-2xl text-yellow-300 shadow-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold font-serif">Visi Kami</h3>
                        <p class="text-gray-300 text-lg leading-relaxed font-light">
                            "Mewujudkan generasi yatim dan dhuafa yang mandiri, berakhlak mulia, serta memiliki kesempatan untuk berkembang melalui pembinaan dan kepedulian sosial."
                        </p>
                    </div>
                </div>
                <!-- Misi Column (7/12 grid span) -->
                <div class="lg:col-span-7 space-y-6">
                    <h3 class="text-xl font-bold text-gray-900 px-2 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-yellow-500 rounded-full"></span>
                        Misi Kami
                    </h3>
                    <div class="space-y-4">
                        <!-- Mission Item 1 -->
                        <div class="group flex gap-4 p-5 bg-white rounded-2xl border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-blue-100">
                            <div class="shrink-0 flex items-center justify-center w-12 h-12 rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </div>
                            <div>
                                <p class="mt-1 text-gray-600 text-sm sm:text-base leading-relaxed">
                                    Mendampingi anak yatim dan dhuafa melalui santunan dan pembinaan.
                                </p>
                            </div>
                        </div>
                        <!-- Mission Item 2 -->
                        <div class="group flex gap-4 p-5 bg-white rounded-2xl border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-blue-100">
                            <div class="shrink-0 flex items-center justify-center w-12 h-12 rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </div>
                            <div>
                                <p class="mt-1 text-gray-600 text-sm sm:text-base leading-relaxed">
                                    Menanamkan nilai keislaman dan akhlak mulia.
                                </p>
                            </div>
                        </div>
                        <!-- Mission Item 3 -->
                        <div class="group flex gap-4 p-5 bg-white rounded-2xl border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-blue-100">
                            <div class="shrink-0 flex items-center justify-center w-12 h-12 rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </div>
                            <div>
                                <p class="mt-1 text-gray-600 text-sm sm:text-base leading-relaxed">
                                    Mendorong kemandirian keluarga yatim.
                                </p>
                            </div>
                        </div>
                        <!-- Mission Item 4 -->
                        <div class="group flex gap-4 p-5 bg-white rounded-2xl border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-blue-100">
                            <div class="shrink-0 flex items-center justify-center w-12 h-12 rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </div>
                            <div>
                                <p class="mt-1 text-gray-600 text-sm sm:text-base leading-relaxed">
                                    Menjalin kepedulian sosial antara donatur dan penerima manfaat.
                                </p>
                            </div>
                        </div>
                        <!-- Mission item 5 -->
                         <div class="group flex gap-4 p-5 bg-white rounded-2xl border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-blue-100">
                            <div class="shrink-0 flex items-center justify-center w-12 h-12 rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </div>
                            <div>
                                <p class="mt-1 text-gray-600 text-sm sm:text-base leading-relaxed">
                                    Mengembangkan layanan pendidikan yang bermanfaat bagi masyarakat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section -->
    @include('components.cta-footer')

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>
</html>
