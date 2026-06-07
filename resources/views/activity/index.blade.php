<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan | Yayasan Bina Salamah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" href="{{ asset('images/logo-1.png') }}" type="image/png">
</head>
<body>
    @include('components.navbar')

    @include('components.header', [
        'title' => 'Kegiatan Kami',
        'description' => 'Berikut adalah beberapa kegiatan yang telah kami lakukan untuk membantu yatim dan dhuafa.',
        'image' => asset('images/header-kegiatan.jpg'),
    ])

    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($activities as $activity)
                <x-card-news
                    title="{{ $activity->title }}"
                    description="{{ $activity->description }}"
                    location="{{ $activity->location }}"
                    date="{{ $activity->date ? \Carbon\Carbon::parse($activity->date)->format('d M Y') : 'Tanggal tidak tersedia' }}"
                    time="{{ $activity->time }}"
                    image="{{ asset('storage/activities/' . $activity->image) ?? asset('images/image-hero.jpeg') }}"
                    href="{{ route('activity.show', $activity->id) }}"
                />
            @endforeach
        </div>
    </div>
    @include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>
</html>
