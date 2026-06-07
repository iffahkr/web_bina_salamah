<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::create([
            'title' => 'Pengajian Pekanan Ibu-ibu',
            'description' => 'Setiap pekan, ibu-ibu yatim di sekitar lingkungan yayasan berkumpul untuk
            mendengarkan ceramah agama dan berdiskusi tentang kehidupan sehari-hari. Kegiatan ini
            bertujuan untuk mempererat tali silaturahim antar ibu-ibu yatim serta meningkatkan pengetahuan
            agama mereka. Setiap pertemuan biasanya diisi dengan ceramah dari ustadzah yang telah dipersiapkan dari
            yayasan yaitu Ibu Elvi Milzayulida selaku bendahara yayasan atau terkadang oleh ustadzah dari luar,
            serta sesi berdiskusi santai untuk berbagi keluh kesah.',
            'location' => 'Yayasan Bina Salamah, Jl. H. Dul No. 28, Depok',
            'date' => '2026-05-01',
            'time' => '10:00',
            'image' => 'pengajian_ibu.jpg',
            'activity_category_id' => 1, // Assuming this ID corresponds to 'Pengajian' in the ActivityCategorySeeder
        ]);

        Activity::create([
            'title' => 'Santunan Yatim Yang Diselenggarakan oleh Kantor Pajak Sawangan',
            'description' => 'Setiap bulan Ramadhan, Kantor Pajak cabang Sawangan Depok rutin mengadakan acara
            santunan untuk anak-anak yatim yang dituju. Salah satunya yang berada di bawah naungan Yayasan Bina
            Salamah. Acara ini diisi dengan ceramah oleh ustadz Billy dengan tema
            "Tantangan di Bulan Ramadhan", setelahnya anak-anak yatim menerima bingkisan berupa sembako, makanan,
            ataupun perlengkapan sekolah.',
            'location' => 'Kantor Pajak Sawangan, Jl. Raya Siliwangi, Depok',
            'date' => '2026-05-02',
            'time' => '15:00',
            'image' => 'santunan-kantor-pajak.jpg',
            'activity_category_id' => 2, // Assuming this ID corresponds to 'Santunan' in the ActivityCategorySeeder
        ]);
    }
}
