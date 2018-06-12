<?php
//llamar a nuestro menu
if(function_exists('register_nav_menus')){
	register_nav_menus( array('superior' => 'Menú pricipal superior') );
}

//aqui clase para la ancal
add_filter('nav_menu_link_attributes','classe_menu_a',10,3);
function classe_menu_a($atts,$items,$args){
	$class = 'nav-link';
	$atts['class'] = $class;
	return $atts;
}

//thumbmails imatges destacades en noticies
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
 }


//opciones del theme
//-------------------------------------------------------------------------------------------------
//register setings
function pa_registrar_opciones() {
    register_setting( 'pa_opciones_theme', 'pa_opciones', 'pa_validar' );
}
 /*
    pa_opciones_theme: Es el nombre de grupo de opciones
    pa_opciones: Es el nombre de la opción que estamos registrando. Puedes registrar cuantas opciones requieras, pero a mi me gusta usar una solo opción array con todos los valores dentro como veremos más adelante.
    pa_validar: Nombre de la función que utilizaremos para validar los datos.
 */
add_action( 'admin_init', 'pa_registrar_opciones' );
//variable options
$valores_default= array(
                    'copyright' => '&copy;2011 Timersys',
                    'logo' => 'http://tudomain.com/images/logo_placeholder.png'
              );

//creamos nuestro menu de configuración
function pa_opciones_theme() {
    add_theme_page( 'Opciones Theme', 'Opcions La Cantonada', 'edit_theme_options', 'opciones_theme', 'pa_theme_page' );
}
 
add_action( 'admin_menu', 'pa_opciones_theme' );


 function pa_theme_page() 
 {

    global $valores_default;
 
    if ( ! isset( $_REQUEST['updated'] ) ) $_REQUEST['updated'] = false; // Para comprobar si el formulario fue enviado o no. 


?>
    <div>
    <?php screen_icon(); echo "<h2>". __( ' Opciones de ' ) . get_current_theme() . "</h2>";
    // Esto muestra el ícono de la página si es que tiene uno y el nombre del theme ?>
 
    <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
    <div><p><strong><?php _e( 'Opciones guardadas' ); ?></strong></p></div>
    <?php endif; // Si el formulario se envia mostramos el mensaje. ?>
 

    <form method="post" action="options.php">
 
    <?php $opciones = get_option( 'pa_opciones', $valores_default ); ?>
 
    <?php settings_fields( 'pa_opciones_theme' );
    /* Esta función imprime todos los campos hidden necesarios para que el formulario funcione correctamente */ ?>
 
    <table class="form-table">
 
    <tr valign="top"><th scope="row"><label for="logo">Logo Url</label></th>
    <td>
    <input id="theme_logo" name="pa_opciones[theme_logo]" type="text" value="<?php  esc_attr_e($opciones['theme_logo']); ?>" />

	   <?php  if($opciones['theme_logo'] !='') : ?> 
	        <img src="$opciones['theme_logo']" alt="logo" />
	   <?php endif; ?>

    </td>
    </tr>
 
    <tr valign="top"><th scope="row"><label for="favico">Favico Url</label></th>
    <td>
    <input id="theme_favico" name="pa_opciones[theme_logo]" type="text" value="<?php  esc_attr_e($opciones['theme_favico']); ?>" />

	    <?php if($opciones['theme_favico'] !='') : ?> 
	         <img src="$opciones['theme_favico']" alt="logo" />
	    <?php endif; ?>

    </td>
    </tr>
    <tr valign="top"><th scope="row"><label for="google_analytics">C&oacute;digo de Google Analytics</label></th>
    <td>
    <textarea id="google_analytics" name="pa_opciones[google_analytics]"><?php  esc_attr_e($opciones['google_analytics']); ?> </textarea>
    </td>
    </tr>
 



<!-- 
    <tr valign="top"><th scope="row"><label for="copyright">Footer Copyright</label></th>
    <td>
    <input id="footer_copyright" name="pa_opciones[copyright]" type="text" value="<?php  esc_attr_e($opciones['copyright']); ?>" />
    </td>
-->
 



	
	

	</table>
<!-- .............................................................................................................. -->
<!-- SECCIO 1 -->
<div style="background-color: #b3e6ff;">
    <table class="form-table">
    <tr valign="top"><th scope="row"><label for="copyright">Titul seccio 1 ( inici ) </label></th>
	    <td>
	    	<input id="seccio_1_titul" class="q-options" style="width: 100%; background-color: #ddd;" name="pa_opciones[seccio_1_titul]" type="text" value="<?php  esc_attr_e($opciones['seccio_1_titul']); ?>" />
	    </td>
	</tr>
    <tr valign="top"><th scope="row"><label for="copyright">Text seccio 1 ( Inici ) </label></th>
	    <td>
	    	<textarea id="seccio_1_text" class="q-options" style="width: 100%; background-color: #ddd; height: 150px;" name="pa_opciones[seccio_1_text]"><?php  esc_attr_e($opciones['seccio_1_text']); ?> </textarea>
	    </td>
	</tr>
    <!-- exemple uploader -->
			<tr valign="top">
			    <th scope="row">Pujar imatge</th>
			    <td>
			        <label for="upload_image">
			            <input id="upload_image_1" type="text" size="36" name="pa_opciones[seccio_1_img]" value="<?php  esc_attr_e($opciones['seccio_1_img']); ?>" />
			            <input id="upload_image_button" class="button" type="button" value="Pujar Imatge" onclick="upload(event,'#upload_image_1','#img_1');" />
			            <br />Introdueix url o puja imtge.
			        </label>
			    </td>
			</tr>
			<tr>
				<th></th>
				<td>
			    	<div id="img_1"> 
					    <?php if($opciones['seccio_1_img'] !='') : ?>
					         <img src="<?php  esc_attr_e($opciones['seccio_1_img']); ?>" alt="<?php  esc_attr_e($opciones['seccio_1_titul']); ?>" width="200" />
					    <?php endif; ?>
					</div>
				</td>

			</tr>
    <!-- fi exemple -->	
	</table>
</div>

<!-- SECCIO 2 -->
<div style="background-color: #b3e6ff;">
    <table class="form-table">
    <tr valign="top"><th scope="row"><label for="copyright">Titul seccio 2 ( inici ) </label></th>
	    <td>
	    	<input id="seccio_2_titul" class="q-options" style="width: 100%; background-color: #ddd;" name="pa_opciones[seccio_2_titul]" type="text" value="<?php  esc_attr_e($opciones['seccio_2_titul']); ?>" />
	    </td>
	</tr>
    <tr valign="top"><th scope="row"><label for="copyright">Text seccio 2 ( Inici ) </label></th>
	    <td>
	    	<textarea id="seccio_2_text" class="q-options" style="width: 100%; background-color: #ddd; height: 150px;" name="pa_opciones[seccio_2_text]"><?php  esc_attr_e($opciones['seccio_2_text']); ?> </textarea>
	    </td>
	</tr>

			<tr valign="top">
			    <th scope="row">Pujar imatge</th>
			    <td>
			        <label for="upload_image">
			            <input id="upload_image_2" type="text" size="36" name="pa_opciones[seccio_2_img]" value="<?php  esc_attr_e($opciones['seccio_2_img']); ?>" />
			            <input id="upload_image_button" class="button" type="button" value="Pujar Imatge" onclick="upload(event,'#upload_image_2','#img_2');" />
			            <br />Introdueix url o puja imtge.
			        </label>
			    </td>
			</tr>
			<tr>
				<th></th>
				<td>
			         <div id="img_2">
					    <?php if($opciones['seccio_2_img'] !='') : ?> 
					         <img src="<?php  esc_attr_e($opciones['seccio_2_img']); ?>" alt="<?php  esc_attr_e($opciones['seccio_2_titul']); ?>" width="200" />
					    <?php endif; ?>
			    	 </div>
				</td>

			</tr>	
	</table>
</div>

<!-- SECCIO 3 -->
<div style="background-color: #b3e6ff;">
    <table class="form-table">
    <tr valign="top"><th scope="row"><label for="copyright">Titul seccio 3 ( inici ) </label></th>
	    <td>
	    	<input id="seccio_3_titul" class="q-options" style="width: 100%; background-color: #ddd;" name="pa_opciones[seccio_3_titul]" type="text" value="<?php  esc_attr_e($opciones['seccio_3_titul']); ?>" />
	    </td>
	</tr>
    <tr valign="top"><th scope="row"><label for="copyright">Text seccio 3 ( Inici ) </label></th>
	    <td>
	    	<textarea id="seccio_3_text" class="q-options" style="width: 100%; background-color: #ddd; height: 150px;" name="pa_opciones[seccio_3_text]"><?php  esc_attr_e($opciones['seccio_3_text']); ?> </textarea>
	    </td>
	</tr>

			<tr valign="top">
			    <th scope="row">Pujar imatge</th>
			    <td>
			        <label for="upload_image">
			            <input id="upload_image_3" type="text" size="36" name="pa_opciones[seccio_3_img]" value="<?php  esc_attr_e($opciones['seccio_3_img']); ?>" />
			            <input id="upload_image_button" class="button" type="button" value="Pujar Imatge" onclick="upload(event,'#upload_image_3','#img_3');" />
			            <br />Introdueix url o puja imtge.
			        </label>
			    </td>
			</tr>
			<tr>
				<th></th>
				<td>
					<div id="img_3">
					    <?php if($opciones['seccio_3_img'] !='') : ?> 
					         <div id="img_3">
					         <img src="<?php  esc_attr_e($opciones['seccio_3_img']); ?>" alt="<?php  esc_attr_e($opciones['seccio_3_titul']); ?>" width="200" />
					    <?php endif; ?>
					</div>
				</td>

			</tr>
	</table>
</div>

<!-- SECCIO 4 -->
<div style="background-color: #b3e6ff;">
    <table class="form-table">
    <tr valign="top"><th scope="row"><label for="copyright">Titul seccio 4 ( inici ) </label></th>
	    <td>
	    	<input id="seccio_4_titul" class="q-options" style="width: 100%; background-color: #ddd;" name="pa_opciones[seccio_4_titul]" type="text" value="<?php  esc_attr_e($opciones['seccio_4_titul']); ?>" />
	    </td>
	</tr>
    <tr valign="top"><th scope="row"><label for="copyright">Text seccio 4 ( Inici ) </label></th>
	    <td>
	    	<textarea id="seccio_4_text" class="q-options" style="width: 100%; background-color: #ddd; height: 150px;" name="pa_opciones[seccio_4_text]"><?php  esc_attr_e($opciones['seccio_4_text']); ?> </textarea>
	    </td>
	</tr>

			<tr valign="top">
			    <th scope="row">Pujar imatge</th>
			    <td>
			        <label for="upload_image">
			            <input id="upload_image_4" type="text" size="36" name="pa_opciones[seccio_4_img]" value="<?php  esc_attr_e($opciones['seccio_4_img']); ?>" />
			            <input id="upload_image_button" class="button" type="button" value="Pujar Imatge" onclick="upload(event,'#upload_image_4','#img_4');" />
			            <br />Introdueix url o puja imtge.
			        </label>
			    </td>
			</tr>
			<tr>
				<th></th>
				<td>
					<div id="img_4">
					    <?php if($opciones['seccio_4_img'] !='') : ?> 
					         <img src="<?php  esc_attr_e($opciones['seccio_4_img']); ?>" alt="<?php  esc_attr_e($opciones['seccio_4_titul']); ?>" width="200" />
					    <?php endif; ?>
			    	</div>
				</td>

			</tr>	
	</table>
</div>

<!-- .............................................................................................................. -->





    </tr>
    </table>
 
   <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>
  

    </form>
 
    </div>
 
<?php
}

//===============================================================================
// MEDIA UPLOADER
//carregem el script nesesari 
add_action('admin_enqueue_scripts', 'upload_script');

function upload_script(){
  wp_enqueue_media ();
  // Esto para cargarlo desde la carpeta js de nuestro plugin, si lo tenemos alojado el otro sitio cambiar url
  //wp_enqueue_script( 'uploader',plugins_url( '/js/wp_uploader.js', __FILE__ ));
  wp_enqueue_script('uploader',content_url()."/themes/cantonada/js/wp_uploader.js");
  //var_dump(plugins_url( '/js/wp_uploader.js', __FILE__ ));
}

?>

