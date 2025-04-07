<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'id_category' => 'CAT-0001',
            'category_img' => 'catalog_images/Brownies/IMG_20230408_083116.jpg',
            'category_name' => 'Brownies',
            'category_description' => 'Brownies khas Achie Bakery dengan tekstur lembut dan rasa cokelat pekat.',
        ]);
        
        Category::create([
            'id_category' => 'CAT-0002',
            'category_img' => 'catalog_images/Cake/IMG_20211225_084745.jpg',
            'category_name' => 'Cake',
            'category_description' => 'Berbagai cake untuk berbagai acara seperti ulang tahun, anniversary dan lain-lain.',
        ]);
        
        Category::create([
            'id_category' => 'CAT-0003',
            'category_img' => 'catalog_images/Bolu/IMG_20220523_164035.jpg',
            'category_name' => 'Bolu',
            'category_description' => 'Beragam pilihan bolu klasik seperti seperti bolu pandan, bolu kukus dan bolu gulung.',
        ]);
        
        Category::create([
            'id_category' => 'CAT-0004',
            'category_img' => 'catalog_images/KueKering/IMG_20240224_095324.jpg',
            'category_name' => 'Cookies/Kue Kering',
            'category_description' => 'Pilihan cookies renyah dan kue kering untuk cemilan atau parcel.',
        ]);
        
        Category::create([
            'id_category' => 'CAT-0005',
            'category_img' => 'catalog_images/Roti/IMG20220407090953.jpg',
            'category_name' => 'Roti',
            'category_description' => 'Roti lembut dengan berbagai isian, topping manis dan asin.',
        ]);
        
        Category::create([
            'id_category' => 'CAT-0006',
            'category_img' => 'catalog_images/Pudding/IMG_20240818_122952.jpg',
            'category_name' => 'Pudding',
            'category_description' => 'Aneka pudding lembut dan segar dengan berbagai rasa, cocok untuk pencuci mulut dan sajian spesial.',
        ]);
        
        Category::create([
            'id_category' => 'CAT-0007',
            'category_img' => 'catalog_images/Snack/IMG_20250406_145716.jpg',
            'category_name' => 'Snack Tradisional',
            'category_description' => 'Jajanan pasar khas Indonesia seperti lemper, pastel, dan kue lapis.',
        ]);
        
        Category::create([
            'id_category' => 'CAT-0008',
            'category_img' => 'catalog_images/Mochi/IMG20240726095705.jpg',
            'category_name' => 'Mochi',
            'category_description' => 'Kue mochi kenyal dengan isian kacang atau varian rasa kekinian.',
        ]);
        
        Category::create([
            'id_category' => 'CAT-0009',
            'category_img' => 'catalog_images/Donat/IMG20220301142454.jpg',
            'category_name' => 'Donat',
            'category_description' => 'Donat empuk dengan topping beragam seperti glaze, meses, dan keju.',
        ]);
        
        Category::create([
            'id_category' => 'CAT-0010',
            'category_img' => 'catalog_images/Paket Snack Box/IMG_20211228_144710.jpg',
            'category_name' => 'Paket Snack Box',
            'category_description' => 'Paket cemilan lengkap cocok untuk acara meeting, arisan, dan hajatan.',
        ]);
        
        Category::create([
            'id_category' => 'CAT-0011',
            'category_img' => 'catalog_images/Paket Rice Box/IMG20220523101052.jpg',
            'category_name' => 'Paket Rice Box',
            'category_description' => 'Paket nasi lengkap dengan lauk dan sayur, praktis untuk berbagai acara.',
        ]);
        
        Category::create([
            'id_category' => 'CAT-0012',
            'category_img' => 'catalog_images/Tumpeng/IMG_20220717_084109.jpg',
            'category_name' => 'Tumpeng',
            'category_description' => 'Tumpeng nasi kuning lengkap dengan lauk pauk khas, cocok untuk acara spesial dan syukuran.',
        ]);
        
        Category::create([
            'id_category' => 'CAT-0013',
            'category_img' => 'catalog_images/Pastry/IMG20240719100305.jpg',
            'category_name' => 'Pastry',
            'category_description' => 'Pastry dengan layer yang tak terhitung, dan juga berbagai macam jenis',
        ]);
    }
}
