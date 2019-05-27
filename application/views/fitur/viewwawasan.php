<body class="profile-page">
	<div class="page-header header-filter" data-parallax="true" style="background-image: url('https://i.imgur.com/8SHVwNO.jpg')"></div>
	<div class="main main-raised">
		<!-- konten -->
		<div class="container">
			<div class="row justify-content-center pb-2 pt-2">
				<h3 class="title">Daftar Konten</h3>
			</div>
			<div class="row">
				<?php foreach ($allkonten as $ak) : ?>
					<div class="col-md-4">
						<div class="card" style="width: 20rem;">
							<img class="card-img-top" src="<?= base_url('assets/img/konten/' . $ak['image']); ?>" alt="Card image cap" width="250px" height="250px" style="padding:5px;">
							<div class="card-body pb-0">
								<span class="card-text"><?= $ak['judul']; ?></span>
								<br>
								<small style="color:red;"><?= $ak['genre'] ?> / <?= date('d F Y', $ak['date_created']); ?></small>
								<div class="pb-3 text-center">
									<a href="<?= base_url('profil/kontendetail/' . $ak['id']) ?>" class="btn btn-success float-center mt-2">
										Read More
									</a>
								</div>
							</div>
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