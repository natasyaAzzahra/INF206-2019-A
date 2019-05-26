<body class="profile-page">
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('https://i.imgur.com/8SHVwNO.jpg');"></div>
    <div class="main main-raised">
        <!-- konten -->
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <!-- foto profile dari user -->
                        <div class="profile">
                            <div class="avatar">
                                <img src="<?= base_url('assets/img/profil/' . $user['image']); ?>" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="title"><?= $user['namalengkap']; ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- bio dari user -->
                <div class="description text-justify mt-0">
                    <p><?= $user['bio']; ?></p>
                </div>
                <div class="container">
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-9">
                            <?= $this->session->flashdata('pesan'); ?>
                        </div>
                    </div>
                </div>
                <section class="category-page area-padding">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-9">
                                <?php echo form_open_multipart('profil/editkonten/' . $konten['id']); ?>
                                <input type="hidden" name="id" id="id" value="<?= $konten['id']; ?>">
                                <div class="form-group pb-0 mb-0 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-newspaper"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Konten" value="<?= $konten['judul']; ?>">
                                </div>
                                <?= form_error('judul', '<small class="text-danger pl-5">', '</small>'); ?>
                                <div class="form-group pt-0 pb-0 mb-0 mt-0 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-hand-pointer"></i>
                                        </span>
                                    </div>
                                    <select class="form-control selectpicker" name="genre" data-style="btn btn-link" id="konten">
                                        <option value="">Pilih Jenis Konten</option>
                                        <option value="Artikel">Artikel</option>
                                        <option value="Video">Video</option>
                                    </select>
                                </div>
                                <?= form_error('genre', '<small class="text-danger pl-5">', '</small>'); ?>
                                <div class="form-group pt-0 pb-0 mt-0 input-group" id="vids">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-video"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="video" class="form-control" id="vids" placeholder="Masukkan Link Video YouTube">
                                </div>
                                <div class="form-control pt-0 pb-0 mb-0 mt-3 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-images"></i>
                                        </span>
                                    </div>
                                    <input name="image" type="file" id="file" class="d-none">
                                    <label class="inputFileHidden" for="file">Klik untuk memasukkan foto Konten</label>
                                </div>
                                <div class="form-group mt-0">
                                    <label for="isi">Masukkan Deskripsi Konten</label>
                                    <textarea class="form-control" id="isi" name="isi" rows="8"><?= $konten['isi']; ?></textarea>
                                    <?= form_error('isi', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 float-right">Ubah Konten</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <br>
            </div>
        </div>
        <!-- end of konten -->
    </div>
</body>