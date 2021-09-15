<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * fonction pour afficher la page dashboard
     * 
     */
    public function show(){
        $title="Dashboard";
        $count=Delivery::where('etat','validee')->count();
        $sell=Delivery::all();
        $montant=Delivery::where('etat','validee')->sum('montant');
        
        return view('dashboard',compact('title'),['count'=>$count,'sell'=>$sell,'montant'=>$montant]);
    }

        /**
       * fonction pour compter le nombre de vente
       * 
       */

      public function getCount(){
    
    }
}
