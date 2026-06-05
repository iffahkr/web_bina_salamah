<?php

namespace Database\Seeders;

use App\Models\ActivityCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivityCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ActivityCategory::updateOrCreate([
            'name' => 'Pengajian Ibu Yatim',
            'description' => 'Kegiatan pengajian rutin untuk ibu-ibu yatim yang diadakan setiap minggu untuk meningkatkan pengetahuan agama dan mempererat tali silaturahmi antar anggota komunitas.',
            'category' => 'Kegiatan Rutin',
            'image' => 'image-hero.jpeg'
            ]);
        ActivityCategory::updateOrCreate([
            'name' => 'Santunan Anak Yatim',
            'description' => 'Kegiatan santunan untuk anak-anak yatim yang berumur dibawah 15 tahun.',
            'category' => 'Kegiatan Bulanan',
            'image' => 'santunan.jpg'
            ]);
        ActivityCategory::updateOrCreate([
            'name' => 'Rihlah',
            'description' => 'Kegiatan rekreasi dan liburan yang diadakan untuk memperkuat hubungan antar anggota komunitas.',
            'category' => 'Kegiatan Tahunan',
            'image' => 'rihlah.jpg'
            ]);
        ActivityCategory::updateOrCreate([
            'name' => 'Qurban Idul Adha',
            'description' => 'Kegiatan qurban yang dilakukan setiap tahun dan didistribusikan dagingnya kepada yatim dan masyarakat sekitar.',
            'category' => 'Kegiatan Tahunan',
            'image' => 'qurban.jpeg'
            ]);
        ActivityCategory::updateOrCreate([
            'name' => 'Pengajian Anak Yatim',
            'description' => 'Kegiatan pengajian rutin untuk anak-anak yatim yang diadakan setiap minggu untuk meningkatkan pengetahuan agama.',
            'category' => 'Kegiatan Dijadwalkan',
            'image' => 'pengajian-anak.jpg'
            ]);
        ActivityCategory::updateOrCreate([
            'name' => 'Pelatihan Al-Quran',
            'description' => 'Pelatihan membaca Al-Quran yang diadakan untuk meningkatkan kemampuan membaca Al-Quran.',
            'category' => 'Kegiatan Musiman',
            'image' => 'pelatihan.jpeg'
            ]);
    }
}
