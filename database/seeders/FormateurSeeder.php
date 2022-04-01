<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formateur;

class FormateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Formateur::create([
            'user_id' => 5,
            'siret' => '854 254 789 00652',
            'experiences' => 'Praesent molestie gravida nibh, nec vestibulum mauris efficitur nec. Pellentesque dapibus porttitor orci, non aliquet dui. Sed eu augue urna. Maecenas id lectus ut mauris laoreet malesuada. Quisque id eros porttitor, facilisis nisl in',
            'age' => '34',
            'sexe' => 'homme',
            'kms' => '120',
            'diplomes' => 'CAP Soudeur',
            'annees_experience' => 5,
            'image' => 'formateur1.jpg',
            'disponible' => true,
            'date_debut_dispo' => '2022-05-17',
            'date_fin_dispo' => null,
        ]);

        Formateur::create([
            'user_id' => 6,
            'siret' => '842 956 325 00852',
            'experiences' => 'Praesent molestie gravida nibh, nec vestibulum mauris efficitur nec. Pellentesque dapibus porttitor orci, non aliquet dui. Sed eu augue urna. Maecenas id lectus ut mauris laoreet malesuada. Quisque id eros porttitor, facilisis nisl in',
            'age' => '56',
            'sexe' => 'homme',
            'kms' => '85',
            'diplomes' => 'BAC PRO Chaudronier',
            'annees_experience' => 34,
            'image' => 'formateur2.jpg',
            'disponible' => false,
            'date_debut_dispo' => null,
            'date_fin_dispo' => null,
        ]);

        Formateur::create([
            'user_id' => 7,
            'siret' => '364 458 489 00265',
            'experiences' => 'Praesent molestie gravida nibh, nec vestibulum mauris efficitur nec. Pellentesque dapibus porttitor orci, non aliquet dui. Sed eu augue urna. Maecenas id lectus ut mauris laoreet malesuada. Quisque id eros porttitor, facilisis nisl in',
            'age' => '46',
            'sexe' => 'homme',
            'kms' => '150',
            'diplomes' => 'BEP Plomberie',
            'annees_experience' => 8,
            'image' => 'formateur3.jpg',
            'disponible' => true,
            'date_debut_dispo' => '2022-05-20',
            'date_fin_dispo' => '2022-09-20',
        ]);

        Formateur::create([
            'user_id' => 8,
            'siret' => '756 937 645 00128',
            'experiences' => 'Praesent molestie gravida nibh, nec vestibulum mauris efficitur nec. Pellentesque dapibus porttitor orci, non aliquet dui. Sed eu augue urna. Maecenas id lectus ut mauris laoreet malesuada. Quisque id eros porttitor, facilisis nisl in',
            'age' => '34',
            'sexe' => 'homme',
            'kms' => '120',
            'diplomes' => 'BAC Pro Electricien',
            'annees_experience' => 12,
            'image' => 'formateur4.jpg',
            'disponible' => true,
            'date_debut_dispo' => '2022-06-20',
            'date_fin_dispo' => null,
        ]);

        Formateur::create([
            'user_id' => 9,
            'siret' => '112 986 362 00651',
            'experiences' => 'Praesent molestie gravida nibh, nec vestibulum mauris efficitur nec. Pellentesque dapibus porttitor orci, non aliquet dui. Sed eu augue urna. Maecenas id lectus ut mauris laoreet malesuada. Quisque id eros porttitor, facilisis nisl in',
            'age' => '40',
            'sexe' => 'homme',
            'kms' => '160',
            'diplomes' => 'CAP Charpentier',
            'annees_experience' => 21,
            'image' => 'formateur5.jpg',
            'disponible' => false,
            'date_debut_dispo' => null,
            'date_fin_dispo' => null,
        ]);

        Formateur::create([
            'user_id' => 10,
            'siret' => '348 341 329 00325',
            'experiences' => 'Praesent molestie gravida nibh, nec vestibulum mauris efficitur nec. Pellentesque dapibus porttitor orci, non aliquet dui. Sed eu augue urna. Maecenas id lectus ut mauris laoreet malesuada. Quisque id eros porttitor, facilisis nisl in',
            'age' => '29',
            'sexe' => 'femme',
            'kms' => '60',
            'diplomes' => 'CAP Coiffeur',
            'annees_experience' => 9,
            'image' => 'formateur6.jpg',
            'disponible' => true,
            'date_debut_dispo' => null,
            'date_fin_dispo' => null,
        ]);

        Formateur::create([
            'user_id' => 11,
            'siret' => '496 936 996 00888',
            'experiences' => 'Praesent molestie gravida nibh, nec vestibulum mauris efficitur nec. Pellentesque dapibus porttitor orci, non aliquet dui. Sed eu augue urna. Maecenas id lectus ut mauris laoreet malesuada. Quisque id eros porttitor, facilisis nisl in',
            'age' => '58',
            'sexe' => 'femme',
            'kms' => '90',
            'diplomes' => 'BAC Pro paysagiste',
            'annees_experience' => 40,
            'image' => 'formateur7.jpg',
            'disponible' => false,
            'date_debut_dispo' => null,
            'date_fin_dispo' => null,
        ]);

        Formateur::create([
            'user_id' => 12,
            'siret' => '699 334 662 00754',
            'experiences' => 'Praesent molestie gravida nibh, nec vestibulum mauris efficitur nec. Pellentesque dapibus porttitor orci, non aliquet dui. Sed eu augue urna. Maecenas id lectus ut mauris laoreet malesuada. Quisque id eros porttitor, facilisis nisl in',
            'age' => '38',
            'sexe' => 'femme',
            'kms' => '190',
            'diplomes' => 'CAP Cuisinier',
            'annees_experience' => 18,
            'image' => 'formateur8.jpg',
            'disponible' => true,
            'date_debut_dispo' => null,
            'date_fin_dispo' => null,
        ]);
    }
}
