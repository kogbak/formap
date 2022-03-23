<?php

namespace Database\Seeders;

use App\Models\Domaine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DomaineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Domaine::create([

            'domaine' => 'Soudeur'


        ]);

        Domaine::create([

            'domaine' => 'Chaudronier'


        ]);

        Domaine::create([

            'domaine' => 'Plombier'


        ]);

        Domaine::create([

            'domaine' => 'Electricien'


        ]);

        Domaine::create([

            'domaine' => 'Charpentier'


        ]);

        Domaine::create([



            'domaine' => 'Coiffeur'


        ]);
        Domaine::create([

            'domaine' => 'Cuisinier'


        ]);

        Domaine::create([

            'domaine' => 'Mecanicien automobile'


        ]);

        Domaine::create([


            'domaine' => 'Paysagiste'

        ]);
    }
}
