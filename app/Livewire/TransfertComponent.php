<?php

namespace App\Livewire;

use App\Models\Client;
use App\Models\Compte;
use Livewire\Component;
use App\Models\TransfertHistorique;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TransfertComponent extends Component
{

    use LivewireAlert;
    public $search = "";

    public function transfert() {
        $retranche = rand(20000, 50000) ;
       $compte1 =  Compte::where('numero_compte', 12333)->first();
      $nouveauSOlde =  $compte1->solde -= $retranche;

       $compte1->update([
        'solde'=> $nouveauSOlde
       ]);

       $compte2 =  Compte::where('numero_compte', "624SGBCI")->first();
       $nouveauSoldeTransferer = $compte2->solde += $retranche;

       //sauvergarder les transfert entre les utilisateurs de notre systeme
       TransfertHistorique::create([
        'reference' => rand(100, 1300). "TRANSFERT",
        'user_id' => Auth::user()->id,
        'montant' => $retranche,
        'sender_id'=> $compte1->id,
        'recevier_id' => $compte2->id
       ]);



       $compte2->update([
        'solde' => $nouveauSoldeTransferer
       ]);

       $this->alert('success', 'Transfert effectué avec success');
    }


    public function render()
    {
        return view('livewire.transfert-component', [
            'posts'=> Compte::all()
        ]);
    }
}
