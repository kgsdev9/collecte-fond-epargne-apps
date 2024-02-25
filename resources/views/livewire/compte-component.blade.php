<div>
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 mb-2">
                <!-- Page header -->
                <div class="d-lg-flex align-items-center justify-content-between">
                    <div class="mb-2 mb-lg-0">
                        <h1 class="mb-0 h2 fw-bold">Gestion des comptes </h1>
                    </div>
                    <!-- avatar group -->
                    <div class="d-flex align-items-center">

                        <a href="#" class="btn btn-icon btn-white border border-2 rounded-circle btn-dashed ms-2">+</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- search  -->
            <div class="col-xxl-2 col-lg-3 col-md-12 col-12 mb-4">
                <form>
                    <input type="search" wire:model.live="search" class="form-control" placeholder="Rechercher..">
                </form>
            </div>
        </div>
        <div class="row">
            @foreach ($allComptes as $compte)
            <div class="col-xl-3 col-lg-6 col-12">
                <!-- card  -->
                <div class="card mb-4">
                    <!-- card body  -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-lg">

                                <img src="#" alt="" class="rounded-circle">
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0"><a href="#" class="text-inherit">RIB {{$compte->numero_compte}}</a></h4>
                                <p class="mb-0"> {{ $compte->client->nom }} {{ $compte->client->prenom }}</p>
                                <p>Solde {{ $compte->solde }} FCFA  </p>
                            </div>
                        </div>
                        <div class="mt-4 lh-1 d-flex align-items-center">

                              <button type="button" wire:click="displayAcompte({{$compte}})"  class="btn btn-outline-secondary"  >
                                <i class="fe fe-list"></i> Gerer le compte
                              </button>


                            <span class="dropdown">
                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="DropdownOne" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-horizontal fs-4"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="DropdownOne">
                                    <span class="dropdown-header">Action</span>

                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                        Supprimer
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                        Editer
                                    </a>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <div wire:ignore.self   class="modal fade" id="exampleModal" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="modal-title">Gestion du comptes </h4>
                        <h5><span>RIB : {{$compte?->numero_compte}}  </span> {{$compte?->solde}}  Solde</h5>
                    </div>
                    </button>
                </div>
                    <div class="modal-body ">
                        <div class="row">
                            <div class="payment-heading">
                                <h5>Selectionner une action</h5>
                            </div>
                            <div class="input-block mb-3 paynow-tab">
                                <ul class="nav nav-pills d-flex row" id="pills-tab" role="tablist">
                                    <li class="nav-item col-sm-4" role="presentation">
                                      <button class="nav-link cash active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Créditer<i class="fe fe-dollar-sign"></i></button>
                                    </li>
                                    <li class="nav-item col-sm-4" role="presentation">
                                      <button class="nav-link cheque" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">Retirer<i class="fe fe-file-text"></i></button>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-content pt-0" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="input-block mb-3">
                                        <label>Entrer le montant de crédition  <span class="text-danger"> *</span></label>
                                        <input type="number" wire:model="montant" class="form-control" placeholder="123333">
                                    </div>
                                    <div class="input-block mb-3">
                                         <button type="button" class="btn btn-dark" wire:click="addAcompte()">Ajouter  <span>{{$montant}}</span></button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="input-block mb-3">
                                        <label>Entrer le montant de debit  <span class="text-danger"> *</span></label>
                                        <input type="number" wire:model="remove" class="form-control" placeholder="-120000">
                                    </div>
                                    <div class="input-block mb-3">
                                        <button type="button" class="btn btn-dark" wire:click="retrancheAcompte()">Retirer </button>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Cancel</button>
                      
                    </div>

            </div>
        </div>
      </div>
</div>


@push('scripts')
<script>
        window.addEventListener('openModal', event => {
            $('#exampleModal').modal('show');
        });
</script>
@endpush

