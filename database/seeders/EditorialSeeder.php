<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('editorials')->insert([
            ['id' => 1, 'editorial' => 'Alfaguarda infantiles y juveniles', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'editorial' => 'Alianza', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'editorial' => 'Altea', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'editorial' => 'Arpa editores', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'editorial' => 'Booket', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'editorial' => 'Delfin editorial', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'editorial' => 'Diamante', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'editorial' => 'Diana', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'editorial' => 'Dolmen editorial', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'editorial' => 'Ediciones b', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'editorial' => 'Empresa activa', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'editorial' => 'Gran travesia', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'editorial' => 'Harper collings publishers', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'editorial' => 'Lexus', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'editorial' => 'Mirlo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'editorial' => 'Montena', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'editorial' => 'Oceano', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'editorial' => 'Oceano express', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'editorial' => 'Ocenao gran travesia', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'editorial' => 'Oz editorial', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'editorial' => 'Paidos', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'editorial' => 'Planeta', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 23, 'editorial' => 'Planeta junior', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'editorial' => 'Plaza y janes', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 25, 'editorial' => 'Rba', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 26, 'editorial' => 'Salamandra', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 27, 'editorial' => 'Sumda de letras', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 28, 'editorial' => 'Temas de hoy', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 29, 'editorial' => 'Titania', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 30, 'editorial' => 'Tomo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 31, 'editorial' => 'Umbriel', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 32, 'editorial' => 'Uranito', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 33, 'editorial' => 'Vergara y riba', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
