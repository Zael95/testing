<?php 
//
require_once 'intranet/common/config.php';
require_once 'intranet/models/general.class.php';
include 'models/web.class.php';
include 'functions/functions.php';
$obj = new Catalogo_web();



	$arg = array(
		$noticia_id
	);


	//Listado de categorias/subcategorias
	// $listaCategoria = $obj->listaCategoria($arg);

	//Listado de productos
	$listaNoticias = $obj->listaNoticias($arg);

	// echo '<br>noticia_id---->'.$noticia_id; 

	$visibleP='visible';
	$alertP = '';
	if($listaNoticias=='0'){
		# Sección de productos
		$alertP = '
			<br><br>
			<div class="alert-info text-center section-general"><b> No se encontraron noticias.</b></div>
		';
		$visibleP = 'hidden';
	}

	// $totalNoticias = $obj->totalNoticias();
	// echo "total de noticias: ".$totalNoticias;

	// $total = $totalNoticias;
	// $limit = 3;
	// $pag = 1;
	// $btn_op = 1;

	// $paginador = paginator($total,$limit,$pag,$btn_op);


/*** paginador ***/

	$totalNoticias = $obj->totalNoticias();

	$pagina_actual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

	$postPorPagina = 6;

	$inicio = ($pagina_actual > 1)? (($pagina_actual - 1)*$postPorPagina) : 0;

	$numeroPaginas = ceil($totalNoticias / $postPorPagina);

	$noticiasPorPagina = $obj->noticiasXpagina($inicio,$postPorPagina);

	$noticiasPorPagina_ingles = $obj->noticiasXpaginaIngles($inicio,$postPorPagina);

	// $vistaPaginador = $obj->paginadorNoticia();


/*** fin de paginador ***/

$view = $path['views'].basename($_SERVER['PHP_SELF']); 
require $path['tpl'].'template.php'; 
?>