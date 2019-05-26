<body class="profile-page">
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('https://i.imgur.com/8SHVwNO.jpg')"></div>
    <div class="main main-raised">
        <!-- konten -->
        <div class="container">
            <h2 class="title text-center pt-4"><span>Peraturan Undang-undang</span></h2>
            <div class="row justify-content-center mt-4 pb-4">
                <?php foreach ($alluud as $uud) : ?>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header card-header-text card-header-info">
                                <div class="card-text">
                                    <h4 class="card-title text-center"><?= $uud['judul']; ?></h4>
                                </div>
                            </div>
                            <div class="card-body text-justify">
                                <?= $uud['isi']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- end of konten -->
    </div>
</body>