<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MomentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('moments')->insert([
            [
                'id_moment' => 'MOT-0001',
                'moment_img' => 'catalog_images/Cake/IMG20221229110846.jpg',
                'moment_name' => 'Ulang Tahun',
                'moment_description' => 'Rayakan hari ulang tahun dengan kejutan istimewa dan hidangan manis.',
            ],
            [
                'id_moment' => 'MOT-0002',
                'moment_img' => 'catalog_images/Cake/IMG_20221231_133958.jpg',
                'moment_name' => 'Pernikahan',
                'moment_description' => 'Hari spesial penuh cinta dan kenangan tak terlupakan.',
            ],
            [
                'id_moment' => 'MOT-0003',
                'moment_img' => 'catalog_images/Donat/IMG20220404152728.jpg',
                'moment_name' => 'Anniversary',
                'moment_description' => 'Momen spesial untuk merayakan tahun-tahun penuh cinta.',
            ],
            [
                'id_moment' => 'MOT-0004',
                'moment_img' => 'catalog_images/Paket Snack Box/IMG_20211228_144710.jpg',
                'moment_name' => 'Meeting',
                'moment_description' => 'Pertemuan profesional yang produktif dengan sajian ringan yang menyegarkan.',
            ],
            [
                'id_moment' => 'MOT-0005',
                'moment_img' => 'catalog_images/Roti/IMG20211114121844.jpg',
                'moment_name' => 'Arisan',
                'moment_description' => 'Kumpul santai bersama teman-teman dengan suasana kekeluargaan dan hidangan lezat.',
            ],
        ]);
    }
}
