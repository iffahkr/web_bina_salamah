<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yayasan Bina Salamah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
@include('partials.navbar')
<div class="bg-white">
    <!-- Carousel -->
    <section class="relative h-screen overflow-hidden">
        <!-- Carousel Background -->
        <div x-data="{ active: 0 }"
            x-init="setInterval(() => active = (active + 1) % 3, 5000)"
            class="absolute inset-0">
            <div class="overflow-hidden h-full">

                <div class="flex h-full transition-transform duration-700"
                    :style="'transform: translateX(-' + active * 100 + '%)'">

                    <img src="{{ asset('images/2section-2.jpeg') }}"
                        class="w-full h-screen object-cover shrink-0">

                    <img src="{{ asset('images/3-section2.jpeg') }}"
                        class="w-full h-screen object-cover shrink-0">

                    <img src="{{ asset('images/section-2.jpeg') }}"
                        class="w-full h-screen object-cover shrink-0">
                </div>

            </div>
        </div>
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40"></div>
        <!-- Content -->
        <div class="relative pt-70 z-10 items-center flex flex-col text-center justify-between mx-auto max-w-7xl px-6 lg:text-left lg:flex-row lg:px-8">
            <h1 class="text-3xl font-semibold tracking-normal leading-12 text-balance text-white sm:text-4xl">Memelihara Yatim dan Dhuafa adalah Tanggung Jawab Kita</h1>
            <div class="flex flex-col items-start justify-center gap-x-6">
                <p class="mt-8 text-medium font-small text-pretty text-white sm:text-xl/7">Yayasan Bina Salamah mendampingi anak yatim dan dhuafa melalui santunan dan pembinaan sejak tahun 2006.</p>
                <div class="mt-10 items-center justify-center gap-x-6">
                    <a href={{ url('/about') }} class="rounded-full px-3.5 py-3 text-center text-sm font-normal text-amber-100 hover:text-gray-900 outline-1 outline-yellow-300/50 hover:bg-yellow-300/50  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Lihat selengkapnya <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistic -->
    <div class="relative isolate px-6 lg:px-20">
        <div aria-hidden="true">
            <div class="absolute bottom-0 left-0 right-0 h-250 sm:h-96 -z-10 top-40 bg-linear-to-b from-blue-100 to-transparent"></div>
            </div>
        <div class="-mt-40 z-10 flex flex-wrap mx-auto justify-center max-w-7xl py-7 lg:px-5 sm:flex-row gap-2">
            <x-card-stats
            title="Donatur Sementara"
            number="4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-10 size-20 text-center mx-auto text-blue-700/50">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
            </x-card-stats>
            <x-card-stats
            title="Donasi Terkumpul"
            number="10000000">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-10 size-20 text-center mx-auto text-blue-700/50">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                </svg>
            </x-card-stats>
            <x-card-stats
            title="Penerima Manfaat"
            number="40">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-10 size-20 text-center mx-auto text-blue-700/50">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
            </x-card-stats>
        </div>
        <div class="mx-3 py-6 sm:py-7 lg:py-7">
            <div class="text-center justify-between">
                <div class="mx-20 items-start justify-center gap-x-6">
                    <p class="text-medium mx-auto font-small leading-4 text-pretty text-gray-500 sm:text-lg/7">Kami mendapatkan bantuan dari berbagai pihak donatur. Angka tersebut adalah hasil sementara dari data donatur dan donasi kami selama satu bulan terakhir serta kegiatan yang telah kami lakukan.</p>
                </div>
            </div>
        </div>
        <div aria-hidden="true" class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-blue-300 to-yellow-300 opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75"></div>
        </div>
    </div>

    <!-- Profile -->
    <div class="relative mx-auto max-w-7xl px-6 lg:px-8 py-15">
        <div aria-hidden="true" class="absolute inset-x-10 -top-100 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative right-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-blue-300 to-yellow-300 opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75"></div>
        </div>
        <section class="relative overflow-hidden py-15">
            <div class="relative mx-auto max-w-6xl px-6">
                <!-- Heading -->
                <div class="mx-auto text-center max-w-2xl">
                    <span class="inline-flex items-center rounded-full bg-blue-100 px-4 py-1 text-sm font-medium text-blue-700">
                        Tentang Kami
                    </span>
                    <h2 class="mt-5 text-2xl sm:text-3xl font-bold tracking-tight text-gray-900">
                        Berawal dari Sebuah Kepedulian
                    </h2>
                    <p class="mt-4 text-medium font-small leading-5 text-center text-gray-600 sm:text-lg/7">
                        Kami menjadi jalan bagi mereka yang ingin berbagi, dan menjadi harapan bagi mereka yang membutuhkan.
                    </p>
                </div>
                <!-- Content -->
                <div class="mt-16 flex flex-col items-center gap-10 lg:flex-row lg:justify-center">
                    <div class="relative">
                        <div class="absolute inset-0 rounded-4xl bg-blue-200 blur-2xl opacity-30"></div>
                        <img
                            src="{{ asset('images/3-section2.jpeg') }}"
                            alt="Yayasan Bina Salamah"
                            class="relative z-10 h-80 w-80 rounded-4xl object-cover shadow-2xl ring-3 ring-white sm:h-105 sm:w-105"
                        >
                    </div>
                    <div class="z-20 max-w-xl rounded-4xl bg-white/70 p-8 shadow-xl ring-1 ring-gray-200 backdrop-blur-md">
                        <h3 class="text-2xl font-semibold text-gray-900">
                            Yayasan Bina Salamah
                        </h3>
                        <p class="mt-5 text-justify leading-8 text-gray-600">
                            Yayasan Bina Salamah adalah yayasan pendidikan dan pengembangan sosial
                            yang berkomitmen sejak tahun 2009 untuk melayani anak-anak yatim dan dhuafa.
                            Berawal dari keinginan membantu anak yatim di lingkungan sekitar, Yayasan Bina Salamah terus tumbuh menjadi ruang berbagi, membina, dan menebarkan manfaat.
                        </p>
                        <div class="z-30 mt-10 items-center justify-center gap-x-6">
                            <a href={{ url('/about') }} class="rounded-full px-3.5 py-3 text-center text-sm font-normal text-black focus:outline-2 focus:outline-offset-2 focus:outline-yellow-500 bg-yellow-300 hover:bg-amber-300 hover:text-gray-900">Lihat selengkapnya <span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Activity Card -->
    <div class="relative isolate px-6 lg:px-20 from-yellow-900 to-blue-900">
        <div aria-hidden="true" class="absolute inset-x-10 -bottom-70 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-70">
            <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-yellow-200 to-white sm:left-[calc(50%-30rem)] sm:w-288.75"></div>
        </div>
        <div class="px-10 py-6 sm:py-6">
            <div class="justify-between">
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight leading-12 text-balance text-gray-900">Program Kebaikan Kami</h2>
                <div class="items-start justify-center gap-x-6 sm:mr-20">
                    <p class="mt-5 text-medium font-small leading-5 text-pretty text-gray-600 sm:text-lg/7">Bantuan yang terbaik bukan hanya memenuhi kebutuhan hari ini, tetapi juga membangun masa depan mereka yang lebih baik. Dalam mewujudkan hal ini, kami memiliki 6 program aktif diantaranya.</p>
                </div>
            </div>
        </div>
        <div class="mx-auto my-4 max-w-7xl py-7 lg:px-5
            grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3
            gap-6">
            <x-card-activity
            title="Pengajian Ibu Yatim"
            description="lorem ipsum dolor sit amet"
            image="{{ asset('images/image-hero.jpeg') }}"
            href="{{ url('/activity/activity') }}"
            />
            <x-card-activity
            title="Santunan Anak Yatim"
            description="lorem ipsum dolor sit amet"
            image="{{ asset('images/santunan.jpg') }}"
            href="{{ url('/activity/activity') }}"
            />
            <x-card-activity
            title="Qurban Idul Adha"
            description="Lorem ipsum dolor sit amet"
            image="{{ asset('images/qurban.jpeg') }}"
            href="{{ url('/activity/activity') }}"
            />
            <x-card-activity
            title="Rihlah"
            description="Lorem ipsum dolor sit amet"
            image="{{ asset('images/rihlah.jpg') }}"
            href="{{ url('/activity/activity') }}"
            kegiatan="Kegiatan Tahunan"
            />
            <x-card-activity
            title="Pengajian Anak Yatim"
            description="Lorem ipsum dolor sit amet"
            image="{{ asset('images/pengajian-anak.jpg') }}"
            href="{{ url('/activity/activity') }}"
            kegiatan="Kegiatan Dijadwalkan"
            />
            <x-card-activity
            title="Pelatihan Al-Qur'an"
            description="Lorem ipsum dolor sit amet"
            image="{{ asset('images/pelatihan.jpeg') }}"
            href="{{ url('/activity/activity') }}"
            kegiatan="Kegiatan Musiman"
            />
        </div>
        <div aria-hidden="true" class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-blue-300 to-yellow-300 opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75"></div>
        </div>
    </div>

    <!-- CTA Footer -->
     @include('components.cta-footer')
</div>
@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>
