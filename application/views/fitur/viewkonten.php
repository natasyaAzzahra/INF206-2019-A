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
                    <p>Kehidupan nelayan juga merupakan kebaikan karena dengan aktivitas ini banyak keluarga bisa makan ikan dan aktivitas yang menantang melawan laut dan menjadi alasan saya untuk berbagi pengetahuan agar semu nelayan ama dan lancar dalam meulaut. </p>
                </div>
                <div class="row">
                    <div class="col-md-4 ml-auto mr-auto">
                        <div class="profile-tabs">
                            <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                <!-- button untuk memilih halaman konten saya -->
                                <li class="nav-item">
                                    <a class="nav-link active" href="#konten" role="tab" data-toggle="tab" id="konten_saya">
                                        Konten Saya
                                    </a>
                                </li>
                                <!-- button untuk memilih halaman tambah konten -->
                                <li class="nav-item">
                                    <a class="nav-link" href="#artikel" role="tab" data-toggle="tab" id="tambah">
                                        Tambah Konten
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                        <div class="row" id="panel1">
                            <?php foreach ($userkonten as $uk) : ?>
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <img class="card-img-top" src="<?= base_url('assets/img/konten/' . $uk['image']); ?>" alt="Card image cap" width="250px" height="250px" style="padding:5px;">
                                        <div class="card-body pb-0">
                                            <span class="card-text"><?= $uk['judul']; ?></span>
                                            <br>
                                            <small style="color:red;"><?= $uk['genre'] ?> / <?= date('d F Y', $uk['date_created']); ?></small>
                                            <div class="pb-3">
                                                <a href="#" class="badge badge-primary float-left mb-3 mt-2">
                                                    Edit konten
                                                </a>
                                                <a href="<?= base_url('profil/hapuskonten/' . $uk['id']); ?>" class="badge badge-danger float-right mt-2" onclick="return confirm('Yakin?');">
                                                    Hapus konten
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row justify-content-center" id="panel2">
                            <div class="col-md-9">
                                <?php echo form_open_multipart('profil/konten'); ?>
                                <div class="form-group pb-0 mb-0 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-newspaper"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Konten" value="<?= set_value('judul') ?>">
                                </div>
                                <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
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
                                    <?= form_error('genre', '<small class="text-danger">', '</small>'); ?>
                                </div>
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
                                    <textarea class="form-control" id="isi" name="isi" rows="8"></textarea>
                                    <?= form_error('isi', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </form>
                            </div>
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= substr("https://youtu.be/pRfmrE0ToTo", 16); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                    </div>
                </section>
                <br>
            </div>
        </div>
        <!-- end of konten -->
    </div>
</body>