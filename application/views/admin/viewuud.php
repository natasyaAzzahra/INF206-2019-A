<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <?= $this->session->flashdata('pesan'); ?>
                <div class="card">
                    <!-- tabel yang berisi uud-->
                    <div class="card-header card-header-warning">
                        <h4 class="card-title text-center">Daftar Undang-undang</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-warning">
                                    <tr>
                                        <!-- kolom-kolom pda tabel-->
                                        <th scope="col">No.</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Isi</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- terintegrasi dengan databasenya-->
                                    <?php $i = 1; ?>
                                    <?php foreach ($alluud as $uud) : ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $i;
                                                $i++; ?>
                                            </th>
                                            <td><?= $uud['judul']; ?></td>
                                            <td>
                                                <pre><?= $uud['isi']; ?></pre>
                                            </td>
                                            <td>
                                                <!-- pilihan menghapus uud -->
                                                <a href="<?= base_url() ?>admin/hapusuud/<?= $uud['id']; ?>" class="badge badge-danger" rel="tooltip" title="Hapus" onclick="return confirm('Yakin?');">
                                                    <i class="material-icons">close</i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <!-- untuk menambah uud -->
                    <div class="card-header card-header-warning">
                        <h4 class="card-title text-center">Tambah Undang-undang</h4>
                    </div>
                    <div class="card-body">
                        <form class="mt-4" method="POST" action="<?= base_url('admin/uud') ?>">
                            <!-- judul uud -->
                            <div class="form-group">
                                <label for="uud">Judul Undang-undang</label>
                                <input type="text" class="form-control" id="uud" name="judul" aria-describedby="emailHelp">
                                <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <!-- isi dari uud -->
                            <div class="form-group">
                                <label for="isi">Isi</label>
                                <textarea class="form-control" id="isi" name="isi" rows="6"></textarea>
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