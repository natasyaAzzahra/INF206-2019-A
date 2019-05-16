<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?= $this->session->flashdata('pesan'); ?>
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title text-center">Daftar User</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-warning">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($alluser as $usr) : ?>
                                        <?php if ($usr['role_id'] != 1) : ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $i;
                                                    $i++; ?>
                                                </th>
                                                <td><?= $usr['username']; ?></td>
                                                <td><?= $usr['namalengkap']; ?></td>
                                                <td><?= $usr['email']; ?></td>
                                                <td><?= date('d F Y', $usr['date_created']); ?></td>
                                                <td>
                                                    <a href="<?= base_url() ?>admin/hapus/<?= $usr['id']; ?>" class="badge badge-danger" rel="tooltip" title="Hapus" onclick="return confirm('Yakin?');">
                                                        <i class="material-icons">close</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>