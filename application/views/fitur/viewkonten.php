<body class="profile-page">
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('https://i.imgur.com/b8LbQU3.jpg');"></div>
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">
                                <img src="<?= base_url('assets/img/' . $user['image']); ?>" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="title"><?= $user['namalengkap']; ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description text-center">
                    <p>Kehidupan nelayan juga merupakan kebaikan karena dengan aktivitas ini banyak keluarga bisa makan ikan dan aktivitas yang menantang melawan laut dan menjadi alasan saya untuk berbagi pengetahuan agar semu nelayan ama dan lancar dalam meulaut. </p>
                </div>
                <div class="row">
                    <div class="col-md-4 ml-auto mr-auto">
                        <div class="profile-tabs">
                            <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#konten" role="tab" data-toggle="tab">
                                        <!-- <i class="material-icons">favorite</i> -->
                                        Konten Saya
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#artikel" role="tab" data-toggle="tab">
                                        <!-- <i class="material-icons">add</i> -->
                                        Tambah Konten
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#video" role="tab" data-toggle="tab">
                                        <i class="material-icons">camera</i>
                                        Video Tutorial
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <br><br>
                <section class="category-page area-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="single-category">
                                    <div class="thumb">
                                        <img class="img-fluid" src="../assets/img/gambar1.jpg" alt="">
                                    </div>
                                    <div class="short_details">
                                        <div class="meta-top d-flex">
                                            <a href="#">Artikel </a>/
                                            <a href="#"> 2 April 2019</a>
                                        </div>
                                        <a class="d-block" href="single-blog.html">
                                            <h4>Cara Mencari Waktu Terbaik untuk Memancing</h4>
                                        </a>
                                        <div class="meta-bottom d-flex">
                                            <a href="#"><i class="ti-comment"></i>5 kometar</a>
                                            <a href="#"><i class="ti-heart"></i> 1 suka</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="single-category">
                                    <div class="thumb">
                                        <img class="img-fluid" src="../assets/img/gambar2.jpg" alt="">
                                    </div>
                                    <div class="short_details">
                                        <div class="meta-top d-flex">
                                            <a href="#">artikel </a>/
                                            <a href="#"> 15 Maret 2019</a>
                                        </div>
                                        <a class="d-block" href="single-blog.html">
                                            <h4>Masih Banyak Nelayan Lokal yang Melanggar...</h4>
                                        </a>
                                        <div class="meta-bottom d-flex">
                                            <a href="#"><i class="ti-comment"></i>8 kometar</a>
                                            <a href="#"><i class="ti-heart"></i> 12 like</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="single-category">
                                    <div class="thumb">
                                        <img class="img-fluid" src="../assets/img/gambar3.jpg" alt="">
                                    </div>
                                    <div class="short_details">
                                        <div class="meta-top d-flex">
                                            <a href="#">Artikel </a>/
                                            <a href="#"> 23 Maret 2019</a>
                                        </div>
                                        <a class="d-block" href="single-blog.html">
                                            <h4>Menghitung BBM Kapal Laut</h4>
                                        </a>
                                        <div class="meta-bottom d-flex">
                                            <a href="#"><i class="ti-comment"></i>20 Komentar</a>
                                            <a href="#"><i class="ti-heart"></i>5 Suka</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="single-category">
                                    <div class="thumb">
                                        <img class="img-fluid" src="../assets/img/gambar4.jpg" alt="">
                                    </div>
                                    <div class="short_details">
                                        <div class="meta-top d-flex">
                                            <a href="#">video</a>/
                                            <a href="#"> 31 Januari 2019</a>
                                        </div>
                                        <a class="d-block" href="single-blog.html">
                                            <h4>SOLUSI PAMUNGKAS ATASI MABUK LAUT</h4>
                                        </a>
                                        <div class="meta-bottom d-flex">
                                            <a href="#"><i class="ti-comment"></i>0 Komentar</a>
                                            <a href="#"><i class="ti-heart"></i> 2 Suka</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="single-category">
                                    <div class="thumb">
                                        <img class="img-fluid" src="../assets/img/gambar5.jpg" alt="">
                                    </div>
                                    <div class="short_details">
                                        <div class="meta-top d-flex">
                                            <a href="#">Video </a>/
                                            <a href="#"> 13 Februari 2019</a>
                                        </div>
                                        <a class="d-block" href="single-blog.html">
                                            <h4>Ini yang Wajib Dipatuhi Nelayan Agar Selamat...</h4>
                                        </a>
                                        <div class="meta-bottom d-flex">
                                            <a href="#"><i class="ti-comment"></i>12 komentar</a>
                                            <a href="#"><i class="ti-heart"></i> 20 suka</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="single-category">
                                    <div class="thumb">
                                        <img class="img-fluid" src="../assets/img/gambar6.jpg" alt="">
                                    </div>
                                    <div class="short_details">
                                        <div class="meta-top d-flex">
                                            <a href="#">Video </a>/
                                            <a href="#"> 6 Februari 2019</a>
                                        </div>
                                        <a class="d-block" href="single-blog.html">
                                            <h4>Cara menggunakan jala </h4>
                                        </a>
                                        <div class="meta-bottom d-flex">
                                            <a href="#"><i class="ti-comment"></i>3 komentar</a>
                                            <a href="#"><i class="ti-heart"></i> 0 suka</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="single-category">
                                    <div class="thumb">
                                        <img class="img-fluid" src="../assets/img/gambar7.jpg" alt="">
                                    </div>
                                    <div class="short_details">
                                        <div class="meta-top d-flex">
                                            <a href="#">Artikel </a>/
                                            <a href="#"> 14 Jauari 2019</a>
                                        </div>
                                        <a class="d-block" href="single-blog.html">
                                            <h4>Seperti Ini Bentuk dan Cara Kerja Cantrang yang Membuatnya...</h4>
                                        </a>
                                        <div class="meta-bottom d-flex">
                                            <a href="#"><i class="ti-comment"></i>12 Komentar</a>
                                            <a href="#"><i class="ti-heart"></i> 2 Suka</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="single-category">
                                    <div class="thumb">
                                        <img class="img-fluid" src="../assets/img/gambar8.jpg" alt="">
                                    </div>
                                    <div class="short_details">
                                        <div class="meta-top d-flex">
                                            <a href="#">video</a>/
                                            <a href="#"> 1 Desember 2019</a>
                                        </div>
                                        <a class="d-block" href="single-blog.html">
                                            <h4>sosok hebat perempuan nelayan</h4>
                                        </a>
                                        <div class="meta-bottom d-flex">
                                            <a href="#"><i class="ti-comment"></i>5 komentar</a>
                                            <a href="#"><i class="ti-heart"></i> 23 Suka</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a href="" class="main_btn">Load More <span class="ti-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                </section>
                <br>
                <!--================Category  Area End =================-->


                <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
                <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
            </div>
        </div>
    </div>
</body>