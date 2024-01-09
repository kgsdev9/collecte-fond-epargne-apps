<div>
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 mb-2">
                <!-- Page header -->
                <div class="d-lg-flex align-items-center justify-content-between">
                    <div class="mb-2 mb-lg-0">
                        <h1 class="mb-0 h2 fw-bold">Liste des transactions</h1>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-icon btn-white border border-2 rounded-circle btn-dashed ms-2">+</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row  -->
        <div class="col-md-12 mb-4 mt-4">
            <!-- card -->
            <div class="card">
                <!-- card body -->

                <div class="card-header">
                    <h4 class="mb-0">Historique  des transactions</h4>
                </div>
                <!-- table -->
                <div class="table-responsive overflow-y-hidden">
                    <table class="table mb-0 text-nowrap table-hover table-centered">
                        <thead class="table-light">
                            <tr>
                                <th>Compte</th>
                                <th>Titulaire</th>
                                <th>Montant</th>
                                <th>Reference</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allTransactions as $transaction)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm">
                                            <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle">
                                        </div>
                                        <div class="ms-2">
                                            <h5 class="mb-0">{{$transaction->compte?->client->nom}} {{$transaction->compte?->client->prenom}}</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$transaction->type_transaction}} sur le compte {{$transaction->compte?->numero_compte}}</td>
                                <td>{{$transaction->montant}} FCFA </td>
                                <td>
                                    <div class="ms-2">
                                        <h5 class="mb-0">{{$transaction->reference}}</h5>
                                    </div>
                                </td>

                                <td>
                                    <div class="ms-2">
                                       <a href="" class="text-dark"><i class="fe fe-eye"> </i></a>
                                       <a href="" class="text-dark"><i class="fe fe-download"> </i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
</div>
