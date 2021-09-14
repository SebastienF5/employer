<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;

class DeliveryController extends Controller
{
    public function show(){
        $title="Livraison"; 
        $deliveries=Delivery::all();
       
        return view('delivery',compact('title'),['deliveries'=>$deliveries]);
    
    }
  
    public function store(Request $request)
    {
        
         $request->validate([
             'nomProduit'=>['required','string','max:255'],
             'quantite'=>['required','int'],
           
             'numeroClient'=>['required','int'],
             'nomClient'=>['required','string','max:255'],
             'adresseClient'=>['required','string','max:255'],
             'etat'=>['required']
             
         ]);

         Delivery::create([
             'user_id'=>$request->user_id,
             'nomProduit'=>$request->nomProduit,
             'quantite'=>$request->quantite,
             'montant'=>$request->montant,
             'numeroClient'=>$request->numeroClient,
             'nomClient'=>$request->nomClient,
             'adresseClient'=>$request->adresseClient,
             'etat'=>$request->etat
         ]);
    
      return redirect(Route('delivery'));
    }

    /**
     * fonction pour modifier une vente
     * @param id de la vente 
     * @return redirect(Route('delivery'))
     */

     public function modifyDelivery(Request $request,$id)
     {

        $deliveries=Delivery::findOrFail($id);

        $request->validate([
            'nomProduit'=>['required','string','max:255'],
            'quantite'=>['required','int'],
          
            'numeroClient'=>['required','int'],
            'nomClient'=>['required','string','max:255'],
            'adresseClient'=>['required','string','max:255'],
            'etat'=>['required']
            
        ]);

        $deliveries->update([
            'user_id'=>$request->user_id,
            'nomProduit'=>$request->nomProduit,
            'quantite'=>$request->quantite,
            'montant'=>$request->montant,
            'numeroClient'=>$request->numeroClient,
            'nomClient'=>$request->nomClient,
            'adresseClient'=>$request->adresseClient,
            'etat'=>$request->etat
        ]);

        $deliveries->save();

        return redirect(Route('delivery'));
     }

     /**
      * fonction permettant d'afficher
      * @param id de la vente cliquee
      *@return view('delivery',compact('title'),['delivery'=>$delivery])
      */

      public function getDelivery($id){
           $title="delivery";
            $delivery=Delivery::findOrFail($id);
            $deliveries=Delivery::all();
   
            return view('delivery',compact('title'),['delivery'=>$delivery,'deliveries'=>$deliveries]);
      }

}
