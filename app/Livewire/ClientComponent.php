<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ClientComponent extends Component
{

    use WithFileUploads;

    public $search , $nom, $clientId, $prenom, $adresse, $email, $telephone, $photo, $oldImage, $mode = true ;

    protected $rules = [
        'nom' => 'required',
        'prenom' => 'required' ,
        'email'=> 'required',
        'photo'=>  'nullable',
        'adresse'=> 'required',
        'telephone'=> 'required',
        ];


    public function form() {
        return $this->mode = false;
    }

    public function resetInput() {
        $this->nom = "";
        $this->prenom = "";
        $this->email = "";
        $this->adresse = "";
        $this->telephone = "";
        $this->photo = "";
    }

    public function store() {
        $this->validate();
        $name = md5($this->photo . microtime()).'.'.$this->photo->extension();
        $this->photo->storeAs('photos', $name);
        Client::create([
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'adresse' => $this->adresse,
            'telephone' => $this->telephone,
            'photo' => $name,
        ]);
        $this->resetInput();
        $this->mode = true;
    }

    public function edit(string $id) {
        try {
            $client = Client::findOrFail($id);
            if( !$client) {
                session()->flash('error','Aucun client trouvée');
            } else {
                $this->nom = $client->nom;
                $this->prenom = $client->prenom;
                $this->email = $client->email;
                $this->telephone = $client->telephone;
                $this->adresse = $client->adresse;
                $this->oldImage = $client->photo;
                $this->clientId = $client->id;
            }
            $this->mode = false;
        } catch (\Exception $ex) {
            session()->flash('error','Quelque chose va pas bine oups!!');
        }

    }

    public function update() {
        $this->validate();
        $client = Client::findOrFail($this->clientId);
            $photo = $client->photo;
            if($this->photo)
            {
                Storage::delete($client->photo);
                $photo = md5($this->photo . microtime()).'.'.$this->photo->extension();
                $this->photo->storeAs('photos', $photo);
            }else{
                $photo = $client->photo;
            }
            $client->update([
                'nom' => $this->nom,
                'prenom' => $this->prenom,
                'email' => $this->email,
                'adresse' => $this->adresse,
                'telephone' => $this->telephone,
                'photo' => $photo,
            ]);
            $this->reset();
            $this->mode = true;
    }

    public function cancel() {
        return $this->mode =true;
        $this->reset();
    }


    public function destroy(string $id) {
        
    }

    public function render()
    {
        return view('livewire.client-component',[
            'allClients' => Client::searchClient($this->search)->orderingLatest()->paginate(30)
        ]);
    }
}
