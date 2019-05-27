<!-- Footer -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1 class="title">Nelayan Belajar</h1>
			</div>
			<div class="col-md-4 pt-5 pl-5">
				<ul class="nav">
					<li class="nav-item ">
						<a href="<?= base_url('info/kontak') ?>" class="nav-link">
							Kontak Kami
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('info') ?>" class="nav-link">
							Tentang Kami
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h3 class="title">Ikuti Kami:</h3>
				<div class="btn-wrapper profile">
					<a target="_blank" href="https://twitter.com/NelayanBelajar?lang=en" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
						<i class="fab fa-twitter"></i>
					</a>
					<a target="_blank" href="#" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
						<i class="fab fa-facebook-square"></i>
					</a>
					<a target="_blank" href="#" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
						<i class="fab fa-dribbble"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- end of footer -->

<!--   Core JS Files   -->
<script src="<?= base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="<?= base_url(); ?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?= base_url(); ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url(); ?>assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>

<!-- ajax -->
<script>
	$('#file').on('change', function() {
		let filename = $(this).val().split('\\').pop();
		$(this).next('.inputFileHidden').addClass("selected").html(filename)
	})

	$('document').ready(function() {
		$('#panel2').hide()
		$('#konten_saya').click(function() {
			$('#panel1').show()
			$('#panel2').hide()
		})

		$('#tambah').click(function() {
			$('#panel1').hide()
			$('#panel2').show()
		})

		$('#vids').hide()
		$('#konten').on('change', function() {
			if ($('#konten').val() == "Video") {
				$('#vids').show()
			} else
				$('#vids').hide()
		})
	})
</script>
<!-- end of ajax -->

</body>

</html>