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
            'tel' => '0184282585',
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
    }
}
