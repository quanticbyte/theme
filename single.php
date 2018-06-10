<?php get_header(); ?>

    <!-- content -->

    <div class="div-space-q"></div>

      
      <!-- articulo -->
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

    <!-- content -->
    <div  class="container-fluid mt-5 mb-5">
      <div class="row">
        <div class="col-12 mt-2">
          <?php
                  if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-fluid' ) );
                  }
          ?>
        </div>
      </div>
    </div>

    <div class="container-fluid ">

      <div class="row">
        <div class="col-12 col-md-9 mt-1 mb-5 text-white">
          <h2 class="my-3 index-title"><?php the_title(); ?></h2>
          <p class="lead ml-4"><?php echo get_the_date(); ?></p>
          <div class="text-justify ml-md-5 ml-3 mr-2">
            <?php the_content(); ?>

          </div>
        </div>
      </div>
    </div>

      <?php
          endwhile; endif;
      ?>

      <!-- fin articulo -->



    <!-- end content ->

    <!-- footer -->
<?php get_footer(); ?>