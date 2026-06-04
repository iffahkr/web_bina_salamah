<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan | Yayasan Bina Salamah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')

    @include('components.header', [
        'title' => 'Kegiatan Kami',
        'description' => 'Berikut adalah beberapa kegiatan yang telah kami lakukan untuk membantu yatim dan dhuafa.',
        'image' => asset('images/header-kegiatan.jpg'),
    ])

    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl shadow-md overflow-hidden
            transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                <img src="{{ asset('images/image-hero.jpeg') }}" alt="Kegiatan 1" class="w-full h-48 object-cover">
                <div class="flex items-center px-4 py-2 text-xs text-gray-500 bg-gray-50">
                    <span>Admin</span>
                    <span class="ml-auto">10 Januari 2024</span>
                </div>
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 line-clamp-2">Pembagian Sembako</h2>
                    <p class="text-gray-600 line-clamp-3 mr-4">Kami membagikan sembako kepada keluarga yatim dan dhuafa di sekitar kami. kami adalah manusakfneaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaad ifoeffffffffffffffffffffffffffff</p>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>
</html>
