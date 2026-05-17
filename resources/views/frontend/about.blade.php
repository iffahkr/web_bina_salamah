<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami | Yayasan Bina Salamah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')

    <div class="max-w-7xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-6">Tentang</h1>
        <p class="text-center text-gray-600 mb-8">Yayasan Bina Salamah didirikan dengan tujuan untuk membantu dan memelihara anak-anak yatim dan dhuafa. Kami percaya bahwa setiap anak berhak mendapatkan kasih sayang, pendidikan, dan kesempatan yang layak untuk meraih masa depan yang cerah.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h2 class="text-xl font-semibold mb-4">Visi Kami</h2>
                <p class="text-gray-600">Menjadi lembaga sosial yang terpercaya dalam memberikan bantuan dan dukungan kepada anak-anak yatim dan dhuafa, serta memberdayakan mereka untuk mencapai potensi terbaik mereka.</p>
            </div>
            <div>
                <h2 class="text-xl font-semibold mb-4">Misi Kami</h2>
                <ul class="list-disc list-inside text-gray-600">
                    <li>Memberikan bantuan materiil seperti makanan, pakaian, dan kebutuhan dasar lainnya kepada anak-anak yatim dan dhuafa.</li>
                    <li>Menyediakan akses pendidikan yang berkualitas bagi anak-anak yatim dan dhuafa.</li>
                    <li>Memberdayakan keluarga yatim dan dhuafa melalui program pelatihan keterampilan dan pemberdayaan ekonomi.</li>
                    <li>Membangun komunitas yang peduli dan mendukung anak-anak yatim dan dhuafa.</li>
                </ul>
            </div>
        </div>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>
</html>
