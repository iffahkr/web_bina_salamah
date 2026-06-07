<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $activity->title }} | Yayasan Bina Salamah</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" href="{{ asset('images/logo-1.png') }}" type="image/png">
</head>
<body class="bg-white">
@include('components.navbar')
<!-- Hero -->
<section class="relative overflow-hidden pt-10 pb-16">
    <div class="pl-30 max-w-5xl px-6">
        <!-- Back Button -->
        <a
            href="{{ url('/kegiatan') }}"
            class="inline-flex items-start gap-2 text-sm font-medium text-blue-600 hover:text-blue-700">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 19l-7-7 7-7"/>
            </svg>
            Kembali ke Kegiatan
        </a>
        <!-- Title -->
        <h1 class="mt-5 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
            {{ $activity->title }}
        </h1>
    </div>
</section>
<!-- Image -->
<section>
    <div class="mx-auto max-w-6xl px-6">
        <div class="relative">
            <div
                class="absolute inset-0 rounded-xl bg-blue-200 blur-3xl opacity-20">
            </div>
            <img
                src="{{ $activity->image ? asset('storage/activities/' . $activity->image) : asset('images/image-hero.jpeg') }}"
                alt="{{ $activity->title }}"
                class="relative h-125 w-full rounded-4xl object-cover shadow-2xl">
        </div>
    </div>
</section>
<!-- Content -->
<section class="py-10">
    <div class="pl-28 max-w-6xl">
        <!-- Metadata -->
        <div class="p-4 sm:p-4 flex flex-wrap gap-5 text-sm text-slate-500">
            @if($activity->date)
                <div class="flex items-start gap-2">
                    <span>
                        {{ \Carbon\Carbon::parse($activity->date)->translatedFormat('d F Y') }}
                    </span>
                </div>
            @endif
            @if($activity->time)
                <div class="flex items-center gap-2">
                    <span>{{ $activity->time }}</span>
                </div>
            @endif
            @if($activity->location)
                <div class="flex items-center gap-2">
                    <span>{{ $activity->location }}</span>
                </div>
            @endif
        </div>
        <article
            class="p-4 mt-3">
            <div class="mt-6 text-justify leading-8 text-slate-600">
                {{ $activity->description }}
            </div>
        </article>
    </div>
</section>
<!-- Related Activities -->
<section class="pb-24">
    <div class="mx-auto max-w-7xl px-6">
        <div class="items-start">
            <h2 class="mt-4 text-3xl font-bold text-slate-900">
                Kegiatan Lain yang Kami Jalankan
            </h2>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @php
            $relatedActivities = \App\Models\Activity::where('id', '!=', $activity->id)->limit(3)->get(); @endphp
            @forelse($relatedActivities as $related)
                <a
                    href="{{ route('activity.show', $related->id) }}"
                    class="group overflow-hidden rounded-[28px] border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <div class="overflow-hidden">
                        <img
                            src="{{ $related->image ? asset('storage/activities' . $related->image) : asset('images/image-hero.jpeg') }}"
                            alt="{{ $related->title }}"
                            class="h-56 w-full object-cover transition duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3
                            class="mt-4 text-lg font-semibold text-slate-900 line-clamp-2">
                            {{ $related->title }}
                        </h3>
                        <p
                            class="mt-3 text-sm leading-6 text-slate-600 line-clamp-3">
                            {{ $related->description }}
                        </p>
                        <div
                            class="mt-5 flex items-center text-sm font-medium text-blue-600">
                            Baca Selengkapnya
                            <span class="ml-2 transition group-hover:translate-x-1">
                                →
                            </span>
                        </div>
                    </div>
                </a>
            @empty
                <p class="col-span-full text-center text-slate-500">
                    Tidak ada kegiatan lainnya.
                </p>
            @endforelse
        </div>
    </div>
</section>
@include('components.footer')
</body>
</html>
