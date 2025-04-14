<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MomentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('moment_categories')->insert([
            [
                'id_momcat' => 'MCT-0001',
                'category_id' => 'CAT-0001',
                'moment_id' => 'MOT-0001',
            ],
            [
                'id_momcat' => 'MCT-0002',
                'category_id' => 'CAT-0002',
                'moment_id' => 'MOT-0001',
            ],
            [
                'id_momcat' => 'MCT-0003',
                'category_id' => 'CAT-0003',
                'moment_id' => 'MOT-0001',
            ],
            [
                'id_momcat' => 'MCT-0004',
                'category_id' => 'CAT-0004',
                'moment_id' => 'MOT-0001',
            ],
            [
                'id_momcat' => 'MCT-0005',
                'category_id' => 'CAT-0005',
                'moment_id' => 'MOT-0001',
            ],
            [
                'id_momcat' => 'MCT-0006',
                'category_id' => 'CAT-0006',
                'moment_id' => 'MOT-0001',
            ],
            [
                'id_momcat' => 'MCT-0007',
                'category_id' => 'CAT-0007',
                'moment_id' => 'MOT-0001',
            ],
            [
                'id_momcat' => 'MCT-0008',
                'category_id' => 'CAT-0008',
                'moment_id' => 'MOT-0001',
            ],
            [
                'id_momcat' => 'MCT-0009',
                'category_id' => 'CAT-0009',
                'moment_id' => 'MOT-0001',
            ],
            [
                'id_momcat' => 'MCT-0010',
                'category_id' => 'CAT-0010',
                'moment_id' => 'MOT-0001',
            ],
            [
                'id_momcat' => 'MCT-0011',
                'category_id' => 'CAT-0011',
                'moment_id' => 'MOT-0001',
            ],
            [
                'id_momcat' => 'MCT-0012',
                'category_id' => 'CAT-0012',
                'moment_id' => 'MOT-0001',
            ],
            [
                'id_momcat' => 'MCT-0013',
                'category_id' => 'CAT-0013',
                'moment_id' => 'MOT-0001',
            ],
            [
                'id_momcat' => 'MCT-0014',
                'category_id' => 'CAT-0002',
                'moment_id' => 'MOT-0002',
            ],
            [
                'id_momcat' => 'MCT-0015',
                'category_id' => 'CAT-0007',
                'moment_id' => 'MOT-0002',
            ],
            [
                'id_momcat' => 'MCT-0016',
                'category_id' => 'CAT-0010',
                'moment_id' => 'MOT-0002',
            ],
            [
                'id_momcat' => 'MCT-0017',
                'category_id' => 'CAT-0013',
                'moment_id' => 'MOT-0002',
            ],
            [
                'id_momcat' => 'MCT-0018',
                'category_id' => 'CAT-0002',
                'moment_id' => 'MOT-0003',
            ],
            [
                'id_momcat' => 'MCT-0019',
                'category_id' => 'CAT-0010',
                'moment_id' => 'MOT-0004',
            ],
            [
                'id_momcat' => 'MCT-0020',
                'category_id' => 'CAT-0011',
                'moment_id' => 'MOT-0004',
            ],
            [
                'id_momcat' => 'MCT-0021',
                'category_id' => 'CAT-0010',
                'moment_id' => 'MOT-0005',
            ],
            [
                'id_momcat' => 'MCT-0022',
                'category_id' => 'CAT-0011',
                'moment_id' => 'MOT-0005',
            ],
        ]);
    }
}
