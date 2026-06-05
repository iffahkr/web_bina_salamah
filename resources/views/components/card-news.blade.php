@props([
    'title' => 'Program Donasi',
    'description' => 'Deskripsi program donasi.',
    'location' => 'Jakarta',
    'date' => '10 Januari 2024',
    'time' => '10:00 - 12:00',
    'image' => asset('images/image-hero.jpeg'),
    'href' => '#',
])

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => 'group flex h-full flex-col overflow-hidden rounded-3xl border border-slate-200/70 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-100'
    ]) }}
>
    <!-- Image -->
    <div class="overflow-hidden">
        <img
            src="{{ $image }}"
            alt="{{ $title }}"
            class="h-56 w-full object-cover transition duration-500 group-hover:scale-105"
        >
    </div>
    <!-- Content -->
    <div class="flex flex-1 flex-col p-6">
        <!-- Title -->
        <h3 class="text-lg font-semibold leading-7 text-slate-900 line-clamp-2">
            {{ $title }}
        </h3>
        <!-- Description -->
        <p class="mt-3 flex-1 text-sm leading-6 text-slate-600 line-clamp-3">
            {{ $description }}
        </p>
        <!-- Footer -->
        <div class="mt-6 flex items-center justify-between border-t border-slate-100 pt-4">
            <div class="flex items-center gap-3 text-xs text-slate-500">
                <span>{{ $date }}</span>
                <span>•</span>
                <span>{{ $time }}</span>
            </div>
            <span class="inline-flex items-center text-sm font-medium text-blue-600 transition group-hover:translate-x-1">
                Baca
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="ml-1 h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </span>
        </div>
    </div>
</a>
