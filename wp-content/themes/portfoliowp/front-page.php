<?php
get_header();
if (!is_user_logged_in()) {
	registerdb($_SERVER['REMOTE_ADDR'], $_SERVER['REDIRECT_URL']);
} else {
	registerdb2(wp_get_current_user()->user_login, $_SERVER['REMOTE_ADDR'], $_SERVER['REDIRECT_URL']);
}
?>

<!-- ======= Hero Section ======= -->
<section id="hero" style="background: url('<?php echo get_option('portal_input_2'); ?>') top center no-repeat fixed;" class="d-flex align-items-center">

	<div class="container" data-aos="zoom-out" data-aos-delay="100">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="center"><?php echo get_option('portal_input_3'); ?></h2>
				<a href="/aulas" class="btn-get-started scrollto Center" title="Aulas de Programação de Plugins e Temas para Wordpress">Aulas de Wordpress</a>
			</div>
		</div>
	</div>

</section><!-- End Hero -->

<main id="main">

	<!-- ======= About Section ======= -->
	<section id="sobre" class="about">
		<div class="container" data-aos="fade-up">
		<div class="section-title">
				<h2>SOBRE MIM</h2>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<?php echo get_option('portal_input_4'); ?>
				</div>				
			</div>
		</div>
	</section><!-- End About Section -->


		<!-- ======= Jobs Section ======= -->
		<section id="trabalhos" class="about job">
		<div class="container" data-aos="fade-up">
		<div class="section-title">
				<h2>TRABALHOS</h2>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<?php echo get_option('portal_input_44'); ?>
				</div>				
			</div>
		</div>
	</section><!-- End About Section -->


	<!-- ======= Contact Section ======= -->
	<section id="contato" class="contact">
	<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>CONTATO</h2>
			</div>

			<div class="row">

				<div class="col-lg-12">
					<div class="row">
						<div class="col-md-6">
							<div class="info-box mt-4">
								<i class="bx bxl-whatsapp"></i>
								<h3>Whastsapp</h3>
								<p><a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo get_option('portal_input_5'); ?>&text=Contato%20do%20Site%20Portfolio"><?php echo get_option('portal_input_5'); ?></a></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="info-box mt-4">
								<i class="bx bx-envelope"></i>
								<h3>E-mail</h3>
								<p><a href="mailto:<?php echo get_option('portal_input_6'); ?>"><?php echo get_option('portal_input_6'); ?></a></p>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section><!-- End Contact Section -->

</main><!-- End #main -->
<br><br>
<?php get_footer(); ?>