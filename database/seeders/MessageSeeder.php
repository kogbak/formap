<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'formateur_id' => 1,
            'entreprise_id' => 1,
            'message' => 'Salut, je suis le magicien Hugo !',
            'expediteur' => 'Hugo',
            
        ]);

        DB::table('messages')->insert([
            'formateur_id' => 2,
            'entreprise_id' => 2,
            'message' => 'Bien le bonjour et bienvenue sur mon super site !',
            'expediteur' => 'Ben',
            
        ]);

        DB::table('messages')->insert([
            'formateur_id' => 3,
            'entreprise_id' => 3,
            'message' => 'Bonjour je suis chef d\'entreprise de plus de 1000 employés',
            'expediteur' => 'Azadeh',
            
        ]);
    }
}
