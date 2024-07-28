<?php
if (!is_user_logged_in()) {
  registerdb($_SERVER['REMOTE_ADDR'],$_SERVER['REDIRECT_URL']);
	$url = get_home_url() . '/wp-admin';
	wp_redirect($url);
	exit();
} else {
  get_header(); 
  registerdb2(wp_get_current_user()->user_login, $_SERVER['REMOTE_ADDR'],$_SERVER['REDIRECT_URL']);
}
?>

<main id="main" class="post" data-aos="fade-up">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2><?php echo $post->post_title; ?></h2>
        <ol>
          <li><a href="/">home</a></li>&ensp;/&ensp;
          <li><a href="/aulas">aulas</a></li>&ensp;/&ensp;
          <li><a href="/aulas/<?php echo url_active()[1]; ?>"><?php echo url_active()[1]; ?></a></li>
        </ol>
      </div>
    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="aulas" class="portfolio aulas">

    <div class="container">

      <div class="portfolio-description justify">

        <iframe class="videoaula" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'post_video', true); ?>" title="<?php echo $post->post_title; ?>" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <br>
        <hr><br>

        <?php echo get_the_content() ?>
      </div>

    </div>

  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
<?php get_footer(); ?>