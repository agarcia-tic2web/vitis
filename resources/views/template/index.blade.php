<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Vitis</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('img/brand/VITIS.png') }}" class="img-fluid w-50 h-50" alt="Logo de la página"></a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('/login')}}">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-4 mt-5">Parcelas</h2>
            <!-- Icon Divider-->
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">

                @foreach($parcelas as $parcela)
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{$parcela['id']}}">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <h3>{{$parcela['nombre']}}</h3>
                        <img class="img-fluid" src="{{asset('storage').'/'.$parcela['imagen']}}" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Modal 1-->
                <div class="portfolio-modal modal fade" id="portfolioModal{{$parcela['id']}}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{$parcela['nombre']}}</h2>
                                            <!-- Icon Divider-->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>

                                            </div>
                                            <!-- Portfolio Modal - Image-->
                                            <img class="img-fluid rounded mb-5" src="{{asset('storage').'/'.$parcela['imagen']}}" alt="..." />
                                            <!-- Portfolio Modal - Text-->
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Datos</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Nombre:</b> {{$parcela['nombre']}}</td>
                                                        <td><b>Cultivo:</b> {{$parcela['cultivo']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Cepas:</b> {{ $parcela['num_uni_total']-$parcela['num_uni_falta']}}</td>
                                                        <td><b>Faltas:</b> {{$parcela['num_uni_falta']}}</td>
                                                    </tr>
                                                    <tr>
                                                    <td><b>Parcela:</b> {{$parcela['parcela']}}</td>
                                                    <td><b>Poligono:</b> {{$parcela['poligono']}}</td>
                                                    </tr>
                                                    <tr>
                                                    <td><b>Superficie (ha):</b> {{$parcela['superficie_total']}}</td>
                                                    <td><a class="btn btn-success" href="{{$parcela['url_sigpac']}}" target="_blank">Ver Sigpac</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-primary" data-bs-dismiss="modal">
                                                <i class="fas fa-xmark fa-fw"></i>
                                                Volver
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>



    <!-- Copyright Section-->
    <!-- <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Vitis 2023</small></div>
        </div> -->
    <!-- Portfolio Modals-->


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>