<div class="col-lg-12 col-md-8 col-12">
    <!-- Card -->
    <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Information sur le client </h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center mb-4 mb-lg-0">
                    @if ($photo)
                    <img src="{{ $photo->temporaryUrl() }}" id="img-uploaded" class="avatar-xl rounded-circle" alt="avatar">
                    @else
                    <img src="{{asset('storage/photos/'.$oldImage) }}" alt=""  class="avatar-xl rounded-circle">
                    @endif
                    <div class="ms-3">
                        <h4 class="mb-0">Pphoto</h4>
                        <p class="mb-0">Télecharger une photo présentable</p>
                    </div>
                </div>
                <div>
                  <input type="file"  wire:model="photo">
                </div>
            </div>
            <div>
                <div class="row gx-3 mt-4">
                    <div class="mb-3 col-12 col-md-6">
                        <label class="form-label" for="fname">Nom du client </label>
                        <input type="text" id="fname" wire:model="nom" class="form-control" placeholder="Kahouo" required="">
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label class="form-label" for="lname">Prénom</label>
                        <input type="text" id="lname" wire:model="prenom" class="form-control" placeholder="Guy Stephane" required="">
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label class="form-label" for="phone">Email</label>
                        <input type="text" id="phone" wire:model="email" class="form-control" placeholder="kgsdev8@gmail.com" required="">
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label class="form-label" for="birth">Télephone</label>
                        <input class="form-control" wire:model="telephone" type="text" placeholder="Birth of Date" >
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label class="form-label" for="birth">Adresse</label>
                        <input class="form-control " wire:model="adresse" type="text" placeholder="Deux plateaux"  >
                    </div>
                    <div class="col-12">
                        @if($clientId)
                        <button class="btn btn-outline-dark" wire:click="update()">Modifier</button>
                        @else
                        <button class="btn btn-outline-dark" wire:click="store">Enregistrer</button>
                        @endif
                        <button wire:click="cancel()" class="btn btn-warning">Retourner</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
