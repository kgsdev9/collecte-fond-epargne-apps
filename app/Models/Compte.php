<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_compte',
        'solde',
        'client_id'
    ];

    public function client()  {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function scopeSearchCompte($query, $string)
    {
           return $query->where('numero_compte', 'like','%'.$string.'%')
                        ->orWhere('solde', 'like', '%'.$string.'%');
    }

    

}
