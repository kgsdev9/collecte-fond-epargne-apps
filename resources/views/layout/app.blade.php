
<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{asset('assets/libs/flatpickr/dist/flatpickr.min.css')}}">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="#" />
<meta name="keywords" content="#" />
<meta name="author" content="#" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="" />
<!-- Libs CSS -->
<link rel="stylesheet" href="{{asset('assets/fonts/feather/feather.css')}}">
<link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}">
<!-- Theme CSS -->
<link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
 <link rel="canonical" href="#">
 @livewireStyles
 <title>Bienvenue</title>
    </head>

    <body>
        <!-- Wrapper -->
        <div id="db-wrapper">
            <!-- navbar vertical -->
            <!-- Sidebar -->
<nav class="navbar-vertical navbar">
    <div class="vh-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="#">
            <h2>KGS INFO</h2>
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a
                    class="nav-link "
                    href="#"
                   >
                    <i class="nav-icon fe fe-home me-2" ></i>
                    Tableau de Bord
                </a>

            </li>
            <li class="nav-item">
                <a
                    class="nav-link  collapsed "
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#navCourses"
                    aria-expanded="false"
                    aria-controls="navCourses">
                    <i class="nav-icon fe fe-user me-2"></i>
                    Utilisateurs
                </a>
                <div id="navCourses" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="#">Gestion role</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('annuaire.users')}}">Gestion Utilisateurs</a>
                        </li>
                    </ul>
                </div>
            </li>


            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link  collapsed " href="{{route('annuaire.clients')}}">
                    <i class="nav-icon fe fe-book-open me-2"></i>
                    Clients
                </a>

            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a
                    class="nav-link  collapsed "
                    href="{{route('annuaire.compte')}}"
                    >
                    <i class="nav-icon fe fe-file me-2"></i>
                    Compte
                </a>

            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a
                    class="nav-link  collapsed "
                    href="{{route('annuaire.transaction')}}"

                    >
                    <i class="nav-icon fe fe-lock me-2"></i>
                    Transaction
                </a>

            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a
                    class="nav-link  collapsed "
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#navecommerce"
                    aria-expanded="false"
                    aria-controls="navecommerce">
                    <i class="nav-icon fe fe-shopping-bag me-2"></i>
                    Services
                </a>

            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a
                    class="nav-link"
                    href="{{route('annuaire.transfert')}}"
                    >
                    <i class="nav-icon fe fe-layout me-2"></i>
                    Transfert
                </a>

            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="nav-divider"></div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">FACTURE DEVIS</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link " href="chat-app.html">
                    <i class="nav-icon fe fe-message-square me-2"></i>
                    Gestion Facture
                </a>
            </li>




            <li class="nav-item">
                <div class="nav-divider"></div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Notifications</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link " href="mail.html">
                    <span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-mail">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </span>
                    <span class="ms-2">Messagérie</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  collapsed " href="#">
                    <i class="nav-icon fe fe-database me-2"></i>
                    Télephones
                </a>

            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <div class="nav-divider"></div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Parametre</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="nav-icon fe fe-clipboard me-2"></i>
                   Rapport
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="nav-icon fe fe-git-pull-request me-2"></i>
                    Documentation

                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="nav-icon fe fe-git-pull-request me-2"></i>
                    Activités utilisateurs

                </a>
            </li>
        </ul>
        <!-- Card -->
        <div class="card bg-dark-secondary shadow-none text-center mx-4 my-8">
            <div class="card-body py-6">

                <div class="mt-4">
                    <h5 class="text-white">KGS INFORMATIQUE</h5>
                    <p class="text-white-50 fs-6">Contactez nous en cas de probleme </p>
                    <a href="#" class="btn btn-white btn-sm mt-2">Démerraer une discution</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<main id="page-content">
	<div class="header">
		<nav class="navbar-default navbar navbar-expand-lg">
			<a id="nav-toggle" href="#"><i class="fe fe-menu"></i></a>
			<div class="ms-lg-3 d-none d-md-none d-lg-block">

			</div>
			<!--Navbar nav -->
			<div class="ms-auto d-flex">
				<ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">

					<li class="dropdown ms-2">
						<a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
							<div class="avatar avatar-md avatar-indicators avatar-online">
								<img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
							<div class="dropdown-item">
								<div class="d-flex">
									<div class="avatar avatar-md avatar-indicators avatar-online">
										<img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
									</div>
									<div class="ms-3 lh-1">
										<h5 class="mb-1">
											Annette Black
										</h5>
										<p class="mb-0">
											annette@geeksui.com
										</p>
									</div>
								</div>
							</div>
							<div class="dropdown-divider"></div>
							<ul class="list-unstyled">
								<li class="dropdown-submenu dropstart-lg">
									<a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#"><i class="fe fe-circle me-2"></i>Status</a>
									<ul class="dropdown-menu">
										<li>
											<a class="dropdown-item" href="#"><span class="badge-dot bg-success me-2"></span>Online</a>
										</li>
										<li>
											<a class="dropdown-item" href="#"><span class="badge-dot bg-secondary me-2"></span>Offline</a>
										</li>
										<li>
											<a class="dropdown-item" href="#"><span class="badge-dot bg-warning me-2"></span>Away</a>
										</li>
										<li>
											<a class="dropdown-item" href="#"><span class="badge-dot bg-danger me-2"></span>Busy</a>
										</li>
									</ul>
								</li>
								<li>
									<a class="dropdown-item" href="../profile-edit.html"><i class="fe fe-user me-2"></i>Profile</a>
								</li>
								<li>
									<a class="dropdown-item" href="../student-subscriptions.html"><i class="fe fe-star me-2"></i>Subscription</a>
								</li>
								<li>
									<a class="dropdown-item" href="#"><i class="fe fe-settings me-2"></i>Settings</a>
								</li>
							</ul>
							<div class="dropdown-divider"></div>
							<ul class="list-unstyled">
								<li>
									<a class="dropdown-item" href="../../index.html"><i class="fe fe-power me-2"></i>Sign Out</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
    @yield('content')
</main>
</div>


<footer class="pt-5 pb-3 bg-white text-center">
    <div class="container">
        <p>Une conception de Kgs informatique</p>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="{{asset('assets/libs/@popperjs/core/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
       <script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
        <!-- Theme JS -->

        <script src="{{asset('assets/js/theme.min.js')}}"></script>
       <script src="{{asset('assets/libs/flatpickr/dist/flatpickr.min.js')}}"> </script>
       <script src="{{asset('assets/js/vendors/flatpickr.js')}}"></script>
       <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
           <x-livewire-alert::scripts />
           @livewireScripts
           @stack('scripts')
        </footer>
    </body>
    </html>
