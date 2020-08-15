<?php 

require_once 'intranet/common/config.php';
require_once 'intranet/models/general.class.php';
include 'models/web.class.php';
include 'functions/functions.php';
$obj = new Catalogo_web();

	$arg = array(
		$empresa_id
	);


	//Listado de categorias/subcategorias
	// $listaCategoria = $obj->listaCategoria($arg);

	//Listado de productos
	$listaempresas = $obj->listaEmpresas($arg);

	// echo '<br>empresa_id---->'.$empresa_id; 

	$visibleP='visible';
	$alertP = '';
	if($listaempresas=='0'){
		# Sección de productos
		$alertP = '
			<br><br>
			<div class="alert-info text-center section-general"><b> No se encontraron productos.</b></div>
		';
		$visibleP = 'hidden';
	}

	// $totalempresas = $obj->totalempresas();
	// echo "total de empresas: ".$totalempresas;

	// $total = $totalempresas;
	// $limit = 3;
	// $pag = 1;
	// $btn_op = 1;

	// $paginador = paginator($total,$limit,$pag,$btn_op);


/*** paginador ***/

	$totalempresas = $obj->totalEmpresas();

	$pagina_actual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

	$postPorPagina = 4;

	$inicio = ($pagina_actual > 1)? (($pagina_actual - 1)*$postPorPagina) : 0;

	$numeroPaginas = ceil($totalempresas / $postPorPagina);

	$empresasPorPagina = $obj->empresasXpagina($inicio,$postPorPagina);
	$empresasPorPaginaIngles = $obj->empresasXpaginaIngles($inicio,$postPorPagina);

	// $vistaPaginador = $obj->paginadorempresa();


/*** fin de paginador ***/



$view = $path['views'].basename($_SERVER['PHP_SELF']); 
require $path['tpl'].'template.php'; 
?>