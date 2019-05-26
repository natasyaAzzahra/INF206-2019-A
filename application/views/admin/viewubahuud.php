<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- untuk menambah uud -->
                    <div class="card-header card-header-warning">
                        <h4 class="card-title text-center">Ubah Undang-undang</h4>
                    </div>
                    <div class="card-body">
                        <form class="mt-4" method="POST" action="<?= base_url('admin/ubahuud/' . $uud['id']) ?>">
                            <!-- judul uud -->
                            <input type="hidden" name="id" id="id" value="<?= $uud['id']; ?>">
                            <div class="form-group">
                                <label for="uud">Judul Undang-undang</label>
                                <input type="text" class="form-control" id="uud" name="judul" value="<?= $uud['judul'] ?>">
                                <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <!-- isi dari uud -->
                            <div class="form-group">
                                <label for="isi">Isi</label>
                                <textarea class="form-control" id="isi" name="isi" rows="6"><?= $uud['isi'] ?></textarea>
                                <?= form_error('isi', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <!-- tombol submit-->
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>