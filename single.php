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
                    //afegits parametres en imatge SEO
                    the_post_thumbnail( 'post-thumbnails', array( 
                                                                  'class' => 'img-fluid img_article ',
                                                                  'alt' => get_the_title(),
                                                                  'title' => get_the_title() 
                                                                ) );
                  }
          ?>

      <div class="my-4"></div>
       <h4 class="index-title margin-top-q"><?php the_title(); ?></h4>
       <div class="mx-4"><p class="lead ml-4 mb-4"><?php echo get_the_date(); ?></p></div>
      <div class="text-justify">
        <p>
          <?php the_content(); ?>
        </p>
      </div>

<?php
//comentaris
// formulari de comentaris
// acompanyat de pagina comments.php
//---------------------------------------------------------------------------------------
//simple comment loop
//Get only the approved comments 
/*
$args = array(
    'status' => 'approve'
);
 
// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
 
// Comment Loop
if ( $comments ) {
    foreach ( $comments as $comment ) {
        echo '<p>' . $comment->comment_content . '</p>';
    }
} else {
    echo 'No comments found.';
}
*/
//comments template
// If comments are open or we have at least one comment, load up the comment template.
 if ( comments_open() || get_comments_number() ) :
     comments_template();
 endif;

//---------------------------------------------------------------------------------------
?>


<?php
    endwhile; endif;
?>


    </div>

      <!-- fin articulo -->



    <!-- end content -->

    <!-- footer -->
<?php get_footer(); ?>
