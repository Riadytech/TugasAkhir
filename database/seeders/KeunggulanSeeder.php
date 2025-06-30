<?php

namespace Database\Seeders;
use App\Models\Keunggulan;
use Illuminate\Database\Seeder;

class KeunggulanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'gambar_icon' => 'https://img.icons8.com/dusk/64/guarantee.png',
                'judul' => 'Jaminan Harga Terbaik',
                'deskripsi' => 'Kami memberikan harga terbaik untuk setiap destinasi wisata.'
            ],
            [
                'gambar_icon' => 'https://img.icons8.com/dusk/64/facebook-like.png',
                'judul' => 'Disukai Wisatawan',
                'deskripsi' => 'Ribuan wisatawan mempercayai layanan kami.'
            ],
            [
                'gambar_icon' => 'https://img.icons8.com/dusk/64/detective.png',
                'judul' => 'Agen Perjalanan Terpercaya',
                'deskripsi' => 'Bekerjasama dengan mitra lokal terpercaya.'
            ],
            [
                'gambar_icon' => 'https://img.icons8.com/dusk/64/online-support.png',
                'judul' => 'Dukungan Pelanggan 24/7',
                'deskripsi' => 'Siap membantu kapan saja selama perjalanan Anda.'
            ]
        ];

        foreach ($data as $item) {
            Keunggulan::updateOrCreate(
                ['judul' => $item['judul']],
                $item
            );
        }
    }
}
