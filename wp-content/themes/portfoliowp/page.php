<?php //if (!is_user_logged_in()) {
	//$url = get_home_url() . '/wp-admin';
	//wp_redirect($url);
	//exit();
//} else {
	get_header();
//} 
?>

<main id="main" class="post" data-aos="fade-up">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2><?php echo $post->post_title; ?></h2>
                <ol>
                    <li><a href="/">home</a></li>
                    &ensp;/&ensp;
                    <li>
                        <?php
                        if (url_active()[2] == "") echo url_active()[1];
                        else echo "<a href='/" . url_active()[1] . "'>" . url_active()[1] . "</a>";
                        ?>
                    </li>
                    <li>
                        <?php
                        if (url_active()[2] != "") echo url_active()[2];
                        ?>
                    </li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <section id="page" class="portfolio-details">
        <div class="container" data-aos="fade-up">

      <div class="portfolio-description text-justify">
        <?php the_content() ?>
      </div>
      
    </div>

  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
<?php get_footer(); ?>