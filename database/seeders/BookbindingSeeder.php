<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookbindingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookbindings')->insert([
            ['id' => 1, 'encuadernacion' => 'Papel', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'encuadernacion' => 'Pasta blanda', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'encuadernacion' => 'Rustica', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'encuadernacion' => 'Tapa dura', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
