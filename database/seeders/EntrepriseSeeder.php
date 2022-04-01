<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entreprise;


class EntrepriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Entreprise::create([
            'user_id' => 1,
            'nom' => 'Maxi structure',
            'siret' => '834 285 467 00956',
            'image' => 'entreprise1.jpg',
            'description' => 'Entreprise qui créer des structure metalique sur mesure pour les particulier sur demande',
        ]);

        Entreprise::create([
            'user_id' => 2,
            'nom' => 'Le GRAND restaurant',
            'siret' => '652 445 854 00755',
            'image' => 'entreprise2.jpg',
            'description' => 'Grand restaurant qui recherche de la nouveaute et de l\'aide pour ces employé',
        ]);

        Entreprise::create([
            'user_id' => 3,
            'nom' => 'Form paysagiste',
            'siret' => '356 333 692 20154',
            'image' => 'entreprise3.jpg',
            'description' => 'Centre de formation de paysagiste, qui forme 60 nouveau paysagiste par ans',
        ]);

        Entreprise::create([
            'user_id' => 4,
            'nom' => 'Automobile forme toi',
            'siret' => '225 761 421 88754',
            'image' => 'entreprise4.jpg',
            'description' => 'Centre de formation de mecanique automobile avec des ancien élève qui travaille pour de grande marque comme Ferrari ',
        ]);

       


    }
}
