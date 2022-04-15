<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomaineFormateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domaine_formateurs')->insert([
            'formateur_id' => 1,
            'domaine_id' => 1,
        ]);

        DB::table('domaine_formateurs')->insert([
            'formateur_id' => 1,
            'domaine_id' => 2,
        ]);

        DB::table('domaine_formateurs')->insert([
            'formateur_id' => 1,
            'domaine_id' => 3,
        ]);
    }
}
