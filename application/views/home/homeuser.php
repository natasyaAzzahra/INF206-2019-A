<!doctype html>
<html lang="en">

<head>
    <title><?= $data ?></title>
    <!--     Fonts and icons     -->
    <!-- <link rel="icon" href=""> -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Material Kit CSS -->
    <link href="<?= base_url(); ?>assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-transparent bg-dark navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100">
        <div class=" container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?= base_url(); ?>Home/homeuser">Nelayan Belajar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
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
                </form>

                <div class="btn-group nav-item navbar-nav">
                    <button type="button" class="btn bg-transparent btn-just-icon btn-round" style="border:thick; color: grey;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">account_circle</i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Edit Profil</a>
                        <a class="dropdown-item" href="#">Konten Saya</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>Login/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- textarea -->
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('https://i.imgur.com/b8LbQU3.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand text-center">
                        <h1><?= $judul ?></h1>
                        <h3 class="title text-center"><?= $isi ?></h3>
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
                    <p class="text-dark mt-4 text-justify">Wawasan sangat penting dalam setiap aspek kehidupan begitu
                        juga dengan kehidupan nelayan. Dalam fitur wawasan ini akan disuguhkan berbagai informasi
                        menarik
                        seputar dengan kehidupan para nelayan sehingga nelayan yang kondisinya jauh dari kota pun dapat
                        dengan mudah mengetahui berbagai informasi penting mulai dari informasi, tutorial, dan juga
                        bimbingan
                        dalam bidang kelautan dan perikanan.
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
                                    <img class="d-block w-100" src="https://i.imgur.com/Y5dldhL.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://i.imgur.com/JB4qFid.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://i.imgur.com/NVGiKvL.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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
                                    <img class="d-block w-100" src="https://i.imgur.com/42P6eOM.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://i.imgur.com/qFD5fQx.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://i.imgur.com/1nzoNSy.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ">
                    <h3 class="text-dark font-weight-light">Peraturan UU</h3>
                    <p class="text-dark mt-4 text-justify"> Peraturan UU sangat penting kaitannya bagi kehidupan
                        nelayan, setiap nelayan harusnya mengetahui hal penting untuk diketahui mengenai mekanisme
                        melaut. fitur ini menyajikan berbagai peraturan undang-undang yang penting diketahui oleh para
                        nelayan seperti cara menangkap ikan yang benar guna menjaga kelestarian dan tidak melakukan
                        hal-hal yang bisa merusak kelestarian laut serta banyak lagi peraturan penting lainnya yang
                        harus diketahui sebagai seorang nelayan. fitur ini disajikan secara sederhana dan mudah dipahami
                        bagi pihak yang menggunakannya.
                    </p>
                    <a href="#" class="btn btn-dark mt-4">Read More</a>
                </div>
            </div>

            <div class="row align-items-center pb-5 pt-1">
                <div class="col-lg-5 offset-1">
                    <h3 class="text-dark font-weight-light">Forum</h3>
                    <p class="text-dark mt-4 text-justify">Forum adalah sebuah sarana komunikasi bagi para penggunanya.
                        Sebuah forum diskusi bisa menjadi salah satu cara yang dapat memperkaya pengalaman para nelayan.
                        Forum sendiri dibuat agar para penggunanya menjadi lebih nyaman dalam berkomunikasi dengan
                        nelayan lain.
                        Forum merupakan wadah yang dapat digunakan oleh para nelayan untuk dapat berbagi pengalaman
                        dengan nelayan lain
                        dengan cara bertanya sekaligus menjawab pertanyaan yang masuk kedalam forum tersebut.
                        Forum sangatlah penting dikarenakan konsep dan mekanismenya sendiri lebih mengutamakan adanya
                        proses diskusi antara
                        anggota forum nelayan. Sehingga dengan adanya forum akan membuat metode diskusi menjadi lebih
                        baik.
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
                                    <img class="d-block w-100" src="https://i.imgur.com/EnegqAy.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://i.imgur.com/rM71ifQ.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://i.imgur.com/YQwU51u.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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