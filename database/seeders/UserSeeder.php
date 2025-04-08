<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id_user' => 'USR-0001',
                'name' => 'Aqilla Rachel Rabbani',
                'email' => 'arachelrabbani@gmail.com',
                'phone_number' => '085879334272',
                'password' => Hash::make('acelacel'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 'USR-0002',
                'name' => 'Ilmanza Hardian',
                'email' => '541221037@student.smktelkom-pwt.sch.id',
                'phone_number' => '081296680685',
                'password' => Hash::make('acelacel'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
