<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTransaction extends Model
{
    use HasFactory;

    protected $fillabel = [
        'nom'
    ];

    protected int $solde = 0 ;

    public function setAcompte(int $montant) {
        if($this->solde >$montant ) {

        }
       return  $this->solde  += $montant;
    }

    public function  getAcompte() {
        return $this->solde  ;
    }

    public function  setdebitAcompte(int $montant) {
        if($this->solde >$montant ) {
            return  $this->solde  -= $montant;
        } else {
            throw new Exception('cette operation est impossible car le montant est superieur au solde disponible');
        }



        return   $this->getAcompte() - $montant;
    }



}
