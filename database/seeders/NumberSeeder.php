<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('numbers')->insert([
            ['id' => 1, 'numero_ejemplares' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'numero_ejemplares' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'numero_ejemplares' => 14, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'numero_ejemplares' => 15, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'numero_ejemplares' => 30, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'numero_ejemplares' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'numero_ejemplares' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'numero_ejemplares' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'numero_ejemplares' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'numero_ejemplares' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'numero_ejemplares' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'numero_ejemplares' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'numero_ejemplares' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'numero_ejemplares' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'numero_ejemplares' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'numero_ejemplares' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'numero_ejemplares' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'numero_ejemplares' => 23, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'numero_ejemplares' => 34, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'numero_ejemplares' => 45, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'numero_ejemplares' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'numero_ejemplares' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 23, 'numero_ejemplares' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'numero_ejemplares' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 25, 'numero_ejemplares' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 26, 'numero_ejemplares' => 54, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 27, 'numero_ejemplares' => 32, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 28, 'numero_ejemplares' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 29, 'numero_ejemplares' => 90, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 30, 'numero_ejemplares' => 34, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 31, 'numero_ejemplares' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 32, 'numero_ejemplares' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 33, 'numero_ejemplares' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 34, 'numero_ejemplares' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 35, 'numero_ejemplares' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 36, 'numero_ejemplares' => 89, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 37, 'numero_ejemplares' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 38, 'numero_ejemplares' => 45, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 39, 'numero_ejemplares' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 40, 'numero_ejemplares' => 23, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 41, 'numero_ejemplares' => 33, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 42, 'numero_ejemplares' => 56, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 43, 'numero_ejemplares' => 65, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 44, 'numero_ejemplares' => 76, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 45, 'numero_ejemplares' => 67, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 46, 'numero_ejemplares' => 67, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 47, 'numero_ejemplares' => 34, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 48, 'numero_ejemplares' => 34, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 49, 'numero_ejemplares' => 23, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 50, 'numero_ejemplares' => 34, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 51, 'numero_ejemplares' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 52, 'numero_ejemplares' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 53, 'numero_ejemplares' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 54, 'numero_ejemplares' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 55, 'numero_ejemplares' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 56, 'numero_ejemplares' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 57, 'numero_ejemplares' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 58, 'numero_ejemplares' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 59, 'numero_ejemplares' => 11, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 60, 'numero_ejemplares' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 61, 'numero_ejemplares' => 45, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 62, 'numero_ejemplares' => 78, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 63, 'numero_ejemplares' => 98, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 64, 'numero_ejemplares' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 65, 'numero_ejemplares' => 23, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 66, 'numero_ejemplares' => 34, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 67, 'numero_ejemplares' => 54, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
