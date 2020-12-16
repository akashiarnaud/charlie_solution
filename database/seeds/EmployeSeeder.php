<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employes')->insert([
            'nom' => 'Sofiane',
            'prenom' => 'Matsen',
            'adresse' => '18 Rue de la paix, Paris',
            'tel' => '00248488',
            'idEntreprise' => 1
        ]);
        DB::table('employes')->insert([
            'nom' => 'Jean',
            'prenom' => 'Michel',
            'adresse' => '18 Rue de Paris, Roubaix',
            'tel' => '0184282585',
            'idEntreprise' => 1
        ]);
        DB::table('employes')->insert([
            'nom' => 'Dupuis',
            'prenom' => 'Justine',
            'adresse' => '88 Boulevard de la liberte , Lille',
            'tel' => '0184282585',
            'idEntreprise' => 2
        ]);
        DB::table('employes')->insert([
            'nom' => 'Melissa',
            'prenom' => 'Amel',
            'adresse' => '18 Boulevard victor hugo, Lille',
            'tel' => '0184282585',
            'idEntreprise' => 2
        ]);
        DB::table('employes')->insert([
            'nom' => 'Pierre',
            'prenom' => 'Jean',
            'adresse' => '18 rue de la famille, Lille',
            'tel' => '0684282585',
            'idEntreprise' => 3
        ]);
        DB::table('employes')->insert([
            'nom' => 'Pouillet',
            'prenom' => 'Laetitia',
            'adresse' => '18 rue paul langevin, Lille',
            'tel' => '0680272585',
            'idEntreprise' => 3
        ]);
    }
}
