<div>
    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-md-flex align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-1 h2 fw-bold">Annuaire utilisateurs</h1>
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.html">Accueil</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Annuaire</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Utilisateurs</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCatgory">Nouvel utilisateur</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card Header -->
                    <div class="card-header border-bottom-0">
                        <div class="row">
                            <div class="col pe-0">

                                    <input type="search"  wire:model.live="search" class="form-control" placeholder="Rechercher">
                            </div>
                            <div class="col-auto">
                                <a href="" class="btn btn-secondary">Export CSV</a>
                                <a href="" class="btn btn-outline-warning">Export PDF</a>
                            </div>
                        </div>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive border-0 overflow-y-hidden">
                        <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox">
                            <thead class="table-light">
                                <tr>

                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                <tr>

                                    <td>
                                        <a href="#" class="text-inherit position-relative">
                                            <h5 class="mb-0 text-primary-hover">
                                                {{$user->name}}
                                            </h5>
                                        </a>
                                    </td>
                                    <td>
                                        <h5 class="mb-0 text-primary-hover">
                                            {{$user->email}}
                                        </h5>
                                    </td>
                                    <td>
                                        <h5 class="mb-0 text-primary-hover">
                                             utilisateur administrateur
                                        </h5>

                                    <td>{{$user->created_at}}</td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-send dropdown-item-icon"></i>
                                                    Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-inbox dropdown-item-icon"></i>
                                                    Moved Draft
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                                    Delete
                                                </a>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


 </div>







