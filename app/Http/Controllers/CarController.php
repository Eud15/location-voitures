<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class CarController extends Controller
{

    public function addCar(Request $request)
    {

        DB::table('voitures')->insert([
            'immatriculation' => $request->get('immatriculation'),
            'marque' =>  $request->get('marque'),
            'modele' =>  $request->get('modele'),
            'carburant' =>  $request->get('carburant'),
            'prix_location' =>  $request->get('prix_location'),
        ]);
       //$voitures = DB::table('voitures')->select('name','immatriculation');

       // $voiture = DB::table('voitures')->select('name','immatriculation')->where('immat','HGF546')->first();
        return view('add', [
            'message' => "Vous avez bien ajouté"
        ]);
    }
    public function addCar(Request $request,$id){
        $voiture = DB::table('voitures')->select('name','immatriculation')->where('immatriculation',$id)->first();
        if($voiture){
            return view('shopping', [
                'voiture' => $voiture
            ]);
        }else{
            return view('404', [
                'message' => "Voiture non trouvée"
            ]);
        }
    }


}

