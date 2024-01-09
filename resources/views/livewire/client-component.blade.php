<div>
    <section class="container-fluid p-4">
    <div class="row">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                        <h1 class="mb-1 h2 fw-bold">
                            Liste des clients
                            <span class="fs-5"></span>
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.html">accueil</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">annuaire</a></li>
                                <li class="breadcrumb-item active" aria-current="page">clients</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @if($mode)
        <div class="col-xl-12 col-lg-12 col-12 mb-3">
            <div class="row">
                <div class="col pe-0">
                 <input type="search" wire:model.live="search"  class="form-control" placeholder="Rechercher un client...">
                </div>
                <div class="col-auto">
                    <a href="#" class="btn btn-secondary">Export CSV</a>
                    <a href="#" class="btn btn-warning">PDF CSV</a>
                    <button wire:click="form" class="btn btn-dark"> <i class="fe fe-plus"></i>Client</button>
                </div>
            </div>
        </div>
        @foreach ($allClients as $client)
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('storage/photos/'.$client->photo) }}" class="rounded-circle avatar-xl mb-3" alt="avatar">
                        <h4 class="mb-1">{{$client->nom}} {{$client->prenom}}</h4>
                        <p class="mb-0">
                            <i class="fe fe-map-pin me-1"></i>
                            {{$client->adresse}}
                        </p>
                        <a href="#" class="btn btn-sm btn-outline-secondary mt-3">Mon profil</a>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">
                        <span>Inscription</span>
                        <span class="text-dark"> {{$client->created_at}}</span>
                    </div>
                    <div class="d-flex justify-content-between pt-2 fs-6">
                        <span>Balance</span>
                        <span class="text-dark"> 233323 FCFA</span>
                    </div>
                        <div class="text-center">
                            <a href="#" wire:click="edit({{$client->id}})" class="btn btn-outline-dark"><i class="fe fe-edit"></i></a>
                            <a href="" class="btn btn-outline-danger"> <i class="fe fe-trash"></i></a>
                            </a>
                        </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
       @include('clients.form')
        @endif
    </div>
</div>
</section>
