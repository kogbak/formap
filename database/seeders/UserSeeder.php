<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom' => 'Routhier',
            'prenom' => 'Nicholas',
            'email' => 'nicholasRouthier@rhyta.com',
            'password' => 'azertyuI26',
            'telephone' => '0658456232',
            'adresse' => '29, Avenue De Marlioz',
            'code_postal' => '92160',
            'ville' => 'ANTONY',    
        ]);

        User::create([
            'nom' => 'Laforge',
            'prenom' => 'Audrey',
            'email' => 'audreylaforge@gmail.com',
            'password' => 'azertyuI26',
            'telephone' => '0610820288',
            'adresse' => '52, rue de la Hulotais',
            'code_postal' => '97500',
            'ville' => 'SAINT-PIERRE-ET-MIQUELON',    
        ]);

        User::create([
            'nom' => 'Grandpre',
            'prenom' => 'Claude',
            'email' => 'claudegrandpre@jourrapide.com',
            'password' => 'azertyuI26',
            'telephone' => '0620523345',
            'adresse' => '42, rue des six frères Ruellan',
            'code_postal' => '57200',
            'ville' => 'SARREGUEMINES',    
        ]);

        User::create([
            'nom' => 'Marcheterre',
            'prenom' => 'Claire',
            'email' => 'clairemarcheterre@teleworm.com',
            'password' => 'azertyuI26',
            'telephone' => '0652659538',
            'adresse' => '96, rue des Chaligny',
            'code_postal' => '58000',
            'ville' => 'NEVERS',    
        ]);

        User::create([
            'nom' => 'Auguste',
            'prenom' => 'Sylvain',
            'email' => 'augustesylvain@armyspy.com',
            'password' => 'azertyuI26',
            'telephone' => '0653080192',
            'adresse' => '64, Avenue des Pres',
            'code_postal' => '03100',
            'ville' => 'MONTLUÇON',    
        ]);

        User::create([
            'nom' => 'Paiement',
            'prenom' => 'Mathilde',
            'email' => 'mathildepaiement@rhyta.com',
            'password' => 'azertyuI26',
            'telephone' => '0623484844',
            'adresse' => '19, rue Sadi Carnot',
            'code_postal' => '32000',
            'ville' => 'AUCH',    
        ]);

        User::create([
            'nom' => 'Lalonde',
            'prenom' => 'Luc',
            'email' => 'lucLalonde@armyspy.com',
            'password' => 'azertyuI26',
            'telephone' => '0661881386',
            'adresse' => '77, rue Marguerite',
            'code_postal' => '94350',
            'ville' => 'VILLIERS-SUR-MARNE',    
        ]);

        User::create([
            'nom' => 'Rodrigue',
            'prenom' => 'Nicholas',
            'email' => 'nicholasrodrigue@jourrapide.com',
            'password' => 'azertyuI26',
            'telephone' => '0699598875',
            'adresse' => '11, Avenue des Tuileries',
            'code_postal' => '23000',
            'ville' => 'GUÉRET',    
        ]);

        User::create([
            'nom' => 'Archaimbau',
            'prenom' => 'Vincent',
            'email' => 'archaimbauvincent@jourrapide.com',
            'password' => 'azertyuI26',
            'telephone' => '0642321907',
            'adresse' => '14, Rue Hubert de Lisle',
            'code_postal' => '33310',
            'ville' => 'LORMONT',    
        ]);

        User::create([
            'nom' => 'Auger',
            'prenom' => 'Ambra',
            'email' => 'ambraauger@dayrep.com',
            'password' => 'azertyuI26',
            'telephone' => '0601589112',
            'adresse' => '2, rue de la Boétie',
            'code_postal' => '77340',
            'ville' => 'PONTAULT-COMBAULT',    
        ]);

        User::create([
            'nom' => 'Paquette',
            'prenom' => 'Geneviève',
            'email' => 'genevievepaquette@dayrep.com',
            'password' => 'azertyuI26',
            'telephone' => '0669602746',
            'adresse' => '45, Chemin Du Lavarin Sud',
            'code_postal' => '94230',
            'ville' => 'CACHAN',    
        ]);

        User::create([
            'nom' => 'Aubert',
            'prenom' => 'Beauchesne',
            'email' => 'aubertbeauchesne@dayrep.com',
            'password' => 'azertyuI26',
            'telephone' => '0671227483',
            'adresse' => '85, Quai des Belges',
            'code_postal' => '13016',
            'ville' => 'MARSEILLE',    
        ]);
    }
}
