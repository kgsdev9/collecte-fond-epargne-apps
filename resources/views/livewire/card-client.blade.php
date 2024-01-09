<div>
    <div class="row">
        @foreach ($allClients as $client)
        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="text-center">
                        <div class="position-relative">
                            <img src="{{ asset('storage/photos/'.$client->photo) }}" class="rounded-circle avatar-xl mb-3" alt="">
                            <a href="#" class="position-absolute mt-8 ms-n5">
                                <span class="status bg-success"></span>
                            </a>
                        </div>
                        <h4 class="mb-0">{{$client->nom}} {{$client->prenom}}</h4>
                        <p class="mb-0">
                            <i class="fe fe-map-pin me-1 fs-6"></i>
                            {{$client->adresse}}
                        </p>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2 mt-6">
                        <span>Date </span>
                        <span class="text-dark">  {{$client->created_at}}</span>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2">
                        <span>Etat financier</span>
                        <span>17 Aug, 2020</span>
                    </div>
                    <div class="d-flex justify-content-between pt-2">
                        <span>Profil</span>
                        <span class="text-dark"><i class="fe fe-eye"></i></span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="col-lg-12 col-md-12 col-12">
            <!-- Pagination -->
            <nav class="text-center">
                <button class="btn btn-outline-dark">Charger</button>
            </nav>
        </div>
    </div>




</div>



