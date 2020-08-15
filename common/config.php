<?php
error_reporting(E_ALL ^ E_NOTICE);
header("Content-type:text/html; charset=utf-8");
define("SLASH", "/");
define("SLASH_SUP", "../");
$site = array(
    "charset" => "UTF-8",
    "lang" => "es",
    "name" => "Kuyay",
    "keywords" => "",
    "description" => "Información de la empresa"
);

if($_GET['prod']){
    $prod='?prod='.$_GET['prod'];
}else{
    $prod='';
}
if($_GET['cat']){
    $cat='?cat='.$_GET['cat'];
}else{
    $cat='';
}

if(isset($_GET['lang'])){//segun la variable lang se envia cookie
    $site['lang']=$_GET['lang'];
    setcookie("lang",$site["lang"],time()+86400);

        header("Location: ".basename($_SERVER['PHP_SELF']).$cat.$prod); // $cat y $prod son variables condicionadas y definidas arriba

} else {
    if(isset($_COOKIE['lang'])){
        $site['lang']=$_COOKIE['lang'];
    }
}

$path = array(
    "controllers" => "controllers" . SLASH,
    "css" => "app/css" . SLASH,
    "img" => "app/img" . SLASH,
    "js" => "app/js" . SLASH,
    "module" => "module" . SLASH,
    "tpl" => "tpl" . SLASH,
    "views" => "views" . SLASH,
    "common" => "common" . SLASH,
    "lib" => "common" . SLASH . "lib" . SLASH,
    "lang" => "common" . SLASH . "lang" . SLASH
);
$contact = array(
    "msgok" => "No se pudo enviar el mensaje, intentelo de nuevo.",
    "msgerror" => "El mensaje se envio correctamente, en breve nos pondremos en contacto con usted."
);
if (!isset($_POST['nombre'])) {
  include $path['lang'] . 'lang_' . $site['lang'] . '.php';
}

    // echo '--->'.$site['lang'];
    // $es_activo = "";
    // $en_activo = "";

    // if($site['lang'] == 'es'){
    //     $es_activo = "active";
    //     echo "<br>español";
    // }
    // if ($site['lang'] == 'en') {
    //     $en_activo = "active";
    //     echo "<br>inglessssss";
    // }



?>