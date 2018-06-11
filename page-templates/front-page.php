<?php
/*
Template Name: Pagina d'inici
*/
?>

    <?php
    //tema opcions globals
    global $valores_default;
    $opciones = get_option( 'pa_opciones', $valores_default );
    ?>


<?php get_header(); ?>

    <!-- header -->

    <div class="container-fluid header h-100 d-flex flex-column justify-content-center align-items-center">
      <div class="text-center text-white">
        <h1 class="display-4 text-titul-portada">LA CANTONADA</h1>
        <p class="text-subtitol-portada">un restaurant diferent</p>
      </div>
    </div>

    <!-- end header -->

    <!-- BOXES -->
<div class="container-fluid">

        <div class="row">
          <div class="col-md-6 col-12 text-white d-flex flex-column justify-content-center align-items-center">
            <h4 class="index-title"><?php esc_attr_e($opciones["seccio_1_titul"]); ?></h4>
            <p class="index-text"><?php esc_attr_e($opciones["seccio_1_text"]); ?></p>
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
            <h4 class="index-title"><?php esc_attr_e($opciones["seccio_2_titul"]); ?></h4>
            <p class="index-text"><?php esc_attr_e($opciones["seccio_1_text"]); ?></p>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6 col-12 text-white d-flex flex-column justify-content-center align-items-center">
            <h4 class="index-title"><?php esc_attr_e($opciones["seccio_3_titul"]); ?></h4>
            <p class="index-text"><?php esc_attr_e($opciones["seccio_3_text"]); ?></p>
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
            <h4 class="index-title justify-content-center"><?php esc_attr_e($opciones["seccio_4_titul"]); ?></h4>
            <p class="index-text"><?php esc_attr_e($opciones["seccio_4_text"]); ?></p>
          </div>
        </div>
</div>
    <!-- END BOXES -->
<!-- footer -->
<?php get_footer(); ?>
