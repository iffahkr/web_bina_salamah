@props([
    'title' => 'Program Donasi',
    'description' => 'Deskripsi program donasi.',
    'image' => asset('images/image-hero.jpeg'),
    'kegiatan' => 'Kegiatan Rutin',
    'href' => '#',
])

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => 'group block overflow-hidden rounded-[28px] border border-slate-200/70 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-blue-100'
    ]) }}
>
    {{-- Image --}}
    <div class="relative overflow-hidden">
        <img
            src="{{ $image }}"
            alt="{{ $title }}"
            class="h-56 w-full object-cover transition duration-500 group-hover:scale-105"
        >

        {{-- Overlay --}}
        <div class="absolute inset-0 bg-linear-to-t from-black/50 via-black/10 to-transparent"></div>

        {{-- Badge --}}
        <div class="absolute left-4 top-4">
            <span class="rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-blue-700 backdrop-blur-sm">
                {{ $kegiatan }}
            </span>
        </div>
    </div>

    {{-- Content --}}
    <div class="space-y-5 p-6">
        {{-- Title --}}
        <div>
            <p class="text-lg font-semibold leading-snug text-slate-800 transition group-hover:text-blue-700">
                {{ $title }}
            </p>
            <p class="mt-2 line-clamp-2 text-sm leading-relaxed text-slate-600">
                {{ $description }}
            </p>
        </div>
    </div>
</a>
