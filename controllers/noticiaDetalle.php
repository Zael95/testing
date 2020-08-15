<?php 

require_once 'intranet/common/config.php';
require_once 'intranet/models/general.class.php';
include 'models/web.class.php';
include 'functions/functions.php';
$obj = new Catalogo_web();

$noticia_id = $_GET['noticia-id'];

$arg = array($noticia_id);

// echo '-->'.$noticia_id;

if (isset($_GET['vista'])) {
	if ($_GET['vista'] == 'vistainicio') {
		$vistaRegreso = "inicio.php";
	}
	if ($_GET['vista'] == 'vistanoticias') {
		$vistaRegreso = "noticias.php";
	}
}


$resultDetalle2 = $obj->detalleNoticia($arg);

$htmlTitulo = $resultDetalle2[0];
$htmlTituloIngles = $resultDetalle2[1];

$htmlSubtitulo = $resultDetalle2[2];
$htmlSubtituloIngles = $resultDetalle2[3];

$htmlDescripcion1 = $resultDetalle2[4];
$htmlDescripcion2 = $resultDetalle2[5];
$htmlDescripcion3 = $resultDetalle2[6];

$htmlDescripcionIngles1 = $resultDetalle2[7];
$htmlDescripcionIngles2 = $resultDetalle2[8];
$htmlDescripcionIngles3 = $resultDetalle2[9];

$htmlFace = $resultDetalle2[10];
$htmlFecha = $resultDetalle2[11];

$htmlOrden = $resultDetalle2[12];

$htmlImgNotNombre1 = $resultDetalle2[13];
$htmlImgNotNombre2 = $resultDetalle2[14];
$htmlImgNotNombre3 = $resultDetalle2[15];

$arg2=array(
	$noticia_id
);


/***************************************************************/

// Dos productos con orden mínimo: (dos más recientes)

$DosNotOrdenMin = $obj->dosNoticiasMasRecientes($htmlOrden);
// echo '-->'.$DosNotOrdenMin;

$view = $path['views'].basename($_SERVER['PHP_SELF']);
require $path['tpl'].'template.php'; 
?>