<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $activity->title }} | Yayasan Bina Salamah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')
    @include('components.header', [
        'title' => $activity->title,
        'description' => $activity->description,
        'image' => asset('storage/' . $activity->image) ?? asset('images/image-hero.jpeg'),
    ])

    <div class="max-w-4xl mx-auto px-4 py-8">
        <!-- Activity Information -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Image -->
            <div class="w-full h-96 overflow-hidden">
                <img src="{{ asset('storage/' . $activity->image) ?? asset('images/image-hero.jpeg') }}"
                     alt="{{ $activity->title }}"
                     class="w-full h-full object-cover">
            </div>

            <!-- Content -->
            <div class="p-8">
                <!-- Metadata -->
                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 mb-6 pb-6 border-b">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>{{ $activity->date ? \Carbon\Carbon::parse($activity->date)->format('d M Y') : 'Tanggal tidak tersedia' }}</span>
                    </div>

                    @if($activity->time)
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>{{ $activity->time }}</span>
                    </div>
                    @endif

                    @if($activity->location)
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>{{ $activity->location }}</span>
                    </div>
                    @endif

                    @if($activity->category)
                    <div class="inline-flex items-center rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                        {{ $activity->category->name }}
                    </div>
                    @endif
                </div>

                <!-- Title -->
                <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $activity->title }}</h1>

                <!-- Description -->
                <div class="prose prose-lg max-w-none text-gray-700 mb-8">
                    <p>{{ $activity->description }}</p>
                </div>

                <!-- Back Button -->
                <div class="mt-8 flex gap-4">
                    <a href="{{ url('/kegiatan') }}"
                       class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Kembali ke Kegiatan
                    </a>
                </div>
            </div>
        </div>

        <!-- Related Activities Section -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Kegiatan Lainnya</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $relatedActivities = \App\Models\Activity::where('id', '!=', $activity->id)->limit(3)->get();
                @endphp

                @forelse($relatedActivities as $related)
                    <a href="{{ route('activity.show', $related->id) }}"
                       class="group bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="h-48 overflow-hidden bg-gray-200">
                            <img src="{{ asset('storage/' . $related->image) ?? asset('images/image-hero.jpeg') }}"
                                 alt="{{ $related->title }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 group-hover:text-blue-600 line-clamp-2">{{ $related->title }}</h3>
                            <p class="text-sm text-gray-600 mt-2 line-clamp-2">{{ $related->description }}</p>
                        </div>
                    </a>
                @empty
                    <p class="col-span-full text-center text-gray-500">Tidak ada kegiatan lain.</p>
                @endforelse
            </div>
        </div>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>
</html>
