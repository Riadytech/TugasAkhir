<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WhyChooseUs;

class WhyChooseUsSeeder extends Seeder
{
    public function run()
    {
        WhyChooseUs::create([
            'judul' => 'Kenapa Memilih Kami?',
            'poin' => "Pelayanan Terbaik\nHarga Terjangkau\nDestinasi Menarik\nAkses Mudah",
            'deskripsi' => 'Kami menawarkan pengalaman wisata yang tidak terlupakan dengan dukungan tim profesional dan layanan terbaik.',
            'gambar' => null // nanti bisa diupload manual lewat admin
        ]);
    }
}

