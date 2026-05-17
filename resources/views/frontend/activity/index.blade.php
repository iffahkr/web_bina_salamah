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

    <h1 class="text-3xl font-bold text-center mt-10">Kegiatan Kami</h1>
    <p class="text-center mt-4 text-gray-600">Berikut adalah beberapa kegiatan yang telah kami lakukan untuk membantu yatim dan dhuafa.</p>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Contoh Kegiatan -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/activity1.jpg') }}" alt="Kegiatan 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Pembagian Sembako</h2>
                    <p class="text-gray-600">Kami membagikan sembako kepada keluarga yatim dan dhuafa di sekitar kami.</p>
                </div>
            </div>
            <!-- Tambahkan lebih banyak kegiatan sesuai kebutuhan -->
        </div>
    </div>
    @include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>
</html>
