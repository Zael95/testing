<?php 

//Variable de validacion de contenido post
$data_post = 0;


// LOGIN
$post_usuario = '';
$post_password = ''; 
if(isset($_POST['user']) && isset($_POST['password'])){
	$post_usuario = htmlspecialchars($_POST['user']);
	$post_password = md5(htmlspecialchars($_POST['password']));	
}


// Id como valor de un botón
if(isset($_POST['btn-op-form'])){
	$arr3 = explode('/',$_POST['btn-op-form']);
	$btn_op_form = $arr3[0];
	$btn_id = $arr3[1];
	$btn_id_2 = $arr3[1];
}


if(isset($_POST['btn-id']) && $_POST['btn-id']!=''){
	$btn_id = $_POST['btn-id'];
}

//OTHER
$btn_op='';
if(isset($_POST['btn-op'])){
	$arr0 = explode('/',$_POST['btn-op']); 
	$btn_op = $arr0[0];
}else{
	$btn_op = '';
}


//paginador
$page=0;
if(isset($_POST['btn-pag'])){

	$arr = explode('/',$_POST['btn-pag']);

	$page = $arr[0]-1;

	if($arr[1]!=''){
		$btn_op = $arr[1];
	}
}


$btn_op_2='';
if(isset($_POST['btn-op-2'])){
	//$btn_op_2 = $_POST['btn-op-2'];
	$arr2 = explode('/',$_POST['btn-op-2']);
	$btn_op_2 = $arr2[0];
	$btn_op = $arr2[1];
	$valor_filtro = $arr2[2];
	$valor_pagina = $arr2[3];

	if($valor_filtro!=''){
		$tipo_usuario_id = $valor_filtro;
	}

	if($valor_pagina!=''){
		$page = $valor_pagina;
	}
}


$btn_save = '';
if(isset($_POST['btn-save'])){
	$btn_save = $_POST['btn-save'];
}else{
	$btn_save = '';
}


$txt_search='';
if(isset($_POST['txt-search'])){
	if($_POST['txt-search']!=''){
		$txt_search = $_POST['txt-search'];
	}
}


//checks
$count_check_register = 0;
if(isset($_POST["check-id"])){
	$check_selected=$_POST["check-id"];
	$count_check = count($check_selected);
}





/*
* ---------------------------------------------
* Datos post de formularios (agregar/modificar)
* ---------------------------------------------
*/


/*
*
* @module
* CONTÁCTENOS
*
*/

if(isset($_POST['contact-asunto'])){
	$contact_asunto = htmlspecialchars($_POST['contact-asunto']);
}

if(isset($_POST['contact-mensaje'])){
	$contact_mensaje = htmlspecialchars($_POST['contact-mensaje']);
}

if(isset($_POST['contact-archivo'])){
	$contact_archivo = htmlspecialchars($_POST['contact-archivo']);
}




/*
*
* @module
* USUARIOS
*
*/


//Filtros (para agregar usuarios nuevos)
#Módulo usuario :: filtro por tipo usuario
if(isset($_POST['tipo_usuario'])){
	$data_post = 1;
	$tipo_usuario_id = htmlspecialchars($_POST['tipo_usuario']);
}else{
	$data_post = 0;
}

//Formulario
if(isset($_POST['usuario_id'])){
	$usuario_id = htmlspecialchars($_POST['usuario_id']);
}

if(isset($_POST['tipo_usuario'])){
	$tipo_usuario = htmlspecialchars($_POST['tipo_usuario']);
}

if(isset($_POST['usuario_nombre'])){
	$usuario_nombre = htmlspecialchars($_POST['usuario_nombre']);
}

if(isset($_POST['usuario_user'])){
	$usuario_user = htmlspecialchars($_POST['usuario_user']);
}

if(isset($_POST['usuario_pass'])){
	$usuario_pass = htmlspecialchars($_POST['usuario_pass']);
}

if(isset($_POST['usuario_pass_new']) && $_POST['usuario_pass_new']!=''){
	$usuario_pass = md5(htmlspecialchars($_POST['usuario_pass_new']));
}


/*
*
* @module
* CATEGORÍA
*
*/
//Formulario
if(isset($_POST['categoria_id'])){
	$categoria_id = htmlspecialchars($_POST['categoria_id']);
}

if(isset($_POST['categoria_orden'])){
	$categoria_orden = htmlspecialchars($_POST['categoria_orden']);
}

if(isset($_POST['categoria_nombre'])){
	$categoria_nombre = htmlspecialchars($_POST['categoria_nombre']);
}

if(isset($_POST['categoria_nombre_ingles'])){
	$categoria_nombre_ingles = htmlspecialchars($_POST['categoria_nombre_ingles']);
}
if(isset($_POST['categoria_color'])){
	$categoria_color = htmlspecialchars($_POST['categoria_color']);
}



/*
*
* @module
* SUBCATEGORÍA
*
*/


if(isset($_POST['subcategoria_orden'])){
	$subcategoria_orden = htmlspecialchars($_POST['subcategoria_orden']);
}

if(isset($_POST['subcategoria_nombre'])){
	$subcategoria_nombre = htmlspecialchars($_POST['subcategoria_nombre']);
}

if(isset($_POST['categoria'])){
	$categoria_id = htmlspecialchars($_POST['categoria']);
}


if(isset($_POST['categoria_filtro'])){
	$categoria_id = htmlspecialchars($_POST['categoria_filtro']);
}

if(isset($_POST['categoria_filtro'])){
	$data_post = 1;
	$categoria_id = htmlspecialchars($_POST['categoria_filtro']);
}else{
	$data_post = 0;
}

if(isset($_POST['subcategoria_id'])){
	$subcategoria_id = htmlspecialchars($_POST['subcategoria_id']);
}



/*
*
* @module
* PRODUCTOS
*
*/


if(isset($_POST['producto_id'])){
	$producto_id = htmlspecialchars($_POST['producto_id']);
}

if(isset($_POST['producto_orden'])){
	$producto_orden = htmlspecialchars($_POST['producto_orden']);
}

if(isset($_POST['producto_nombre'])){
	$producto_nombre = htmlspecialchars($_POST['producto_nombre']);
}

// if(isset($_POST['producto_descripcion'])){
// 	$producto_descripcion = htmlentities($_POST['producto_descripcion'],ENT_QUOTES);
// }

if(isset($_POST['producto_descripcion'])){
	
	$producto_descripcion = htmlspecialchars($_POST['producto_descripcion']);
	$producto_descripcion = html_entity_decode($_POST['producto_descripcion'], ENT_NOQUOTES, "UTF-8");
	
}


// Archivos de imagen de Productos

// Para cuando no se modifica la imagen:
if(isset($_POST['producto_imagen1_c'])){
	$producto_imagen1_c = htmlspecialchars($_POST['producto_imagen1_c']);
}

if(isset($_POST['producto_imagen2_c'])){
	$producto_imagen2_c = htmlspecialchars($_POST['producto_imagen2_c']);
}

if(isset($_POST['producto_imagen3_c'])){
	$producto_imagen3_c = htmlspecialchars($_POST['producto_imagen3_c']);
}

// imagen 1

$newnom_producto = date("YmdHis"); // date le signa un nombre no repetitivo
$maxsize1_producto = 500 * 600; // 300kb -> peso de la imagen
$newfile_img_producto = $newnom_producto.'.jpg'; // concatena

if(isset($_FILES['producto_imagen']['tmp_name']) && $_FILES['producto_imagen']['tmp_name']!=''){
	if (!empty($_FILES['producto_imagen']['name'])) {
		if ($_FILES['producto_imagen']['size'] <= $maxsize1_producto) {
			$productoURL = "app/img/productos/";
			if (!move_uploaded_file($_FILES['producto_imagen']['tmp_name'], $productoURL . $newfile_img_producto));
			@unlink("app/img/productos/".$producto_imagen1_c);
			$producto_imagen = $newfile_img_producto;

		}else{
			//$producto_imagen = $_POST['producto_imagen1_c'];
		}
	}
}else{
	if (isset($producto_imagen1_c)) {
		$producto_imagen = $producto_imagen1_c;
	}
	
}

// imagen 2 

$newnom_producto2 = date("YmdHis"); // date le signa un nombre no repetitivo
$maxsize1_producto2 = 500 * 600; // 300kb -> peso de la imagen
$newfile_img_producto2 = $newnom_producto2.'2.jpg'; // concatena

if(isset($_FILES['producto_imagen2']['tmp_name']) && $_FILES['producto_imagen2']['tmp_name']!=''){
	if (!empty($_FILES['producto_imagen2']['name'])) {
		if ($_FILES['producto_imagen2']['size'] <= $maxsize1_producto2) {
			$productoURL = "app/img/productos/";
			if (!move_uploaded_file($_FILES['producto_imagen2']['tmp_name'], $productoURL . $newfile_img_producto2));
			@unlink("app/img/productos/".$producto_imagen2_c);
			$producto_imagen2 = $newfile_img_producto2;

		}else{
			//$producto_imagen = $_POST['producto_imagen2_c'];
		}
	}
}else{
	if (isset($producto_imagen2_c)) {
		$producto_imagen2 = $producto_imagen2_c;
	}
	
	
}

// imagen 3 

$newnom_producto3 = date("YmdHis"); // date le signa un nombre no repetitivo
$maxsize1_producto3 = 500 * 600; // 300kb -> peso de la imagen
$newfile_img_producto3 = $newnom_producto3.'3.jpg'; // concatena

if(isset($_FILES['producto_imagen3']['tmp_name']) && $_FILES['producto_imagen3']['tmp_name']!=''){
	if (!empty($_FILES['producto_imagen3']['name'])) {
		if ($_FILES['producto_imagen3']['size'] <= $maxsize1_producto3) {
			$productoURL = "app/img/productos/";
			if (!move_uploaded_file($_FILES['producto_imagen3']['tmp_name'], $productoURL . $newfile_img_producto3));
			@unlink("app/img/productos/".$producto_imagen3_c);
			$producto_imagen3 = $newfile_img_producto3;

		}else{
			//$producto_imagen3 = $_POST['producto_imagen3_c'];
		}
	}
}else{
	if (isset($producto_imagen3_c)) {
		$producto_imagen3 = $producto_imagen3_c;
	}
	
}



if(isset($_POST['producto_nombre_ingles'])){
	$producto_nombre_ingles = htmlspecialchars($_POST['producto_nombre_ingles']);
}

// if(isset($_POST['producto_descripcion_ingles'])){
// 	$producto_descripcion_ingles = htmlentities($_POST['producto_descripcion_ingles'],ENT_QUOTES);
// }
if(isset($_POST['producto_descripcion_ingles'])){
	$producto_descripcion_ingles = htmlspecialchars($_POST['producto_descripcion_ingles']);
	$producto_descripcion_ingles = html_entity_decode($_POST['producto_descripcion_ingles'], ENT_NOQUOTES, "UTF-8");
	// $producto_descripcion_ingles = strip_tags($_POST['producto_descripcion_ingles']);
	
}

if(isset($_POST['producto_categoria'])){
	$categoria_id = htmlspecialchars($_POST['categoria_id']);
}

if(isset($_FILES['producto_archivo']['tmp_name']) && $_FILES['producto_archivo']['tmp_name']!=''){
    if (!empty($_FILES['producto_archivo']['name'])) {
        $maxsize = 16777216; //equivale a 2mb
        if ($_FILES['producto_archivo']['size'] <= $maxsize) {
            $pdfURL = "app/docs/";
            if (!move_uploaded_file($_FILES['producto_archivo']['tmp_name'], $pdfURL . $newfile_pdf));
            @unlink("app/docs/".$producto_archivo_c);
            $producto_archivo = $newfile_pdf;
        } else {
            //$producto_archivo = $_POST['producto_archivo_c'];
        }
    }
}else{
	if (isset($producto_archivo_c)) {
		$producto_archivo = $producto_archivo_c;
	}
	
}



/*
*
* @module
* NOTICIA
*
*/
//Formulario
if(isset($_POST['noticia_id'])){
	$noticia_id = htmlspecialchars($_POST['noticia_id']);
}

if(isset($_POST['noticia_orden'])){
	$noticia_orden = htmlspecialchars($_POST['noticia_orden']);
}

if(isset($_POST['noticia_titulo'])){
	$noticia_titulo = htmlspecialchars($_POST['noticia_titulo']);
}

if(isset($_POST['noticia_subtitulo'])){
	$noticia_subtitulo = htmlspecialchars($_POST['noticia_subtitulo']);
}
if(isset($_POST['noticia_descripcion'])){
	$noticia_descripcion = htmlspecialchars($_POST['noticia_descripcion']);
	$noticia_descripcion = html_entity_decode($noticia_descripcion, ENT_NOQUOTES, "UTF-8");
}

if(isset($_POST['noticia_descripcion2'])){
	$noticia_descripcion2 = htmlspecialchars($_POST['noticia_descripcion2']);
	$noticia_descripcion2 = html_entity_decode($noticia_descripcion2, ENT_NOQUOTES, "UTF-8");
}

if(isset($_POST['noticia_descripcion3'])){
	$noticia_descripcion3 = htmlspecialchars($_POST['noticia_descripcion3']);
	$noticia_descripcion3 = html_entity_decode($noticia_descripcion3, ENT_NOQUOTES, "UTF-8");
}

// Archivos de imagen

// Para cuando no se modifica la imagen:
if(isset($_POST['noticia_imagen1_c'])){
	$noticia_imagen1_c = htmlspecialchars($_POST['noticia_imagen1_c']);
}

if(isset($_POST['noticia_imagen2_c'])){
	$noticia_imagen2_c = htmlspecialchars($_POST['noticia_imagen2_c']);
}

if(isset($_POST['noticia_imagen3_c'])){
	$noticia_imagen3_c = htmlspecialchars($_POST['noticia_imagen3_c']);
}

// imagen 1

$newnom_noticia = date("YmdHis"); // date le signa un nombre no repetitivo
$maxsize1_noticia = 500 * 600; // 300kb -> peso de la imagen
$newfile_img_noticia = $newnom_noticia.'.jpg'; // concatena

// si se modifica la imagen:
if(isset($_FILES['noticia_imagen']['tmp_name']) && $_FILES['noticia_imagen']['tmp_name']!=''){
	if (!empty($_FILES['noticia_imagen']['name'])) {
		if ($_FILES['noticia_imagen']['size'] <= $maxsize1_noticia) {
			$productoURL = "app/img/noticias/";
			if (!move_uploaded_file($_FILES['noticia_imagen']['tmp_name'], $productoURL . $newfile_img_noticia));
			@unlink("app/img/noticias/".$noticia_imagen1_c);
			$noticia_imagen = $newfile_img_noticia;

		}else{
			//$noticia_imagen = $_POST['noticia_imagen1_c'];
		}
	}
}else{ // si no se modifica la imagen:

	if (isset($noticia_imagen1_c)) {
		$noticia_imagen = $noticia_imagen1_c;
	}
	
}

// imagen 2 

$newnom_noticia2 = date("YmdHis"); // date le signa un nombre no repetitivo
$maxsize1_noticia2 = 500 * 600; // 300kb -> peso de la imagen
$newfile_img_noticia2 = $newnom_noticia2.'2.jpg'; // concatena

if(isset($_FILES['noticia_imagen2']['tmp_name']) && $_FILES['noticia_imagen2']['tmp_name']!=''){
	if (!empty($_FILES['noticia_imagen2']['name'])) {
		if ($_FILES['noticia_imagen2']['size'] <= $maxsize1_noticia2) {
			$noticiaURL = "app/img/noticias/";
			if (!move_uploaded_file($_FILES['noticia_imagen2']['tmp_name'], $noticiaURL . $newfile_img_noticia2));
			@unlink("app/img/noticias/".$noticia_imagen2_c);
			$noticia_imagen2 = $newfile_img_noticia2;

		}else{
			//$noticia_imagen = $_POST['noticia_imagen2_c'];
		}
	}
}else{
	if (isset($noticia_imagen2_c)) {
		$noticia_imagen2 = $noticia_imagen2_c;
	}
	
}

// imagen 3 

$newnom_noticia3 = date("YmdHis"); // date le signa un nombre no repetitivo
$maxsize1_noticia3 = 500 * 600; // 300kb -> peso de la imagen
$newfile_img_noticia3 = $newnom_noticia3.'3.jpg'; // concatena

if(isset($_FILES['noticia_imagen3']['tmp_name']) && $_FILES['noticia_imagen3']['tmp_name']!=''){
	if (!empty($_FILES['noticia_imagen3']['name'])) {
		if ($_FILES['noticia_imagen3']['size'] <= $maxsize1_noticia3) {
			$noticiaURL = "app/img/noticias/";
			if (!move_uploaded_file($_FILES['noticia_imagen3']['tmp_name'], $noticiaURL . $newfile_img_noticia3));
			@unlink("app/img/noticias/".$noticia_imagen3_c);
			$noticia_imagen3 = $newfile_img_noticia3;

		}else{
			//$noticia_imagen3 = $_POST['noticia_imagen3_c'];
		}
	}
}else{
	if (isset($noticia_imagen3_c)) {
		$noticia_imagen3 = $noticia_imagen3_c;
	}
	
}

if(isset($_POST['noticia_link_face'])){
	$noticia_link_face = htmlspecialchars($_POST['noticia_link_face']);
}

if(isset($_POST['noticia_activo'])){
	$noticia_activo = htmlspecialchars($_POST['noticia_activo']);
}
if(isset($_POST['noticia_titulo_ingles'])){
	$noticia_titulo_ingles = htmlspecialchars($_POST['noticia_titulo_ingles']);
	$noticia_titulo_ingles = html_entity_decode($_POST['noticia_titulo_ingles']);
}

if(isset($_POST['noticia_subtitulo_ingles'])){
	$noticia_subtitulo_ingles = htmlspecialchars($_POST['noticia_subtitulo_ingles']);
}

if(isset($_POST['noticia_descripcion_ingles'])){
	$noticia_descripcion_ingles = htmlspecialchars($_POST['noticia_descripcion_ingles']);
	$noticia_descripcion_ingles = html_entity_decode($noticia_descripcion_ingles, ENT_NOQUOTES, "UTF-8");
}

if(isset($_POST['noticia_descripcion2_ingles'])){
	$noticia_descripcion2_ingles = htmlspecialchars($_POST['noticia_descripcion2_ingles']);
	$noticia_descripcion2_ingles = html_entity_decode($noticia_descripcion2_ingles, ENT_NOQUOTES, "UTF-8");
}
if(isset($_POST['noticia_descripcion3_ingles'])){
	$noticia_descripcion3_ingles = htmlspecialchars($_POST['noticia_descripcion3_ingles']);
	$noticia_descripcion3_ingles = html_entity_decode($noticia_descripcion3_ingles, ENT_NOQUOTES, "UTF-8");
}
if(isset($_POST['noticia_fecha'])){
	$noticia_fecha = htmlspecialchars($_POST['noticia_fecha']);
}


/*
*
* @module
* EMPRESA
*
*/
//Formulario
if(isset($_POST['empresa_id'])){
	$empresa_id = htmlspecialchars($_POST['empresa_id']);
}

if(isset($_POST['empresa_orden'])){
	$empresa_orden = htmlspecialchars($_POST['empresa_orden']);
}

if(isset($_POST['empresa_activo'])){
	$empresa_activo = htmlspecialchars($_POST['empresa_activo']);
}

if(isset($_POST['empresa_nombre'])){
	$empresa_nombre = htmlspecialchars($_POST['empresa_nombre']);
}
if(isset($_POST['empresa_nombre_ingles'])){
	$empresa_nombre_ingles = htmlspecialchars($_POST['empresa_nombre_ingles']);
	$empresa_nombre_ingles = html_entity_decode($_POST['empresa_nombre_ingles']);
}


if(isset($_POST['empresa_descripcion1'])){
	$empresa_descripcion1 = htmlspecialchars($_POST['empresa_descripcion1']);
	$empresa_descripcion1 = html_entity_decode($empresa_descripcion1, ENT_NOQUOTES, "UTF-8");
}
if(isset($_POST['empresa_descripcion1_ingles'])){
	$empresa_descripcion1_ingles = htmlspecialchars($_POST['empresa_descripcion1_ingles']);
	$empresa_descripcion1_ingles = html_entity_decode($empresa_descripcion1_ingles, ENT_NOQUOTES, "UTF-8");
}


if(isset($_POST['empresa_descripcion2'])){
	$empresa_descripcion2 = htmlspecialchars($_POST['empresa_descripcion2']);
	$empresa_descripcion2 = html_entity_decode($empresa_descripcion2, ENT_NOQUOTES, "UTF-8");
}
if(isset($_POST['empresa_descripcion2_ingles'])){
	$empresa_descripcion2_ingles = htmlspecialchars($_POST['empresa_descripcion2_ingles']);
	$empresa_descripcion2_ingles = html_entity_decode($empresa_descripcion2_ingles, ENT_NOQUOTES, "UTF-8");
}

if(isset($_POST['empresa_descripcion3'])){
	$empresa_descripcion3 = htmlspecialchars($_POST['empresa_descripcion3']);
	$empresa_descripcion3 = html_entity_decode($empresa_descripcion3, ENT_NOQUOTES, "UTF-8");
}
if(isset($_POST['empresa_descripcion3_ingles'])){
	$empresa_descripcion3_ingles = htmlspecialchars($_POST['empresa_descripcion3_ingles']);
	$empresa_descripcion3_ingles = html_entity_decode($empresa_descripcion3_ingles, ENT_NOQUOTES, "UTF-8");
}

// Archivos de imagen

// Para cuando no se modifica la imagen:
if(isset($_POST['empresa_imagen1_c'])){
	$empresa_imagen1_c = htmlspecialchars($_POST['empresa_imagen1_c']);
}

if(isset($_POST['empresa_imagen2_c'])){
	$empresa_imagen2_c = htmlspecialchars($_POST['empresa_imagen2_c']);
}

if(isset($_POST['empresa_imagen3_c'])){
	$empresa_imagen3_c = htmlspecialchars($_POST['empresa_imagen3_c']);
}

// imagen 1

$newnom_empresa1 = date("YmdHis"); // date le signa un nombre no repetitivo
$maxsize1_empresa1 = 500 * 600; // 300kb -> peso de la imagen
$newfile_img_empresa1 = $newnom_empresa1.'.jpg'; // concatena

// si se modifica la imagen:
if(isset($_FILES['empresa_imagen1']['tmp_name']) && $_FILES['empresa_imagen1']['tmp_name']!=''){
	if (!empty($_FILES['empresa_imagen1']['name'])) {
		if ($_FILES['empresa_imagen1']['size'] <= $maxsize1_empresa1) {
			$productoURL = "app/img/empresas/";
			if (!move_uploaded_file($_FILES['empresa_imagen1']['tmp_name'], $productoURL . $newfile_img_empresa1));
			@unlink("app/img/empresas/".$empresa_imagen1_c);
			$empresa_imagen1 = $newfile_img_empresa1;

		}else{
			//$empresa_imagen1 = $_POST['empresa_imagen11_c'];
		}
	}
}else{ // si no se modifica la imagen:

	if (isset($empresa_imagen1_c)) {
		$empresa_imagen1 = $empresa_imagen1_c;
	}
	
}

// imagen 2 

$newnom_empresa2 = date("YmdHis"); // date le signa un nombre no repetitivo
$maxsize1_empresa2 = 500 * 600; // 300kb -> peso de la imagen
$newfile_img_empresa2 = $newnom_empresa2.'2.jpg'; // concatena

if(isset($_FILES['empresa_imagen2']['tmp_name']) && $_FILES['empresa_imagen2']['tmp_name']!=''){
	if (!empty($_FILES['empresa_imagen2']['name'])) {
		if ($_FILES['empresa_imagen2']['size'] <= $maxsize1_empresa2) {
			$empresaURL = "app/img/empresas/";
			if (!move_uploaded_file($_FILES['empresa_imagen2']['tmp_name'], $empresaURL . $newfile_img_empresa2));
			@unlink("app/img/empresas/".$empresa_imagen2_c);
			$empresa_imagen2 = $newfile_img_empresa2;

		}else{
			//$empresa_imagen = $_POST['empresa_imagen2_c'];
		}
	}
}else{
	if (isset($empresa_imagen2_c)) {
		$empresa_imagen2 = $empresa_imagen2_c;
	}
	
}

// imagen 3 

$newnom_empresa3 = date("YmdHis"); // date le signa un nombre no repetitivo
$maxsize1_empresa3 = 500 * 600; // 300kb -> peso de la imagen
$newfile_img_empresa3 = $newnom_empresa3.'3.jpg'; // concatena

if(isset($_FILES['empresa_imagen3']['tmp_name']) && $_FILES['empresa_imagen3']['tmp_name']!=''){
	if (!empty($_FILES['empresa_imagen3']['name'])) {
		if ($_FILES['empresa_imagen3']['size'] <= $maxsize1_empresa3) {
			$empresaURL = "app/img/empresas/";
			if (!move_uploaded_file($_FILES['empresa_imagen3']['tmp_name'], $empresaURL . $newfile_img_empresa3));
			@unlink("app/img/empresas/".$empresa_imagen3_c);
			$empresa_imagen3 = $newfile_img_empresa3;

		}else{
			//$empresa_imagen3 = $_POST['empresa_imagen3_c'];
		}
	}
}else{
	if (isset($empresa_imagen3_c)) {
		$empresa_imagen3 = $empresa_imagen3_c;
	}
	
}

if(isset($_POST['empresa_link_face'])){
	$empresa_link_face = htmlspecialchars($_POST['empresa_link_face']);
}


?>