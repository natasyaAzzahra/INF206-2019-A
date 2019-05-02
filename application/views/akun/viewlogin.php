	<!-- textarea -->
	<div class="page-header header-filter" data-parallax="true" style="background-image: url('https://i.imgur.com/b8LbQU3.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 ml-auto mr-auto mt-5 pt-5">
					<div class="card card-login">
						<form class="form" method="POST" action="<?= base_url() ?>Login">
							<div class="card-header card-header-warning text-center">
								<h4 class="card-title">Masuk</h4>
							</div>
							<p class="description text-center pt-4">Masuk ke akun saya</p>
							<?= $this->session->flashdata('pesan'); ?>
							<div class="card-body pt-2">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="material-icons">perm_identity</i>
										</span>
									</div>
									<input name="username" id="username" type="text" class="form-control" placeholder="Nama Pengguna" required value="<?= set_value('username') ?>">
								</div>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="material-icons">lock_outline</i>
										</span>
									</div>
									<input name="password" type="password" id="password" class="form-control" placeholder="Kata Sandi" required>
								</div>
							</div>
							<div class="footer text-center pt-3">
								<button type="submit" name="login" class="btn btn-dark btn-link btn-wd btn-lg">Masuk</button>
							</div>
							<div class="create-ac text-center">
								<p>Belum Memiliki Akun ? <a href="<?= base_url(); ?>register">Registrasi</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end of textarea -->