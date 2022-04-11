<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\About;
use App\Models\Merek;
use App\Models\Produk;
use App\Models\Landing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Al Kausar',
            'email' => 'alka@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        Landing::create([
            'tittle' => 'SELAMAT DATANG DI WEBSITE CASCOM',
            'isi' => 'WEBSITE INI MENJUAL BERBAGAI MACAM ALAT - ALAT ELEKTRONIK 
            SEPERTI LAPTOP, PC, HANDPHONE, DLL. SILAHKAN DILIHAT -LIHAT TERLEBIH DAHULU'
        ]);

        About::create([
            'judul' => 'Judul Pertama',
            'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad sunt, sed tenetur incidunt optio dicta rem eos
            distinctio sint aliquam quos unde officia cupiditate laudantium repudiandae. Doloremque incidunt sint iure dolorum
            tempora quibusdam temporibus quis voluptatem eaque illum quia, error iusto ipsum cumque vero cupiditate accusantium
            officia obcaecati nesciunt voluptatum?'
        ]);
        
        Produk::create([
            'nama' => 'Xiomi Redmi Note 10 Pro 5G',
            'spesifikasi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad sunt, sed tenetur incidunt optio dicta rem eos
            distinctio sint aliquam quos unde officia cupiditate laudantium repudiandae. Doloremque incidunt sint iure dolorum
            tempora quibusdam temporibus quis voluptatem eaque illum quia, error iusto ipsum cumque vero cupiditate accusantium
            officia obcaecati nesciunt voluptatum?',
            'nama_merek' => "Xiomi"
        ]);

        Produk::create([
            'nama' => 'Oppo Reno 5G',
            'spesifikasi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad sunt, sed tenetur incidunt optio dicta rem eos
            distinctio sint aliquam quos unde officia cupiditate laudantium repudiandae. Doloremque incidunt sint iure dolorum
            tempora quibusdam temporibus quis voluptatem eaque illum quia, error iusto ipsum cumque vero cupiditate accusantium
            officia obcaecati nesciunt voluptatum?',
            'nama_merek' => "Oppo"
        ]);

        Produk::create([
            'nama' => 'ASUS ROG Zephyrus M16 GU603HE',
            'spesifikasi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad sunt, sed tenetur incidunt optio dicta rem eos
            distinctio sint aliquam quos unde officia cupiditate laudantium repudiandae. Doloremque incidunt sint iure dolorum
            tempora quibusdam temporibus quis voluptatem eaque illum quia, error iusto ipsum cumque vero cupiditate accusantium
            officia obcaecati nesciunt voluptatum?',
            'nama_merek' => "Asus"
        ]);

        Merek::create([
            'nama' => 'Xiomi'
        ]);
        
        Merek::create([
            'nama' => 'Samsung'
        ]);

        Merek::create([
            'nama' => 'I Phone'
        ]);
    }
}
