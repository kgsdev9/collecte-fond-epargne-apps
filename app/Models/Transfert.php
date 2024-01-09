<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfert extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'montant',
        'reference',
        'user_id',
        'montant' ,
        'nouveau_solde',
        'client_id'
    ];

}
