<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntrepriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('entreprises')->insert([
            'nom' => 'Entreprise1',
            'adresse' => '14 Boulevard victor hugo, LILLE',
            'tel' => '0184282585',
            'lat' => 50.4872,
            'lon' => 3.41253,
        ]);
        DB::table('entreprises')->insert([
            'nom' => 'Entreprise2',
            'adresse' => '22 charle de bois, Lille',
            'tel' => '0145879898',
            'lat' => 57.25444,
            'lon' => 7.41253,
        ]);
        DB::table('entreprises')->insert([
            'nom' => 'Entreprise3',
            'adresse' => '17 rue nationale, Lille',
            'tel' => '078484484',
            'lat' => 54.4872,
            'lon' => 1.41253,
        ]);
    }
}
