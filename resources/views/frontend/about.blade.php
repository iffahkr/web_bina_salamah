<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami | Yayasan Bina Salamah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')

    @include('components.header', [
        'title' => 'Tentang Kami',
        'description' => 'Mengenal Yayasan Bina Salamah dan komitmen kami dalam mengasuh, mendidik, serta memberdayakan anak-anak yatim dan dhuafa.',
        'image' => asset('images/section-2.jpeg'),
    ])
    <!-- Introduction Section (Profil Singkat) -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Left Column: Stylized Image -->
            <div class="relative">
                <!-- Decorative background elements -->
                <div class="absolute -top-4 -left-4 w-72 h-72 bg-yellow-300 rounded-3xl -z-10 opacity-30 blur-lg"></div>
                <div class="absolute -bottom-4 -right-4 w-72 h-72 bg-blue-300 rounded-3xl -z-10 opacity-30 blur-lg"></div>
                <img src="{{ asset('images/3-section2.jpeg') }}"
                     alt="Yayasan Bina Salamah"
                     class="w-full h-100 object-cover rounded-3xl shadow-2xl border-4 border-white transition-transform duration-500 hover:scale-[1.02]">
                <!-- Floating Stats Badge -->
                <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl border border-gray-100 flex items-center gap-4 max-w-xs">
                    <div class="p-3 bg-blue-50 rounded-xl text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold text-gray-900">40+</span>
                        <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Penerima Manfaat</span>
                    </div>
                </div>
            </div>
            <!-- Right Column: Narrative content -->
            <div class="space-y-6">
                <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold tracking-widest text-yellow-600 bg-yellow-100 uppercase">
                    Profil Yayasan
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 leading-tight">
                    Lahir dari Kepedulian dan Pengalaman Nyata
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Yayasan Bina Salamah merupakan lembaga sosial yang berfokus pada pendampingan dan santunan bagi anak yatim dan dhuafa. Yayasan Bina Salamah tidak lahir dari sebuah rencana besar. Kehadirannya berawal dari kepedulian sederhana terhadap anak-anak yatim di sekitar lingkungan yang membutuhkan perhatian dan dukungan. Seiring berjalannya waktu, kepercayaan masyarakat dan para donatur mendorong lahirnya Yayasan Bina Salamah sebagai lembaga yang berbadan hukum. Hingga saat ini, yayasan terus berupaya menjadi ruang pembinaan, santunan, dan pemberdayaan bagi anak yatim dan dhuafa dengan semangat amanah, kepedulian, dan keikhlasan.
                </p>
                <div class="pt-4 border-t border-gray-100 flex flex-wrap gap-x-6 gap-y-3">
                    <div class="flex items-center gap-2">
                        <span class="w-2.5 h-2.5 bg-blue-500 rounded-full animate-pulse"></span>
                        <span class="text-sm font-semibold text-gray-700">Lembaga Terpercaya</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-2.5 h-2.5 bg-yellow-500 rounded-full animate-pulse"></span>
                        <span class="text-sm font-semibold text-gray-700">Pemberdayaan Berkelanjutan</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-2.5 h-2.5 bg-green-500 rounded-full animate-pulse"></span>
                        <span class="text-sm font-semibold text-gray-700">Amanah & Transparan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Visi & Misi Section -->
    <div class="bg-linear-to-b from-gray-50 to-white py-12 border-y border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold tracking-widest text-blue-600 bg-blue-100 uppercase mb-4">
                    Visi & Misi
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">Arah & Langkah Perjuangan Kami</h2>
                <p class="mt-4 text-lg text-gray-600">
                    Panduan utama kami dalam menyalurkan kepedulian dan mewujudkan pemberdayaan yang nyata bagi mereka yang membutuhkan.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
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

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>
</html>
