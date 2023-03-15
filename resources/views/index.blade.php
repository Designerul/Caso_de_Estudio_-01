<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Meta tags --}}
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Leer & Leer</title>
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="{{ asset('assets/L&L.png')}}" />
        <!--plugins-->
        <link href= {{ asset('plugins/vectormap/jquery-jvectormap-2.0.2.css') }} rel="stylesheet"/>
        <link href= {{ asset('plugins/simplebar/css/simplebar.css') }} rel="stylesheet" />
        <link href= {{ asset('plugins/metismenu/css/metisMenu.min.css') }}  rel="stylesheet" />
        <!-- loader-->
        <link href= {{ asset('css/pace.min.css') }} rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href= {{ asset('css/bootstrap.min.css') }} rel="stylesheet">
        <link href={{ asset('css/bootstrap-extended.css') }} rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link href= {{ asset('css/app.css') }} rel="stylesheet">
        <link href= {{ asset('css/icons.css') }} rel="stylesheet">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body style="background-color: #ebe8e8">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ebe8e8">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/"><img src="{{ asset('assets/L&L.png')}}" alt="" style="width: 40px"><b> Leer & Leer</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Inicio</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ingresar</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                                        <li><hr class="dropdown-divider" /></li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit(); " role="button">{{ __('Log Out') }}
                                                </a>
                                            </form>
                                        </li>
                                    @else
                                        <li><a href="{{ route('login') }}" class="dropdown-item">Ingresar</a></li>

                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}" class="dropdown-item">Registrarse</a></li>
                                        @endif
                                    @endif
                                @endif
                            </ul>
                        </li>
                    </ul>

                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5" style="background-color:#615c5c">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center">
                    <h1 class="display-4 fw-bolder" style="color: white">Leer & Leer</h1>
                    <p class="lead fw-bolder mb-0" style="color: white">Te mereces un libro hermoso, como tú</p>
                </div>
            </div>
        </header>
        

        <!-- Section-->
        <div class="page-content">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="align-items-left">
    
                                {{-- Inicio de Filtros de libros --}}
                                <form>
                                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                                        {{-- Filtro Autor --}}
                                        <div class="col-3">
                                            <label for="brandFilter">Autor:</label>
                                            <select class="form-control" id="" multiple>
                                                    
                                            </select>
                                        </div>
                                        {{-- Filtro Categoria --}}
                                        <div class="col">
                                            <label for="groupFilter">Categoria:</label>
                                            <select class="form-control" id="" multiple>
                                                    
                                            </select>
                                        </div>
                                        {{-- Filtro de Titulo del libro --}}
                                        <div class="col">
                                            <label for="concessionaireFilter">Titulo:</label>
                                            <input class="form-control" type="text" name="concessionaireFilter" id="" style="text-transform: uppercase;">
                                        </div>
                                        {{-- Botón Filtrar --}}
                                        <div class="col">
                                            <br>
                                            <button type="button" class="btn btn-primary" >
                                                <i class="bx bx-search me-0"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                {{-- Fin de Filtros de libros --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid" id="concessionaires_data">

                {{-- Recuperacion de libro --}}
                <div class="col">
					<div class="card">

                        {{-- Recuperacion de portada del libro --}}
                        <div class="text-center">
                            <img src="imagenes/9788498/978849838845.jpg" class="card-img-top" alt="..." style="max-height: 400pX; max-width: 300px;">
                        </div>
							
						<div class="card-body">
							<h5 class="card-title cursor-pointer">El niño en la cima de la montaña</h5>
                            <h6 class="card-subtitle">JOHN BOYNE</h6>
							<div class="clearfix">
								<p class="mb-0 float-start"><strong>134</strong> Vendidos</p>
								<p class="mb-0 float-end fw-bold"><span>$199.00</span></p>
							</div>
						</div>

					</div>
				</div>
            </div>
                
            <div class="text-center" id="charging">
                <div class="spinner-border text-primary" role="status" style="width: 4rem; height: 4rem;">
        
                </div>
            </div>
        </div>

        <!-- Footer-->
        <footer class="py-5" style="background-color:#615c5c">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Leer & Leer 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js')}}"></script>
    </body>
</html>