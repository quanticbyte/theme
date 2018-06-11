<?php get_header(); ?>

    <!-- content -->

    <div class="div-space-q"></div>

      
      <!-- articulo -->
<?php
    //if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

    <!-- content -->


<!--
    <div  class="container-fluid mt-5 mb-5">
      <div class="row">
        <div class="col-12 mt-2 px-4">
          <?php
                 /*
                  if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-fluid img_article ' ) );
                  }
                */
          ?>
        </div>
      </div>
    </div>

    <div class="container-fluid ">

      <div class="row">
        <div class="col-12 col-md-9 mt-1 mb-5 text-white">
          <h2 class="my-3 index-title"><?php //the_title(); ?></h2>
          <div class="mx-4"><p class="lead ml-4"><?php //echo get_the_date(); ?></p></div>
          <div class="text-justify ml-md-5 ml-3 mr-2">
            <?php //the_content(); ?>

          </div>
        </div>
      </div>
    </div>

      <?php
          //endwhile; endif;
      ?>
-->


    <div  class="container mt-5 mb-5 px-2 text-white">
      <div class="div-space-q"></div>

<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

          <?php
                  if ( has_post_thumbnail() ) 
                  {
                    the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-fluid img_article ' ) );
                  }
          ?>

       <h4 class="index-title margin-top-q"><?php the_title(); ?></h4>
       <div class="mx-4"><p class="lead ml-4 mb-4"><?php echo get_the_date(); ?></p></div>
      <div class="text-justify">
        <p>
          <?php the_content(); ?>
        </p>
      </div>

<?php
    endwhile; endif;
?>


    </div>

      <!-- fin articulo -->



    <!-- end content -->

    <!-- footer -->
<?php get_footer(); ?>
