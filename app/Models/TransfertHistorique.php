<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransfertHistorique extends Model
{
    use HasFactory;


    protected $fillable = [
        'montant',
        'reference',
        'user_id',
        'montant' ,
        'sender_id',
        'recevier_id'
    ];

    public function owner() {
        return $this->belongsTo(Client::class, 'sender_id');
    }

    public function recevied() {
        return $this->belongsTo(Client::class, 'recevier_id');
    }

}

