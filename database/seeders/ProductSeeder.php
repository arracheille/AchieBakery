<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'id_product' => 'PRD-0001',
            'category_id' => 'CAT-0013',
            'product_name' => 'Bolen Coklat',
            'product_img' => 'catalog_images/Bolen/IMG20230710124919.jpg',
            'product_description' => 'Bolen dengan isi pisang dan coklat',
            'product_price' => 75000,
            'product_size' => '10 Pcs',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0002',
            'category_id' => 'CAT-0013',
            'product_name' => 'Bolen Keju',
            'product_img' => 'catalog_images/Bolen/IMG20230710124956.jpg',
            'product_description' => 'Bolen dengan isi pisang dan keju',
            'product_price' => 75000,
            'product_size' => '10 Pcs',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0003',
            'category_id' => 'CAT-0003',
            'product_name' => 'Chiffon Pandan',
            'product_img' => 'catalog_images/Bolu/IMG_20220117_104044.jpg',
            'product_description' => 'Chiffon keju dengan rasa pandan',
            'product_price' => 120000,
            'product_size' => '20cm x 20cm, 5-8 orang',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0004',
            'category_id' => 'CAT-0003',
            'product_name' => 'Chiffon',
            'product_img' => 'catalog_images/Bolu/IMG_20220117_104044.jpg',
            'product_description' => 'Bolu chiffon dengan topping keju',
            'product_price' => 120000,
            'product_size' => '20cm x 20cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0005',
            'category_id' => 'CAT-0003',
            'product_name' => 'Bolu Gulung',
            'product_img' => 'catalog_images/Bolu/IMG20250309154020.jpg',
            'product_description' => 'Bolu gulung dengan isian stroberi, nanas atau anggur',
            'product_price' => 150000,
            'product_size' => '30cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0006',
            'category_id' => 'CAT-0003',
            'product_name' => 'Bolu Gulung Motif',
            'product_img' => 'catalog_images/Bolu/IMG20220222090610.jpg',
            'product_description' => 'Bolu gulung bermotif coklat dengan isian stroberi, nanas atau anggur',
            'product_price' => 160000,
            'product_size' => '20cm x 20cm, 5-8 orang',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0007',
            'category_id' => 'CAT-0003',
            'product_name' => 'Bolu',
            'product_img' => 'catalog_images/Bolu/IMG20220514094212.jpg',
            'product_description' => 'Bolu reguler yang cocok untuk dimakan dengan kopi',
            'product_price' => 110000,
            'product_size' => '20cm x 20cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0008',
            'category_id' => 'CAT-0003',
            'product_name' => 'Bolu Kotak Motif',
            'product_img' => 'catalog_images/Bolu/IMG20220315120605.jpg',
            'product_description' => 'Bolu cantik bermotif coklat, cocok untuk semua occasion',
            'product_price' => 130000,
            'product_size' => '20cm x 20cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0009',
            'category_id' => 'CAT-0001',
            'product_name' => 'Brownies Sekat Aneka Topping 25 Pcs',
            'product_img' => 'catalog_images/Brownies/IMG20211113103345.jpg',
            'product_description' => 'Brownies khas Achie Bakery dengan tekstur lembut dan rasa cokelat pekat',
            'product_price' => 150000,
            'product_size' => '20cm x 20cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0010',
            'category_id' => 'CAT-0001',
            'product_name' => 'Brownies Sekat 25 Pcs + Coklat Ucapan',
            'product_img' => 'catalog_images/Brownies/IMG20211113103345.jpg',
            'product_description' => 'Brownies khas Achie Bakery dengan dengan ucapan coklat untuk acaramu',
            'product_price' => 170000,
            'product_size' => '20cm x 20cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0011',
            'category_id' => 'CAT-0001',
            'product_name' => 'Brownies Panggang Panjang',
            'product_img' => 'catalog_images/Brownies/IMG20211112132016.jpg',
            'product_description' => 'Brownies khas Achie Bakery dengan tekstur lembut dan rasa cokelat pekat',
            'product_price' => 130000,
            'product_size' => '30cm x 10cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0012',
            'category_id' => 'CAT-0001',
            'product_name' => 'Brownies Panggang Kecil',
            'product_img' => 'catalog_images/Brownies/IMG20250315090328.jpg',
            'product_description' => 'Brownies khas Achie Bakery dengan tekstur lembut dan rasa cokelat pekat',
            'product_price' => 75000,
            'product_size' => '15cm x 10cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0013',
            'category_id' => 'CAT-0001',
            'product_name' => 'Brownies Panggang Kecil',
            'product_img' => 'catalog_images/Brownies/IMG20250315090328.jpg',
            'product_description' => 'Brownies khas Achie Bakery dengan tekstur lembut dan rasa cokelat pekat',
            'product_price' => 75000,
            'product_size' => '15cm x 10cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0014',
            'category_id' => 'CAT-0002',
            'product_name' => 'Cake Hello Kitty',
            'product_img' => 'catalog_images/Cake/IMG20240325120413.jpg',
            'product_description' => 'Cake dengan layer brownies kukus dan whipped cream, dekorasi pink khas hello kitty dan butter cream serta fondant.',
            'product_price' => 350000,
            'product_size' => '20cm x 20cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0015',
            'category_id' => 'CAT-0002',
            'product_name' => 'Cake Sweet Seventeen',
            'product_img' => 'catalog_images/Cake/IMG20240901073900.jpg',
            'product_description' => 'Butter whipped cream berwarna broken white dengan dekorasi pink, biru dan rose gold menjadi pilihan yang pas untuk sweet seventeen kamu!',
            'product_price' => 350000,
            'product_size' => '20cm x 20cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0016',
            'category_id' => 'CAT-0002',
            'product_name' => 'Cake Persegi panjang',
            'product_img' => 'catalog_images/Cake/IMG20240312131603.jpg',
            'product_description' => 'Cake sederhana dengan berbagai dekorasi coklat yang sangat chocolatey',
            'product_price' => 300000,
            'product_size' => '25cm x 15cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0017',
            'category_id' => 'CAT-0002',
            'product_name' => 'Cake Tingkat Batman',
            'product_img' => 'catalog_images/Cake/IMG20220507194922.jpg',
            'product_description' => 'Cake bertingkat ini akan sangat cocok untuk buah hati yang menyukai batman!',
            'product_price' => 400000,
            'product_size' => '25cm x 25cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0018',
            'category_id' => 'CAT-0002',
            'product_name' => 'Wedding Cake 3 Tingkat',
            'product_img' => 'catalog_images/Cake/IMG_20221231_133958.jpg',
            'product_description' => 'Pernikahan yang mewah akan kurang jika cakenya tidak mewah juga!',
            'product_price' => 700000,
            'product_size' => '30cm x 30cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0019',
            'category_id' => 'CAT-0002',
            'product_name' => 'Cake Superheroes',
            'product_img' => 'catalog_images/Cake/IMG_20211229_183228.jpg',
            'product_description' => 'Butter whipped cream cake ini sudah sepaket dengan cupcake topping fondant!',
            'product_price' => 400000,
            'product_size' => '25cm x 25cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0020',
            'category_id' => 'CAT-0002',
            'product_name' => 'Cake Superheroes',
            'product_img' => 'catalog_images/Cake/IMG_20220925_122456.jpg',
            'product_description' => 'Kuning adalah warna favorite saya! sangat amat menggemaskan.',
            'product_price' => 400000,
            'product_size' => '25cm x 25cm',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0021',
            'category_id' => 'CAT-0009',
            'product_name' => 'Donat Mini 6 Pcs',
            'product_img' => 'catalog_images/Donat/IMG_20211118_081736.jpg',
            'product_description' => 'Donat mini yang lucu ini bisa kamu makan bersama teman, keluarga atau doimu, kamu juga bisa request toppingnya, dengan base coklat dan apapun itu diatasnya!',
            'product_price' => 50000,
            'product_size' => '6 Pcs',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0022',
            'category_id' => 'CAT-0009',
            'product_name' => "Donat D'Amour 2 Pcs",
            'product_img' => 'catalog_images/Donat/IMG_20220227_081444.jpg',
            'product_description' => "Donat D'Amour, sesuai namanya, donut ini bisa kamu pesan untuk orang yang tercinta",
            'product_price' => 30000,
            'product_size' => '2 Pcs',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0023',
            'category_id' => 'CAT-0009',
            'product_name' => 'Donat Mini 9 Pcs',
            'product_img' => 'catalog_images/Donat/IMG20220420133355.jpg',
            'product_description' => 'Donat mini yang lucu ini bisa kamu makan bersama teman, keluarga atau doimu, kamu juga bisa request toppingnya, asalkan menggunakan glaze dan coklat ya!',
            'product_price' => 60000,
            'product_size' => '9 Pcs',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0024',
            'category_id' => 'CAT-0009',
            'product_name' => 'Donat Mini 12 Pcs',
            'product_img' => 'catalog_images/Donat/IMG20220404152728.jpg',
            'product_description' => 'Donat mini yang lucu ini bisa kamu makan bersama teman, keluarga atau doimu, kamu juga bisa request toppingnya, asalkan menggunakan glaze dan coklat ya!',
            'product_price' => 70000,
            'product_size' => '12 Pcs',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0025',
            'category_id' => 'CAT-0009',
            'product_name' => 'Cake Donat Mini 20 Pcs',
            'product_img' => 'catalog_images/Donat/IMG20211121095010.jpg',
            'product_description' => 'Cake donut special untuk pecinta donat saat ulang tahun!',
            'product_price' => 150000,
            'product_size' => '20 Pcs',
        ]);
        
        Product::create([
            'id_product' => 'PRD-0026',
            'category_id' => 'CAT-0005',
            'product_name' => 'FloosRoll',
            'product_img' => 'catalog_images/FloosRoll/IMG20250215125912.jpg',
            'product_description' => 'Floos Roll adalah sebuah roti yang digulung dengan isian mayonaise pedas dan abon, cocok banget buat cemilan untuk sore hari!',
            'product_price' => 80000,
            'product_size' => '5 Pcs',
        ]);

        Product::create([
            'id_product' => 'PRD-0027',
            'category_id' => 'CAT-0004',
            'product_name' => 'Hampers Kue Kering 2 Toples 600gr',
            'product_img' => 'catalog_images/KueKering/IMG_20240224_095857.jpg',
            'product_description' => 'Kue Kering premium Achie Bakery, untuk request isian toples bisa ditulis di catatan saat memesan produk yaa!',
            'product_price' => 200000,
            'product_size' => '2 Toples 600gr',
        ]);

        Product::create([
            'id_product' => 'PRD-0028',
            'category_id' => 'CAT-0004',
            'product_name' => 'Hampers Kue Kering 2 Toples 800gr',
            'product_img' => 'catalog_images/KueKering/IMG_20240224_095857.jpg',
            'product_description' => 'Kue Kering premium Achie Bakery, untuk request isian toples bisa ditulis di catatan saat memesan produk yaa!',
            'product_price' => 220000,
            'product_size' => '2 Toples 800gr',
        ]);

        Product::create([
            'id_product' => 'PRD-0029',
            'category_id' => 'CAT-0004',
            'product_name' => 'Hampers Kue Kering 3 Toples 600gr',
            'product_img' => 'catalog_images/KueKering/IMG_20240224_095621.jpg',
            'product_description' => 'Kue Kering premium Achie Bakery, untuk request isian toples bisa ditulis di catatan saat memesan produk yaa!',
            'product_price' => 250000,
            'product_size' => '3 Toples 600gr',
        ]);

        Product::create([
            'id_product' => 'PRD-0030',
            'category_id' => 'CAT-0004',
            'product_name' => 'Hampers Kue Kering 3 Toples 800gr',
            'product_img' => 'catalog_images/KueKering/IMG_20240224_095621.jpg',
            'product_description' => 'Kue Kering premium Achie Bakery, untuk request isian toples bisa ditulis di catatan saat memesan produk yaa!',
            'product_price' => 270000,
            'product_size' => '3 Toples 800gr',
        ]);

        Product::create([
            'id_product' => 'PRD-0031',
            'category_id' => 'CAT-0004',
            'product_name' => 'Hampers Kue Kering 4 Toples 250gr',
            'product_img' => 'catalog_images/KueKering/IMG_20250312_082739.jpg',
            'product_description' => 'Kue Kering premium Achie Bakery, untuk request isian toples bisa ditulis di catatan saat memesan produk yaa!',
            'product_price' => 150000,
            'product_size' => '4 Toples 250gr',
        ]);

        Product::create([
            'id_product' => 'PRD-0032',
            'category_id' => 'CAT-0004',
            'product_name' => 'Hampers Kue Kering 3 Toples 250gr',
            'product_img' => 'catalog_images/KueKering/IMG20220412094226.jpg',
            'product_description' => 'Kue Kering premium Achie Bakery, untuk request isian toples bisa ditulis di catatan saat memesan produk yaa!',
            'product_price' => 130000,
            'product_size' => '3 Toples 250gr',
        ]);

        Product::create([
            'id_product' => 'PRD-0033',
            'category_id' => 'CAT-0004',
            'product_name' => 'Kue Kering 1 Toples 250gr',
            'product_img' => 'catalog_images/KueKering/IMG20250301103147.jpg',
            'product_description' => 'Kue Kering premium Achie Bakery',
            'product_price' => 70000,
            'product_size' => '1 Toples 250gr',
        ]);

        Product::create([
            'id_product' => 'PRD-0034',
            'category_id' => 'CAT-0004',
            'product_name' => 'Kue Kering 1 Toples 600gr',
            'product_img' => 'catalog_images/KueKering/IMG_20220328_171136.jpg',
            'product_description' => 'Kue Kering premium Achie Bakery',
            'product_price' => 90000,
            'product_size' => '1 Toples 600gr',
        ]);

        Product::create([
            'id_product' => 'PRD-0035',
            'category_id' => 'CAT-0004',
            'product_name' => 'Kue Kering 1 Toples 800gr',
            'product_img' => 'catalog_images/KueKering/IMG_20220328_171136.jpg',
            'product_description' => 'Kue Kering premium Achie Bakery',
            'product_price' => 110000,
            'product_size' => '1 Toples 800gr',
        ]);

        Product::create([
            'id_product' => 'PRD-0036',
            'category_id' => 'CAT-0004',
            'product_name' => 'Kue Kering 1kg',
            'product_img' => 'catalog_images/KueKering/IMG20250304114822.jpg',
            'product_description' => 'Kue Kering premium Achie Bakery',
            'product_price' => 200000,
            'product_size' => '1 Container 1kg',
        ]);

        Product::create([
            'id_product' => 'PRD-0037',
            'category_id' => 'CAT-0008',
            'product_name' => 'Mochi 3 Pcs',
            'product_img' => 'catalog_images/KueKering/IMG20240726095652_BURST000_COVER.jpg',
            'product_description' => 'Mochi kenyal dengan rasa mangga, stroberi, anggur merah dan hijau, marshmallow serta coklat, tulis rasa yang kamu mau di catatan saat memesan yaa!',
            'product_price' => 60000,
            'product_size' => '3 Pcs',
        ]);

        Product::create([
            'id_product' => 'PRD-0038',
            'category_id' => 'CAT-0008',
            'product_name' => 'Mochi 4 Pcs',
            'product_img' => 'catalog_images/KueKering/IMG20240726095755.jpg',
            'product_description' => 'Mochi kenyal dengan rasa mangga, stroberi, anggur merah dan hijau, marshmallow serta coklat, tulis rasa yang kamu mau di catatan saat memesan yaa!',
            'product_price' => 80000,
            'product_size' => '4 Pcs',
        ]);
    }
}
