
<?php get_header(); ?>
    <!-- content -->
    <div  class="container mt-5 mb-5 px-2 text-white">
      <div class="div-space-q"></div>
<div class="my-4"></div>
<div class="jumbotron">
  <h1 class="display-4"><big>error <b>404</b></big></h1>
  <p class="lead">
<strong><big>HTTP 404 Not Found o HTTP</big></strong> és un codi d'estat HTTP que indica que <b>el sistema principal ha estat capaç de comunicar-se amb el servidor, però no hi ha el recurs que ha estat demanat</b>. Per exemple, si s'accedeix a la URL http://lacantonada.cat/xyzjk el servidor retornarà una pàgina d'error i el codi d'error <b>HTTP 404</b>.<br>
    Aquest error no s'ha de confondre amb "servidor web no trobat" o errors similars en què s'indica que no s'ha pogut realitzar la connexió amb el servidor.
  </p>
  <hr class="my-4">
  <p>Tranquil!!, Pots tornar a la pàgina d'inici.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="<?php echo 'http://'.$_SERVER['SERVER_NAME']; ?>" role="button">pàgina d'inici</a>
  </p>
</div>

    </div>
    <!-- end content ->

    <!-- footer -->
<?php get_footer(); ?>