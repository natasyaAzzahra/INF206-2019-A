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
    <div class="container-fluid">
        <h2 class=" pt-5 text-center"><span><?= $user['namalengkap']; ?></span></h2>
        <hr class="divider col-md-8">
        <?php echo form_open_multipart('profil'); ?>
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
            <div class="fileinput-new thumbnail">
                <img src="<?= base_url('assets/img/' . $user['image']) ?>" class="img-fluid" width="200px" height="200px" style="border:2px solid silver;padding:5px;">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail"></div>
            <div>
                <input class="d-none" id="foto" type="file" name="image">
                <label class="btn btn-warning" type="file" for="foto">Pilih foto untuk diubah</label>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <?= $this->session->flashdata('pesan'); ?>
            </div>
        </div>
        <div class="row justify-content-center pb-2">
            <div class="col-md-8">
                <div class="form-group pb-0">
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" readonly value="<?= $user['email'] ?>">
                </div>
                <div class="form-group pb-0 pt-0">
                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" readonly value="<?= $user['username'] ?>">
                </div>
                <div class="form-group pt-0">
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Nama Lengkap">
                </div>
                <div class="text-right form-group pt-0">
                    <button type="submit" class="btn btn-warning">Edit Profil</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<!-- end of Content -->