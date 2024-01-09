<?php

namespace App\Livewire;

use App\Models\Compte;
use Livewire\Component;
use App\Models\TransfertHistorique;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class TransfertComponent extends Component
{

    use LivewireAlert;
    public $search = "";
    public $montant ;
    public $reference;
    public $sender;
    public $recevoir;

    protected $rules = [
        'montant'=> 'required',
        'sender' => 'required',
        'recevoir' => 'required'
    ];


    public function selectSender(Compte $sender) {
       $this->sender = $sender;
    }

    public function selectRecevoir(Compte $recevoir) {
        $this->recevoir = $recevoir;
    }


    public function transfert() {
        $this->validate();
      $this->sender->update([
        'solde'=> $this->sender->solde -= $this->montant
       ]);

       if($this->sender->solde >  $this->montant &&  $this->sender->id != $this->recevoir->id )  {
        //sauvergarder les transfert entre les utilisateurs de notre systeme
        TransfertHistorique::create([
            'reference' => rand(100, 1300). "TRANSFERT",
            'user_id' => Auth::user()->id,
            'montant' => $this->montant,
            'sender_id'=> $this->sender->client->id,
            'recevier_id' => $this->recevoir->client->id
           ]);

           $this->recevoir->update([
            'solde' => $this->recevoir->solde += $this->montant
           ]);

           $this->alert('success', 'Transfert effectué avec success');
           $this->reset();
       } else {
        $this->alert('success', 'Oufs quelque chose ');
       }

    }


    public function  generateReference() {
       $reference =  rand(1000, 24000). "transs";
        $this->reference = $reference;

    }

    public function render()
    {
        return view('livewire.transfert-component', [
            'allcomptes'=> Compte::all(),
            'historiqueTransaction'=> TransfertHistorique::orderByDesc('created_at')->get()
        ]);
    }
}
