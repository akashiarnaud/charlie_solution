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
            'nom' => 'test',
            'adresse' => '17 empire state building',
            'tel' => '0184282585',
            'lat' => 28.4872,
            'lon' => -81.41253,
        ]);
        DB::table('entreprises')->insert([
            'nom' => 'test2',
            'adresse' => '22 charle de bois',
            'tel' => '0145879898',
            'lat' => 17.25444,
            'lon' => 81.41253,
        ]);
    }
}
