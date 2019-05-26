<body class="profile-page">
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('https://i.imgur.com/8SHVwNO.jpg')"></div>
    <div class="main main-raised">
        <!-- konten -->
        <div class="container">
            <h2 class="title text-center pt-4"><?= $konten['judul']; ?></h2>
            <div class="row justify-content-center">
                <div class="col-md-6 pb-3">
                    <img src="<?= base_url('assets/img/konten/' . $konten['image']); ?>" class="img-fluid" alt="Responsive image">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5 class="text-justify"><?= $konten['isi']; ?></h5>
                </div>
            </div>
            <?php if ($konten['video'] != '0') : ?>
                <div class="row justify-content-center">
                    <div class="col-md-6 pb-3">
                        <h6 class="text-center">Untuk lebih lengkap lihat video di bawah ini :</h6>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $konten['video']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row justify-content-end pr-3 mt-0 pb-3">
                <h6 style="color:red;"><?= $konten['username']; ?> / <?= date('d F Y', $konten['date_created']); ?></h6>
            </div>
        </div>
        <!-- end of konten -->
    </div>
</body>