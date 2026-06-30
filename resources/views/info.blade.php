<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $info->name }} | {{ config('app.name') }}</title>

    <link rel="icon" href="{{ asset('images/logo-1.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white">

@include('components.navbar')

<!-- Hero -->
<section class="relative overflow-hidden pt-16 pb-16">
    <div aria-hidden="true"
        class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl">
        <div
            class="relative left-1/2 aspect-1155/678 w-xl -translate-x-1/2 bg-linear-to-tr from-blue-300 to-yellow-300 opacity-30 sm:w-6xl">
        </div>
    </div>

    <div class="mx-auto max-w-5xl px-6">

        @if($info->category)
            <span
                class="inline-flex rounded-full items-center bg-blue-100 px-4 py-1 text-sm font-medium text-blue-700">
                {{ $info->category }}
            </span>
        @endif

        <h1 class="mt-6 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            {{ $info->name }}
        </h1>
    </div>
</section>

<!-- Content -->
<section class="pb-24 pt-12">
    <div class="max-w-5xl px-6 mx-auto">

        <!-- Image -->
        <div class="relative">
            <div
                class="absolute inset-0 rounded-4xl bg-blue-200 blur-3xl opacity-30">
            </div>

            <img
                src="{{ $info->image
                    ? asset('storage/activities/' . $info->image)
                    : asset('images/image-hero.jpeg') }}"
                alt="{{ $info->name }}"
                class="relative z-10 h-125 w-full rounded-4xl object-cover shadow-2xl">
        </div>

        <!-- Description -->
        <div
            class="mt-12 rounded-4xl bg-white p-8 shadow-lg ring-1 ring-gray-100 sm:p-12">

            <h2 class="text-xl font-semibold text-gray-900">
                Deskripsi Kegiatan
            </h2>

            <div class="mt-6 text-justify leading-8 text-gray-600">
                {{ $info->description }}
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-12 flex justify-center">
            <a
                href="{{ url('/') }}"
                class="inline-flex items-center gap-2 rounded-full border bg-white border-yellow-200 px-6 py-3 text-sm font-medium text-gray-900 shadow-md transition hover:bg-amber-200">

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

@include('components.footer')

</body>
</html>
