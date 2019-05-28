<body class="profile-page">
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('https://i.imgur.com/8SHVwNO.jpg')"></div>
    <div class="main main-raised">
        <!-- konten -->
        <div class="container">
            <h2 class="title text-center pt-4"><span>Selamat Datang Di Forum!</span></h2>
            <div class="row justify-content-center mt-4">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title text-center">Masukkan Pertanyaan!</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('forum') ?>" method="POST">
                                <div class="form-group">
                                    <label for="pertanyaan">Masukkan Pertanyaan...</label>
                                    <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="6"></textarea>
                                    <?= form_error('pertanyaan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-info float-right">Masukkan Pertanyaan</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 m-0">
                    <?php foreach ($allforum as $forum) : ?>
                        <?php $user = $this->db->get_where('user', ['id' => $forum['user_id']])->row_array(); ?>
                        <div class="card">
                            <div class="card-body ">
                                <h4 class="card-title">
                                    <a href="#"><?= $forum['pertanyaan'] ?></a>
                                </h4>
                            </div>
                            <div class="card-footer ">
                                <div class="author">
                                    <a href="#">
                                        <img src="<?= base_url('assets/img/profil/' . $user['image']); ?>" alt="..." class="avatar img-raised">
                                        <span><?= $user['namalengkap']; ?></span>
                                    </a>
                                </div>
                                <div class="stats ml-auto">
                                    <!-- <i class="material-icons">chat_bubble</i> 45 -->
                                    <?= date('d F Y', $forum['date_created']); ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- end of konten -->
    </div>
</body>