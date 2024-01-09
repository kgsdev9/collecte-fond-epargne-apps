
<div>


<div class="content container-fluid mt-4">
    <div class="card mb-0">
        <div class="card-body">
            <div class="content-page-header">
                <h5>Formulaire de transfert  </h5>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group-item border-0 mb-0" data-select2-id="22">
                        <div class="row align-item-center">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="input-block mb-3">
                                    <label class="form-label" for="firstName">Montant de la transaction</label>
                                    <input type="number" class="form-control" placeholder="130000" wire:model.live="montant">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-sm-12">
                                <div class="input-block mb-3">
                                    <label class="form-label">Selectionner le Rib de l'envoyeur</label>
                                            <select class="form-control" wire:change="selectSender($event.target.value)">
                                                <option value="">Selectionner</option>
                                                    @foreach ($allcomptes as $compte)
                                                    <option value="{{$compte->id}}">{{$compte->numero_compte}} {{$compte->client->nom}} {{$compte->client->prenom}} </option>
                                                    @endforeach
                                           </select>
                                </div>
                            </div>



                            <div class="col-lg-8 col-md-6 col-sm-12">
                                    <div class="input-block mb-3">
                                        <label class="form-label">Référence du transfert</label>
                                        <input type="text" class="form-control" wire:model.live="reference">
                                    </div>
                            </div>

                            <div class="col-lg-4 col-md-2 col-sm-12">
                                    <div class="input-block mb-3 mt-4">
                                        <button type="button" class="btn btn-outline-warning form-plus-btn" wire:click="generateReference()"><i class="fe fe-plus-circle"></i></button>
                                    </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-block mb-3">
                                    <label class="form-label" >Selectionner le receveur</label>
                                    <select class="form-control" wire:change="selectRecevoir($event.target.value)">
                                        <option value="">Selectionner</option>
                                            @foreach ($allcomptes as $compte)
                                            <option value="{{$compte->id}}">{{$compte->numero_compte}} {{$compte->client->nom}} {{$compte->client->prenom}} </option>
                                            @endforeach
                                   </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button class="btn btn-outline-success" wire:click="transfert()">Valider le transfert</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 mt-4 mt-lg-0">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="mb-0">Information sur le transfert </h4>
                            </div>
                            @if($sender)
                            <div class="d-flex align-items-center">

                                <div class="ms-3">
                                    <!-- title -->
                                    <span>Information sur l'envoyeur</span>
                                    <h4 class="mb-0">Compte : {{$sender->solde - (int)$montant ?? '' }} FCFA   RIB : {{$sender->numero_compte ?? '' }}  </h4>

                                    <div>
                                        <span>Titilaire  {{$sender->client->nom ?? '' }}  {{$sender->client->prenom ?? '' }} </span>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <!-- card body -->

                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            @if($recevoir)
                            <div class="d-flex align-items-center">
                                <!-- img -->

                                <div class="ms-3">
                                    <!-- title -->
                                    <span>Information sur le recevoir </span>
                                    <h4 class="mb-0">Compte : {{$recevoir->solde + (int)$montant ?? '' }} FCFA   RIB : {{$recevoir->numero_compte ?? '' }}  </h4>
                                    <div>
                                        <span>Titilaire  {{$recevoir->client->nom ?? '' }}  {{$recevoir->client->prenom ?? '' }} </span>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <!-- card body -->
                        <div class="card-body border-top">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="mb-0">Montant de la transaction {{$montant}} FCFA </h4>
                                 <h4 class="mb-0">Réference {{$reference}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-6">
                <!-- Card header -->
                <div class="card-header">
                    <h4 class="mb-0">Liste des récents transferts </h4>
                </div>
                <!-- Table -->
                <div class="table-responsive">
                    <table class="table mb-0 text-nowrap table-centered table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Réference</th>
                                <th>Montant</th>
                                <th>Envoyeur</th>
                                <th>Receveur</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <!-- tbody -->
                        <tbody>
                            @foreach ($historiqueTransaction as $transfert)
                            <tr>
                                <td>{{$transfert->reference}}</td>
                                <td>{{$transfert->montant}} FCFA </td>
                                <td>{{$transfert->owner?->nom}} {{$transfert->owner?->prenom}}</td>
                                <td>{{$transfert->recevied?->nom}} {{$transfert->recevied?->prenom}}</td>
                                <td>
                                    <span class="badge bg-success-soft">Effectué</span>
                                </td>
                                <td>{{$transfert->created_at}}</td>
                                <td><a href="#">Consulter</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



</div>
