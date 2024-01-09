<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'reference',
        'user_id',
        'montant' ,
        'nouveau_solde',
        'client_id'
    ];

    
}
