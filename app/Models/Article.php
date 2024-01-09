<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable =  [
        'designation',
        'quantite',
        'prix'
    ];

    public function commandes() {
        return $this->belongsToMany(Commande::class, 'article_commande', 'article_id', 'commande_id')
                     ->withTimestamps();
    }
}
