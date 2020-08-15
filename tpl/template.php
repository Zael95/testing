<!DOCTYPE html>
<html lang=en-US>
<head>
  <meta charset="<?php echo $site['charset']; ?>">
  <meta lang="<?php echo $site['lang']?>">
  <meta name="keywords" content="<?php echo $site['keywords']; ?>" > 
  <!--<link rel="shortcut icon" href="./app/img/favicon.png" type="image/x-icon">-->
  <meta name="description" content="<?php echo $site['description']; ?>" >

  <!-- configuración para compartir noticias en facebook -->
  <!-- <meta property="og:url"                content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" /> -->
  <meta property="og:type"               content="article" />
  <meta property="og:title"              content="$htmlTitulo" />
  <meta property="og:description"        content="$htmlSubtitulo" />
  <meta property="og:image"              content="$htmlImg1" />
  <!-- Fin configuración para compartir noticias en facebook -->

  <title>Tu Transporte</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="app/css/bxslider.css"/>
  <link rel="stylesheet" href="app/css/fancybox.css"/>
  <link rel="stylesheet" href="app/css/bootstrap.css"/>
  <link rel="stylesheet" href="app/css/demo.css"/>
  <link rel="stylesheet" href="app/css/style.css"/>
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">

  <script src="app/js/jquery.js"></script>
  <script src="app/js/fancybox.js"></script>
  <script src="app/js/bootstrap.js"></script>
  <script src="app/js/bxslider.js"></script>
  <script src="app/js/parallax.js"></script>
  <script src="app/js/app.js"></script>

</head>
<body>
  <?php include $path['tpl'].'header.php'; ?>
  <?php include $path['tpl'].'main.php'; ?>
  <?php include $path['tpl'].'footer.php'; ?>
</body>
</html>