/*
jQuery(document).ready(function($){


 var custom_uploader;


 $('#upload_image_button').click(function(e) {

	 e.preventDefault();

	 //Si el objeto uploader ya ha sido creado volvemos a abrir el dialogo.
	 if (custom_uploader) {
	 custom_uploader.open();
	 return;
	 }

	 //Extendemos el objeto wp.media
	 custom_uploader = wp.media.frames.file_frame = wp.media({
	 title: 'Selecciona Imagen',
	 button: {
	 text: 'Selecciona Imagen'
	 },
	 library : { type : 'image'},
	 multiple: false
	 });

	 //Cuando se selecciona un archivo ponemos su URL como valor del campo de texto
	 custom_uploader.on('select', function() {
	 attachment = custom_uploader.state().get('selection').first().toJSON();
	 $('#upload_image').val(attachment.url);
	 // Mostramos la imagen dentro del div con id "magen_preview".
	 $('#imagen_preview').html('<img src="'+attachment.url+'" style="max-width:200px" />');
	 });

	 //Abre el dialogo del uploader..
	 custom_uploader.open();

 });

});
*/

//*************************************************************************************


//funcio uploader
function upload(event,ide_label,ide_label_preview) {

 event.preventDefault();

 //Si el objeto uploader ya ha sido creado volvemos a abrir el dialogo.
/*
 if (custom_uploader) {
 custom_uploader.open();
 return;
 }
*/
//afegit el typeof per eliminar error en variable

/*
 if (typeof custom_uploader != "undefined") {
 custom_uploader.open();
 return;
 }
*/


 custom_uploader = null;
 //Extendemos el objeto wp.media
 custom_uploader = wp.media.frames.file_frame = wp.media({
 title: 'Selecciona Imagen',
 button: {
 text: 'Selecciona Imagen'
 },
 library : { type : 'image'},
 multiple: false
 });

 //Cuando se selecciona un archivo ponemos su URL como valor del campo de texto
 custom_uploader.on('select', function() {
 	attachment = custom_uploader.state().get('selection').first().toJSON();
	 //$('#upload_image').val(attachment.url);
	 $(ide_label).val(attachment.url);
	 // Mostramos la imagen dentro del div con id "magen_preview".
	 $(ide_label_preview).html('<img src="'+attachment.url+'" style="max-width:200px" />');
 });

 //Abre el dialogo del uploader..
 custom_uploader.open();

 };