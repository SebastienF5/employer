<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function show(){
        $title="Livraison"; 
        $deliveries=Delivery::all();
        
        return view('delivery',compact('title'),['deliveries'=>$deliveries]);
    
    }
  
    public function store(Request $request)
    {
                $title="delivery";

         $request->validate([
             'nomProduit'=>['required','string','max:255'],
             'quantite'=>['required','int'],
           
             'numeroClient'=>['required','int'],
             'nomClient'=>['required','string','max:255'],
             'adresseClient'=>['required','string','max:255'],
             'etat'=>['required']
             
         ]);

         Delivery::create([
             'nomProduit'=>$request->nomProduit,
             'quantite'=>$request->quantite,
             'montant'=>$request->montant,
             'numeroClient'=>$request->numeroClient,
             'nomClient'=>$request->nomClient,
             'adresseClient'=>$request->adresseClient,
             'etat'=>$request->etat
         ]);
     
         return view('delivery',compact('title'));
    }


}
