<?php 

require_once 'intranet/common/config.php';
require_once 'intranet/models/general.class.php';
include 'models/web.class.php';
include 'functions/functions.php';
$obj = new Catalogo_web();

$empresa_id = $_POST['empresa-id'];

$arg = array($empresa_id);

// echo '-->'.$empresa_id;

$resultDetalle2 = $obj->detalleEmpresa($arg);

$htmlOrden = $resultDetalle2[0];
$htmlNombre = $resultDetalle2[1];
$htmlNombreIngles = $resultDetalle2[2];

$htmlDescripcion1 = $resultDetalle2[3];
$htmlDescripcionIngles1 = $resultDetalle2[4];
$htmlDescripcion2 = $resultDetalle2[5];
$htmlDescripcionIngles2 = $resultDetalle2[6];
$htmlDescripcion3 = $resultDetalle2[7];
$htmlDescripcionIngles3 = $resultDetalle2[8];

$htmlImgEmpNombre1 = $resultDetalle2[9];
$htmlImgEmpNombre2 = $resultDetalle2[10];
$htmlImgEmpNombre3 = $resultDetalle2[11];

$htmlLinkFace = $resultDetalle2[12];


/***************************************************************/

$view = $path['views'].basename($_SERVER['PHP_SELF']);
require $path['tpl'].'template.php'; 
?>