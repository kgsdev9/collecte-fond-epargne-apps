<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable =  [
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse',
        'photo'
    ];

    public function comptes() {
        return $this->hasMany(Compte::class);
    }

        /**
     * rechercher les clients dans la table
     */
    public function scopeSearchClient($query, $string)
    {
           return $query->where('nom', 'like','%'.$string.'%')
                        ->orWhere('prenom', 'like', '%'.$string.'%')
                        ->orWhere('email', 'like', '%'.$string.'%');
    }


      /**
     * ordonner par date ce creation
     */
    public function scopeOrderingLatest($query) {
        return $query->orderByDesc('created_at');
    }



}
