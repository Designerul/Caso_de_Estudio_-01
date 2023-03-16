<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'categoria' => 'Literatura', 'slug' => 'literatura', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'categoria' => 'Juveniles', 'slug' => 'juveniles', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'categoria' => 'Autoayuda', 'slug' => 'autoayuda', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'categoria' => 'Familia', 'slug' => 'familia', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'categoria' => 'Crecimiento personal', 'slug' => 'crecimiento_personal', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'categoria' => 'Libros para todos', 'slug' => 'libros_para_todos', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'categoria' => 'Para ninos', 'slug' => 'para_ninos', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'categoria' => 'Psicologia', 'slug' => 'psicologia', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'categoria' => 'Filosofia', 'slug' => 'filosofia', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'categoria' => 'Ensayo varios', 'slug' => 'ensayo_varios', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'categoria' => 'Infantiles', 'slug' => 'infantiles', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'categoria' => 'Ficcion historica', 'slug' => 'ficcion_historica', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'categoria' => 'Literatura de Terror y Misterio', 'slug' => 'literatura_de_terror_y_misterio', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'categoria' => 'Politica', 'slug' => 'politica', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
