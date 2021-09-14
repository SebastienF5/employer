<?php

namespace App\Models;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable=
    [
         'user_id',
         'nomProduit',
         'quantite',
         'montant',
         'numeroClient',
         'nomClient',
         'adresseClient',
         'etat'

    ];
  
    public function delivery(){
        return $this->belongsTo(User::class);
    }
}
