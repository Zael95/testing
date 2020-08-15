<?php 

require_once 'intranet/common/config.php';
require_once 'intranet/models/general.class.php';
include 'models/web.class.php';
include 'functions/functions.php';
$obj = new Catalogo_web();

$noticia_id = $_POST['noticia-id'];

$arg = array($noticia_id);



$arg2=array(
	$noticia_id
);


// echo '-->'.$DosNotOrdenMin;

$view = $path['views'].basename($_SERVER['PHP_SELF']);
require $path['tpl'].'template.php'; 
?>