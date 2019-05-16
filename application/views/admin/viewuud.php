<div class="content">
    <div class="container-fluid">
        <div class="row">
       		<div class="col-md-9">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title text-center">Tambah Undang-undang</h4>
                    </div>
                    <div class="card-body">
                        <form class="mt-4" method="POST" action="<?= base_url('admin/uud') ?>">
                            <div class="form-group">
                                <label for="uud">Judul Undang-undang</label>
                                <input type="text" class="form-control" id="uud" name="judul" aria-describedby="emailHelp">
                                <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="isi">Isi</label>
                                <textarea class="form-control" id="isi" name="isi" rows="6"></textarea>
                                <?= form_error('isi', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>