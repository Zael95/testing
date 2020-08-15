<?php 

require_once 'intranet/common/config.php';
require_once 'intranet/models/general.class.php';
include 'models/web.class.php';
include 'functions/functions.php';
$obj = new Catalogo_web();

$quejas_id = $_POST['quejas-id'];

$arg = array($quejas_id);

// echo '-->'.$quejas_id;

$resultDetalle2 = $obj->detallequejas($arg);

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

$htmlImg1 = $resultDetalle2[10];
$htmlImg2 = $resultDetalle2[11];
$htmlImg3 = $resultDetalle2[12];

$htmlFace = $resultDetalle2[13];
$htmlFecha = $resultDetalle2[14];

$htmlOrden = $resultDetalle2[15];

$htmlImgNotNombre1 = $resultDetalle2[16];
$htmlImgNotNombre2 = $resultDetalle2[17];
$htmlImgNotNombre3 = $resultDetalle2[18];

$arg2=array(
	$quejas_id
);

/***************************************************************/

// Dos productos con orden mínimo: (dos más recientes)

$DosNotOrdenMin = $obj->dosquejasMasRecientes($htmlOrden);
// echo '-->'.$DosNotOrdenMin;

$view = $path['views'].basename($_SERVER['PHP_SELF']);
require $path['tpl'].'template.php'; 
?>