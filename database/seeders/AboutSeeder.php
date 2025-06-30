<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    public function run()
    {
        About::create([
            'title' => 'Tentang Kami',
            'subtitle' => 'Platform wisata terbaik untuk penjelajah lokal',
            'background_image' => 'uploads/about/default_bg.jpg', // Ganti setelah upload manual
            'about_image' => 'uploads/about/default_about.jpg',   // Ganti setelah upload manual

            'judul_1' => 'Visi Kami',
            'konten_1' => 'Menjadi panduan wisata terpercaya yang menghubungkan pelancong dengan destinasi lokal terbaik.',
            
            'judul_2' => 'Misi Kami',
            'konten_2' => 'Memberikan informasi akurat, pengalaman menyenangkan, dan kemudahan akses destinasi wisata bagi semua orang.',
            
            'judul_3' => 'Nilai-Nilai',
            'konten_3' => 'Kami menjunjung tinggi kejujuran, pelayanan berkualitas, dan inovasi dalam industri pariwisata.',
        ]);
    }
}
