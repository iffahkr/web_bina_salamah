<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $activity->name }} | Yayasan Bina Salamah</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white">

@include('partials.navbar')

<!-- Hero -->
<section class="relative overflow-hidden pt-32 pb-20">
    <div aria-hidden="true"
        class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl">
        <div
            class="relative left-1/2 aspect-1155/678 w-xl -translate-x-1/2 bg-linear-to-tr from-blue-300 to-yellow-300 opacity-30 sm:w-6xl">
        </div>
    </div>

    <div class="mx-auto max-w-5xl px-6 text-center">

        @if($activity->category)
            <span
                class="inline-flex items-center rounded-full bg-blue-100 px-4 py-1 text-sm font-medium text-blue-700">
                {{ $activity->category }}
            </span>
        @endif

        <h1 class="mt-6 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
            {{ $activity->name }}
        </h1>

        <p class="mt-5 text-lg leading-8 text-gray-600">
            Program kegiatan Yayasan Bina Salamah dalam mendukung dan
            membina anak-anak yatim serta dhuafa.
        </p>
    </div>
</section>

<!-- Content -->
<section class="pb-24">
    <div class="mx-auto max-w-6xl px-6">

        <!-- Image -->
        <div class="relative">
            <div
                class="absolute inset-0 rounded-4xl bg-blue-200 blur-3xl opacity-30">
            </div>

            <img
                src="{{ $activity->image
                    ? asset('storage/' . $activity->image)
                    : asset('images/image-hero.jpeg') }}"
                alt="{{ $activity->name }}"
                class="relative z-10 h-125 w-full rounded-4xl object-cover shadow-2xl">
        </div>

        <!-- Description -->
        <div
            class="mt-12 rounded-4xl bg-white p-8 shadow-lg ring-1 ring-gray-100 sm:p-12">

            <h2 class="text-2xl font-semibold text-gray-900">
                Deskripsi Kegiatan
            </h2>

            <div class="mt-6 text-justify leading-8 text-gray-600">
                {!! nl2br(e($activity->description)) !!}
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-12 flex justify-center">
            <a
                href="{{ url('/') }}"
                class="inline-flex items-center gap-2 rounded-full bg-yellow-300 px-6 py-3 text-sm font-medium text-gray-900 shadow-md transition hover:bg-amber-300">

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
        </div>

    </div>
</section>

@include('partials.footer')

</body>
</html>
