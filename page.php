
<?php get_header(); ?>
    <!-- content -->
    <div  class="container mt-5 mb-5 px-2 text-white">
      <div class="div-space-q"></div>

<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
?>



       <h4 class="index-title margin-top-q"><?php the_title(); ?></h4>

      <div class="text-justify">
        <p>
          <?php the_content(); ?>
        </p>
      </div>

<?php
    endwhile; endif;
?>


    </div>
    <!-- end content ->

    <!-- footer -->
<?php get_footer(); ?>