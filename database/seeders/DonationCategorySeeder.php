<?php

namespace Database\Seeders;

use App\Models\DonationCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DonationCategory::updateOrCreate(['name' => 'Infaq Barang'], ['description' => 'Donasi berupa barang-barang yang diberikan untuk membantu kebutuhan sehari-hari.']);
        DonationCategory::updateOrCreate(['name' => 'Infaq Sembako'], ['description' => 'Donasi berupa bahan pokok seperti beras, gula, minyak goreng, dan lainnya.']);
        DonationCategory::updateOrCreate(['name' => 'Infaq Makanan'], ['description' => 'Donasi berupa makanan yang diberikan untuk membantu kebutuhan nutrisi.']);
        DonationCategory::updateOrCreate(['name' => 'Infaq Uang'], ['description' => 'Donasi berupa uang yang diberikan untuk mendukung kegiatan sosial dan kemasyarakatan.']);
        DonationCategory::updateOrCreate(['name' => 'Zakat Fitrah'], ['description' => 'Zakat yang wajib dikeluarkan oleh setiap muslim sebelum puasa berakhir.']);
        DonationCategory::updateOrCreate(['name' => 'Zakat Mal'], ['description' => 'Zakat yang wajib dikeluarkan atas harta yang telah mencapai nisabnya.']);
        DonationCategory::updateOrCreate(['name' => 'Zakat Fidyah'], ['description' => 'Zakat yang dikeluarkan sebagai pengganti puasa yang tidak dilakukan.']);
        DonationCategory::updateOrCreate(['name' => 'Zakat Penghasilan'], ['description' => 'Zakat yang dikeluarkan atas penghasilan yang diperoleh.']);
    }
}
