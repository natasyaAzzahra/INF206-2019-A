<body class="profile-page">
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('https://i.imgur.com/8SHVwNO.jpg')"></div>
    <div class="main main-raised">
        <!-- konten -->
        <div class="container">
            <?php $userpertanyaan = $this->db->get_where('user', ['id' => $forum['user_id']])->row_array(); ?>
            <h2 class="title text-center pt-4"><span>Forum</span></h2>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card mt-1">
                        <div class="card-body">
                            <h4 class="card-title">
                                <span><?= $forum['pertanyaan'] ?></span>
                            </h4>
                        </div>
                        <div class="card-footer">
                            <div class="author">
                                <a href="#">
                                    <img src="<?= base_url('assets/img/profil/' . $userpertanyaan['image']); ?>" alt="..." class="avatar img-raised">
                                    <span><?= $userpertanyaan['namalengkap']; ?></span>
                                </a>
                            </div>
                            <div class="stats ml-auto">
                                <!-- <i class="material-icons">chat_bubble</i> 45 -->
                                <?= date('d F Y', $forum['date_created']); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card pb-3">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center">Masukkan Jawaban Anda</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('forum/detailforum/' . $forum['id']); ?>" method="POST">
                                <div class="form-group">
                                    <label for="jawaban">Masukkan Jawaban...</label>
                                    <textarea class="form-control" id="pertanyaan" name="jawaban" rows="6"></textarea>
                                    <?= form_error('jawaban', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Masukkan Jawaban</button>
                            </form>
                        </div>
                        <?php if ($forum != 0) : ?>
                            <div class="card-body mb-0 pb-0">
                                <h3 class="title mb-0 pb-0">Jawaban</h3>
                            </div>
                        <?php endif; ?>
                        <?php foreach ($alljawaban as $aj) : ?>
                            <?php $userjawaban = $this->db->get_where('user', ['id' => $aj['user_id']])->row_array(); ?>
                            <div class="card-body">
                                <hr width="100%">
                                <div class="author pt-3">
                                    <a href="#">
                                        <img src="<?= base_url('assets/img/profil/' . $userjawaban['image']); ?>" alt="..." class="avatar img-raised">
                                        <span><?= $userjawaban['namalengkap']; ?></span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer pb-0 pl-5 ml-3">
                                <h4 class="card-title">
                                    <span><?= $aj['jawaban'] ?></span>
                                </h4>
                                <div class="stats ml-auto">
                                    <!-- <i class="material-icons">chat_bubble</i> 45 -->
                                    <?= date('d F Y', $aj['date_created']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of konten -->
    </div>
</body>