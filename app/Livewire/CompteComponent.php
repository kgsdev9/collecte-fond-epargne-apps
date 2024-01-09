<?php

namespace App\Livewire;

use App\Models\Compte;
use Livewire\Component;
use App\Models\Transaction;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CompteComponent extends Component
{

    use LivewireAlert;

    public $ajouter  = 0;
    public $search = "";
    public $solde;
    public $remove = 0 ;
    public $compte;

    public function displayAcompte(Compte $compte) {
        $this->compte = $compte;
        $this->dispatch('openModal', []);
    }

    public function addAcompte() {
        $this->solde = $this->compte->solde;
        Transaction::create([
            'reference'=> rand(10000, 34000),
            'montant'=>$this->ajouter,
            'type_transaction'=> "depot",
            'compte_id'=> $this->compte->id,
        ]);
        $this->solde += $this->ajouter;
        $this->compte->update([
            'solde'=> $this->solde
        ]);
        $this->alert('success', 'Transaction ajoutée avec success');
        $this->redirectRoute('annuaire.compte');
    }

    public function   retrancheAcompte() {
        $this->solde = $this->compte->solde;
        if($this->solde>$this->remove) {
        $this->solde -= $this->remove;
        Transaction::create([
            'reference'=> rand(10000, 34000),
            'montant'=>$this->remove,
            'type_transaction'=> "retrait",
            'compte_id'=> $this->compte->id,
        ]);
        $this->compte->update([
            'solde'=> $this->solde
        ]);
        $this->redirectRoute('annuaire.compte');
        } else {
            $this->alert('info', 'Transaction ne peut pas etre superieur au solde du compte impossible');
        }
    }

    public function render()
    {
        return view('livewire.compte-component' ,[
            'allComptes'=> Compte::searchCompte($this->search)->get()
        ]);

    }
}
