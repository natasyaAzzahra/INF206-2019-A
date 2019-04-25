<!doctype html>
<html lang="en">

<head>
    <title>Nelayan Belajar</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Material Kit CSS -->
    <link href="assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <style>
        .place {
            color: white;
        }

        #tombol {
            margin-left: 10px;
            border-radius: 100%;
            height: 40px;
            width: 40px;
        }
    </style>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-transparent bg-dark navbar-color-on-scroll fixed-top navbar-expand-lg"
        color-on-scroll="100">
        <div class=" container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="#">Nelayan Belajar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Wawasan</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Peraturan UU</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Forum</a>
                    </li>
                </ul>

                <form class="form-inline ml-auto nav-item navbar-nav">
                    <div class="form-group no-border pr-4">
                        <input type="text" class="form-control place" placeholder="Search" style="color: grey;">
                    </div>
                    <!-- <button type="submit" class="btn bg-transparent btn-just-icon btn-round" style="color: grey;">
                        <i class="material-icons">search</i>
                    </button> -->
                </form>

                <div class="btn-group nav-item navbar-nav">
                    <button class="btn bg-transparent btn-round" style="border:thick; color: grey;">Sign Up</button>
                </div>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- textarea -->
    <div class="page-header header-filter" data-parallax="true"
        style="background-image: url('https://i.imgur.com/b8LbQU3.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand text-center">
                        <h1>Nelayan Belajar</h1>
                        <h3 class="title text-center">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit..."</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of textarea -->

    <!-- Content -->
    <div class="main main-raised">
        <div class="container menu">
            <h2 class="fitur pt-5 text-center"><span>List Fitur Nelayan Belajar</span></h2>
            <div class="row align-items-center pb-2 pt-2">
                <div class="col-lg-5 offset-1">
                    <h3 class="text-dark font-weight-light">Wawasan</h3>
                    <p class="text-dark mt-4 text-justify">Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum
                    </p>
                    <a href="#" class="btn btn-dark mt-4">Read More</a>
                </div>
                <div class="col-lg-5">
                    <div class="section text-center">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="../../../assets/img/bg2.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../../../assets/img/bg3.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../../../assets/img/bg.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center pb-4 pt-2">
                <div class="col-lg-5 offset-1">
                    <div class="section text-center">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="../../../assets/img/bg2.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../../../assets/img/bg3.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../../../assets/img/bg.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ">
                    <h3 class="text-dark font-weight-light">Peraturan UU</h3>
                    <p class="text-dark mt-4 text-justify">Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived
                        not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum
                    </p>
                    <a href="#" class="btn btn-dark mt-4">Read More</a>
                </div>
            </div>

            <div class="row align-items-center pb-5 pt-1">
                <div class="col-lg-5 offset-1">
                    <h3 class="text-dark font-weight-light">Forum</h3>
                    <p class="text-dark mt-4 text-justify">Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum
                    </p>
                    <a href="#" class="btn btn-dark mt-4">Read More</a>
                </div>
                <div class="col-lg-5">
                    <div class="section text-center">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="../../../assets/img/bg2.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../../../assets/img/bg3.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../../../assets/img/bg.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of Content -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="title">Nelayan Belajar</h1>
                </div>
                <!-- <div class="col-md-3 pt-5">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Wawasan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Peraturan UU
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Forum
                            </a>
                        </li>
                    </ul>
                </div> -->
                <div class="col-md-4 pt-5 pl-5">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                License
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="title">Follow us:</h3>
                    <div class="btn-wrapper profile">
                        <a target="_blank" href="#" class="btn btn-icon btn-neutral btn-round btn-simple"
                            data-toggle="tooltip" data-original-title="Follow us">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a target="_blank" href="#" class="btn btn-icon btn-neutral btn-round btn-simple"
                            data-toggle="tooltip" data-original-title="Like us">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a target="_blank" href="#" class="btn btn-icon btn-neutral  btn-round btn-simple"
                            data-toggle="tooltip" data-original-title="Follow us">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin  -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
</body>

</html>