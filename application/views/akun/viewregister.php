	<!-- textarea -->
	<div class="page-header header-filter" data-parallax="true" style="background-image: url('https://i.imgur.com/b8LbQU3.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 ml-auto mr-auto mt-5 pt-5">
					<div class="card card-login">
						<form class="form" method="POST" action="<?= base_url() ?>Register/tambah">
							<div class="card-header card-header-warning text-center">
								<h4 class="card-title">Daftar</h4>
							</div>
							<p class="description text-center pt-2">Buat Akun</p>
							<div class="card-body">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="material-icons">face</i>
										</span>
									</div>
									<input name="namalengkap" type="text" class="form-control" placeholder="Nama Lengkap" id="namalengkap" required value="<?= set_value('namalengkap') ?>">
								</div>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="material-icons">perm_identity</i>
										</span>
									</div>
									<input name="username" type="text" class="form-control" placeholder="Nama Pengguna" id="username" required value="<?= set_value('username') ?>">
								</div>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="material-icons">mail</i>
										</span>
									</div>
									<input name="email" type="email" class="form-control" placeholder="Email" id="email" required value="<?= set_value('email') ?>">
								</div>
								<!-- <?= form_error('email', '<small class="text-danger pl-5 ml-2">', '</small>'); ?> -->
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="material-icons">lock_outline</i>
										</span>
									</div>
									<input name="password" type="password" class="form-control" placeholder="Kata Sandi" id="password" required>
								</div>
								<?= form_error('password', '<small class="text-danger pl-5 ml-2">', '</small>'); ?>
							</div>
							<div class="footer text-center">
								<button type="submit" name="register" class="btn btn-dark btn-link btn-wd btn-lg">Register</button>
							</div>
							<div class="create-ac text-center pb-2">
								<p>Sudah Memiliki Akun ? <a href="<?= base_url(); ?>Login">Masuk</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end of textarea -->