<?php

namespace App\Http\Controllers;

use App\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        return Entreprise::all();
    }
    public function getEmp($idEnt){
        $employes = DB::table('employes')
                    ->select('employes.*')
                    ->join('entreprises','entreprises.id', '=', 'employes.idEntreprise')
                    ->where('employes.idEntreprise',$idEnt)
                    ->get();
                    return $employes;
    }
    public function home(){

        return view('home');
    }
    public function bonjour($prenom){
        echo "bonjour $prenom";
    }
}
