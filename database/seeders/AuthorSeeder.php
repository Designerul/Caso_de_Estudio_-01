<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            ['id' => 1, 'autor' => 'GEORGE ORWELL', 'slug' => 'george_orwell', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'autor' => 'TEMAS DE HOY', 'slug' => 'temas_de_hoy', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'autor' => 'F SCOTT FITZGERALD', 'slug' => 'f_scott_fitzgerald', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'autor' => 'LORNA BYRNE', 'slug' => 'lorna_byrne', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'autor' => 'MIKE LIGHTWOOD', 'slug' => 'mike_lightwood', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'autor' => 'ROSAK ESQUIVEL', 'slug' => 'rosak_esquivel', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'autor' => 'LISE BOURBEAU', 'slug' => 'lise_bourbeau', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'autor' => 'ELLE KENNEDY', 'slug' => 'elle_kennedy', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'autor' => 'KATE A BOORMAN', 'slug' => 'kate_a_boorman', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'autor' => 'JAMES PATTERSON', 'slug' => 'james_patterson', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'autor' => 'NICKELODEON', 'slug' => 'nickelodeon', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'autor' => 'ERICH FROMM', 'slug' => 'erich_fromm', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'autor' => 'RITA LEVI', 'slug' => 'rita_levi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'autor' => 'ANNA DAY', 'slug' => 'anna_day', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'autor' => 'HARLAN COBEN', 'slug' => 'harlan_coben', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'autor' => 'VICTORIA CAMPS', 'slug' => 'victoria_camps', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'autor' => 'KIO STARK', 'slug' => 'kio_stark', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'autor' => 'ELENA LUCHETTI', 'slug' => 'elena_luchetti', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'autor' => 'MARTIN VEIGA', 'slug' => 'martin_veiga', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'autor' => 'JAVIER MURCIA', 'slug' => 'javier_murcia', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'autor' => 'EDITH WHATRTON', 'slug' => 'edith_whatrton', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'autor' => 'MARY SHELLEY', 'slug' => 'mary_shelley', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 23, 'autor' => 'PLANETA JUNIOR', 'slug' => 'planeta_junior', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'autor' => 'STEPHEN HAWKING', 'slug' => 'stephen_hawking', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 25, 'autor' => 'TERRY BROOKS', 'slug' => 'terry_brooks', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 26, 'autor' => 'KAYLA OLSON', 'slug' => 'kayla_olson', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 27, 'autor' => 'LEXUS', 'slug' => 'lexus', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 28, 'autor' => 'CESAR GANDARA', 'slug' => 'cesar_gandara', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 29, 'autor' => 'W R BURNETT', 'slug' => 'w_r_burnett', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 30, 'autor' => 'RICARDO ALCANTARA', 'slug' => 'ricardo_alcantara', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 31, 'autor' => 'GEMMA ELWIN', 'slug' => 'gemma_elwin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 32, 'autor' => 'JUAN DOMINGO ARGUELLES', 'slug' => 'juan_domingo_arguelles', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 33, 'autor' => 'KOMANDER', 'slug' => 'komander', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 34, 'autor' => 'H P LOVECRAFT', 'slug' => 'h_p_lovecraft', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 35, 'autor' => 'HAEMIN SUNIM', 'slug' => 'haemin_sunim', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 36, 'autor' => 'ENRIQUE LASO', 'slug' => 'enrique_laso', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 37, 'autor' => 'RICK RIORDAN', 'slug' => 'rick_riordan', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 38, 'autor' => 'ISABEL ALLENDE', 'slug' => 'isabel_allende', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 39, 'autor' => 'MARTIN MORENO', 'slug' => 'martin_moreno', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 40, 'autor' => 'DIAMANTE', 'slug' => 'diamante', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 41, 'autor' => 'KARIME CARDONA', 'slug' => 'karime_cardona', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 42, 'autor' => 'JOHN BOYNE', 'slug' => 'john_boyne', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 43, 'autor' => 'STEFAN ZWEIG', 'slug' => 'stefan_zweig', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 44, 'autor' => 'MANUEL CASTELLS', 'slug' => 'manuel_castells', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 45, 'autor' => 'MARIO CORTELLA', 'slug' => 'mario_cortella', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 46, 'autor' => 'DEAN HALE', 'slug' => 'dean_hale', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 47, 'autor' => 'JOHN KATZENBACH', 'slug' => 'john_katzenbach', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 48, 'autor' => 'IGNACIO EASINS', 'slug' => 'ignacio_easins', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 49, 'autor' => 'MARIA MARTINEZ', 'slug' => 'maria_martinez', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 50, 'autor' => 'SANJUANA MARTINEZ', 'slug' => 'sanjuana_martinez', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 51, 'autor' => 'JOJO MOYES', 'slug' => 'jojo_moyes', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 52, 'autor' => 'JOHN GOLDTHORPE', 'slug' => 'john_goldthorpe', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 53, 'autor' => 'RUDOLPH TANZI', 'slug' => 'rudolph_tanzi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 54, 'autor' => 'SMITH JAMES', 'slug' => 'smith_james', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 55, 'autor' => 'MARK MANSON', 'slug' => 'mark_manson', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 56, 'autor' => 'JOSE REVELES', 'slug' => 'jose_reveles', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 57, 'autor' => 'HENRY JAMES', 'slug' => 'henry_james', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 58, 'autor' => 'AMY TINTERA', 'slug' => 'amy_tintera', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 59, 'autor' => 'GEORGE MARTIN', 'slug' => 'george_martin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 60, 'autor' => 'DOLORES REDONDO', 'slug' => 'dolores_redondo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 61, 'autor' => 'STEPHEN KING', 'slug' => 'stephen_king', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 62, 'autor' => 'FRANCISCO ASENSI', 'slug' => 'francisco_asensi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 63, 'autor' => 'SHIRLEY JACKSON', 'slug' => 'shirley_jackson', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 64, 'autor' => 'ALBERT CAMUS', 'slug' => 'albert_camus', 'created_at' => now(), 'updated_at' => now()],
        ]);

    }
}
