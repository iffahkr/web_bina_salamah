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
        ActivityCategory::updateOrCreate(['name' => 'Pengajian'], ['description' => 'Kegiatan pengajian rutin yang diadakan setiap minggu untuk meningkatkan pengetahuan agama dan mempererat tali silaturahmi antar anggota komunitas.']);
        ActivityCategory::updateOrCreate(['name' => 'Santunan'], ['description' => 'Kegiatan santunan yang dilakukan untuk membantu sesama yang membutuhkan.']);
        ActivityCategory::updateOrCreate(['name' => 'Rihlah'], ['description' => 'Kegiatan rekreasi dan liburan yang diadakan untuk memperkuat hubungan antar anggota komunitas.']);
        ActivityCategory::updateOrCreate(['name' => 'Qurban'], ['description' => 'Kegiatan qurban yang dilakukan setiap tahun untuk memenuhi kebutuhan hewan kurban dan distribusi dagingnya kepada yang membutuhkan.']);
    }
}
