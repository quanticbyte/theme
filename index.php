<?php get_header(); ?>

    <!-- header -->
<!--
    <div class="container-fluid header h-100 d-flex flex-column justify-content-center align-items-center">
      <div class="text-center text-white">
        <h1 class="display-4 text-titul-portada">LA CANTONADA</h1>
        <p class="text-subtitol-portada">un restaurant diferent</p>
      </div>
    </div>
-->
    <!-- end header -->

    <!-- BOXES -->
<div class="container-fluid">
<!--
        <div class="row">
          <div class="col-md-6 col-12 text-white d-flex flex-column justify-content-center align-items-center">
            <h4 class="index-title">Concepte</h4>
            <p class="index-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, non accusamus et dolorem possimus sapiente ducimus ad, libero delectus ipsa sit voluptatum placeat dignissimos omnis quod nam blanditiis! Rerum quibusdam illum distinctio aspernatur odit et quia esse omnis, accusamus itaque laboriosam consectetur consequatur repudiandae amet deleniti, aut optio iste exercitationem.</p>
          </div>
          <div class="col-md-6 col-12">
            <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/inici_1_1.jpg" alt="imatge_1">
          </div>
        </div>


        <div class="row">
          <div class="col-12 col-md-6 order-2 order-md-1">
            <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/inici_2_1.jpg" alt="imatge_1">
          </div>
          <div class="col-12 col-md-6 order-1 order-md-2 text-white d-flex flex-column justify-content-center align-items-center">
            <h4 class="index-title">la nostra cuina</h4>
            <p class="index-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, non accusamus et dolorem possimus sapiente ducimus ad, libero delectus ipsa sit voluptatum placeat dignissimos omnis quod nam blanditiis! Rerum quibusdam illum distinctio aspernatur odit et quia esse omnis, accusamus itaque laboriosam consectetur consequatur repudiandae amet deleniti, aut optio iste exercitationem.</p>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6 col-12 text-white d-flex flex-column justify-content-center align-items-center">
            <h4 class="index-title">Els nostres vins</h4>
            <p class="index-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, non accusamus et dolorem possimus sapiente ducimus ad, libero delectus ipsa sit voluptatum placeat dignissimos omnis quod nam blanditiis! Rerum quibusdam illum distinctio aspernatur odit et quia esse omnis, accusamus itaque laboriosam consectetur consequatur repudiandae amet deleniti, aut optio iste exercitationem.</p>
          </div>
          <div class="col-md-6 col-12">
            <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/inici_3_1.jpg" alt="imatge_1">
          </div>
        </div>


        <div class="row">
          <div class="col-12 col-md-6 order-2 order-md-1">
            <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/inici_4_1.jpg" alt="imatge_1">
          </div>
          <div class="col-12 col-md-6 order-1 order-md-2 text-white d-flex flex-column justify-content-center align-items-center">
            <h4 class="index-title justify-content-center">Els nostres postres</h4>
            <p class="index-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, non accusamus et dolorem possimus sapiente ducimus ad, libero delectus ipsa sit voluptatum placeat dignissimos omnis quod nam blanditiis! Rerum quibusdam illum distinctio aspernatur odit et quia esse omnis, accusamus itaque laboriosam consectetur consequatur repudiandae amet deleniti, aut optio iste exercitationem.</p>
          </div>
        </div>
-->

<!-- Articles -->
<div class="div-space-q"></div>
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

        <div class="row mt-5 mx-2">
          <div class="col-12 col-md-6">
            <!-- <img class="img-top img-fluid" src="images/inici_1_1.jpg" alt="imatge_1"> -->
            <a href="<?php the_permalink(); ?>">
              <?php
                  if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-top img-fluid ' ) );
                  }
              ?>
            </a>
          </div>

          <div class="col-12 col-md-6 text-white d-flex flex-column justify-content-center align-items-center px-4">
            <a href="<?php the_permalink(); ?>"><h4 class="index-title"><?php the_title(); ?></h4></a>
            <p class="text-footer"><?php echo get_the_date(); ?> / <?php the_category(', '); ?> / <?php the_author(); ?></p>
            <p class="index-text"><?php the_excerpt(); ?></p>
          </div>
        </div>
    
<?php
    endwhile; endif;
?>

<!-- fi articles -->

</div>
    <!-- END BOXES -->
<!-- footer -->
<?php get_footer(); ?>






