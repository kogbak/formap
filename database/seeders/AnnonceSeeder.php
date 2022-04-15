<?php

namespace Database\Seeders;

use App\Models\Annonce;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    

        Annonce::create([
            'domaine_id' => 4,
            'entreprise_id' => 3,
            'titre' => 'Je recherche un formateur paysagiste',
            'description_courte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia est nec dui sollicitudin, vel maximus lorem lacinia.',
            'description_longue' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia est nec dui sollicitudin, vel maximus lorem lacinia. Suspendisse ornare vel dolor quis mollis. Phasellus nunc nisl, gravida at mi a, finibus vulputate leo. Aliquam posuere ac dui vel suscipit. Phasellus at suscipit lorem. Pellentesque fringilla sagittis tortor, et egestas mi ultricies gravida. Curabitur ultrices felis vel mattis lacinia. Pellentesque viverra, mi ac gravida condimentum, arcu nisi lobortis erat, eget consequat sem magna vel erat. Aliquam tortor ante, condimentum nec elit vel, vulputate ornare lorem.',
            'ville' => 'Metz',
            'code_postal' => '57000',
            
        ]);

        Annonce::create([
            'domaine_id' => 9,
            'entreprise_id' => 4,
            'titre' => 'RECHERCHE Mecanicien automobile',
            'description_courte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia est nec dui sollicitudin, vel maximus lorem lacinia.',
            'description_longue' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia est nec dui sollicitudin, vel maximus lorem lacinia. Suspendisse ornare vel dolor quis mollis. Phasellus nunc nisl, gravida at mi a, finibus vulputate leo. Aliquam posuere ac dui vel suscipit. Phasellus at suscipit lorem. Pellentesque fringilla sagittis tortor, et egestas mi ultricies gravida. Curabitur ultrices felis vel mattis lacinia. Pellentesque viverra, mi ac gravida condimentum, arcu nisi lobortis erat, eget consequat sem magna vel erat. Aliquam tortor ante, condimentum nec elit vel, vulputate ornare lorem.',
            'ville' => 'Lille',
            'code_postal' => '59000',
            
        ]);

        Annonce::create([
            'domaine_id' => 8,
            'entreprise_id' => 2,
            'titre' => 'Cherche cuisinier pour grand restaurant',
            'description_courte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia est nec dui sollicitudin, vel maximus lorem lacinia.',
            'description_longue' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia est nec dui sollicitudin, vel maximus lorem lacinia. Suspendisse ornare vel dolor quis mollis. Phasellus nunc nisl, gravida at mi a, finibus vulputate leo. Aliquam posuere ac dui vel suscipit. Phasellus at suscipit lorem. Pellentesque fringilla sagittis tortor, et egestas mi ultricies gravida. Curabitur ultrices felis vel mattis lacinia. Pellentesque viverra, mi ac gravida condimentum, arcu nisi lobortis erat, eget consequat sem magna vel erat. Aliquam tortor ante, condimentum nec elit vel, vulputate ornare lorem.',
            'ville' => 'Bordeaux',
            'code_postal' => '33000',
           
        ]);

        Annonce::create([
            'domaine_id' => 3,
            'entreprise_id' => 1,
            'titre' => 'Cherche plombier vraiment expérimenté',
            'description_courte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia est nec dui sollicitudin, vel maximus lorem lacinia.',
            'description_longue' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia est nec dui sollicitudin, vel maximus lorem lacinia. Suspendisse ornare vel dolor quis mollis. Phasellus nunc nisl, gravida at mi a, finibus vulputate leo. Aliquam posuere ac dui vel suscipit. Phasellus at suscipit lorem. Pellentesque fringilla sagittis tortor, et egestas mi ultricies gravida. Curabitur ultrices felis vel mattis lacinia. Pellentesque viverra, mi ac gravida condimentum, arcu nisi lobortis erat, eget consequat sem magna vel erat. Aliquam tortor ante, condimentum nec elit vel, vulputate ornare lorem.',
            'ville' => 'Paris',
            'code_postal' => '75000',
           
        ]);

        
    }
}
