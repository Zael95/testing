<?php
$ini=0;
switch (basename($_SERVER['PHP_SELF'])) {
    case "inicio.php": 
      $ini="class='h-active'"; 
    break;
} 
?>

<header><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">	

 <!--  <nav>
   HEADER
  </nav> -->
  <?php
$ini=$emp=$rut=$que=$cont=0;
switch (basename($_SERVER['PHP_SELF'])) {
    case "inicio.php":
      $ini="class='h-active'";
    break;

    case "noticiaDetalle.php":
      $ini="class='h-active'";
    break;

    case "empresas.php":
      $emp="class='h-active'";
    break;

    case "empresaDetalle.php":
      $emp="class='h-active'";
    break;

    case "rutas.php":
      $rut="class='h-active'";
    break;
    case "rutasDetalle.php":
      $rut="class='h-active'";
    break;

    case "quejas.php":
      $que="class='h-active'";
    break;
    case "quejasDetalle.php":
      $que="class='h-active'";
    break;

    case "contactenos.php":
      $cont="class='h-active'";
    break;
}
?>
<header>
	<section class="h-back1 hidden-xs hidden-sm">
		<div class="container h-contenedor">
			<div class="col-xs-12">
				<div class="col-xs-12 col-md-3 h-logo">
					<a href="index.php">
						<img id="h-logo" style="height: 75px;" class="img-responsive h-img-logo" src="app/img/home/logo.png" alt="">
					</a>
				</div>

        <!-- Redes sociales para tablet -->
        <!--
        <div class="h-redesSoc ini-tablet visible-sm">
          <a href="http://www.facebook.com" target="_blank"><img src="app/img/home/facebook.png"></a>
          <a href="http://www.twitter.com" target="_blank"><img src="app/img/home/twitter.png"></a>
          <a href="http://www.linkedin.com" target="_blank"><img src="app/img/home/linkedin.png"></a>

        </div>
    -->

				<div class="col-xs-12 col-md-9 np">
					<nav class="navbar navbar-default">
					  <div class="container-fluid header-container">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->

					    <!-- Menu para pc -->
					    <div class="collapse navbar-collapse header-collapse" id="bs-example-navbar-collapse-1">

                <!-- <a class="<?= $es_activo; ?>" href="inicio.php?lang=es" style="font-size: 20px">es</a> /
                   <a class="<?= $es_activo; ?>" href="inicio.php?lang=en" style="font-size: 20px">en</a> -->

					      <ul class="nav navbar-nav">  
					        <li <?php echo $ini ?> ><a class="h-opcs h-opcs1" href="index.php"><?= $lang['menu'][0]; ?></a></li>
					        <li <?php echo $emp ?> ><a class="h-opcs h-opcs2" href="empresas.php"><?= $lang['menu'][1]; ?></a></li>
					        <li <?php echo $rut ?> ><a class="h-opcs h-opcs3" href="rutas.php"><?= $lang['menu'][2]; ?></a></li>
					        <li <?php echo $que ?> ><a class="h-opcs h-opcs4" href="quejas.php"><?= $lang['menu'][3]; ?></a></li>
					        <li <?php echo $cont ?> ><a class="h-opcs h-opcs5" href="contactenos.php"><?= $lang['menu'][4]; ?></a></li>
					        <li class="idioma hidden-xs">
						       <!-- <a class="" href="">Es</a> /
						       <a href=""> En</a> -->
						       <?php 
                      if($site['lang'] == 'es'){
                          $es_activo = "idiomaActivo";
                        }
                      if ($site['lang'] == 'en') {
                          $en_activo = "idiomaActivo";
                      }
                    ?>
                   <a class="hIdiomaActivo" href="inicio.php?lang=es"><span class=" <?= $es_activo; ?> h-hover-idioma h-hover-idioma1">ES</span><span class="h-slash">/</span>  </a><a class="h-idiomaActivo" href="inicio.php?lang=en"> <span class="<?= $en_activo; ?> h-hover-idioma h-hover-idioma2"> EN</span></a>
                   
       						</li>
					      </ul>
					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
				</div>
        <!-- Redes Sociales -->
        <!-- <div class="redesSoc col-xs-12 col-md-1"> -->
<!--
        <div class="redesSoc hidden-sm col-md-1">
          <div class=" col-xs-offset-5 col-xs-1 col-md-offset-0 col-md-4 facebookimg">
            <a href="http://www.facebook.com" target="_blank"><img src="app/img/home/facebook.png"></a>
          </div>
          <div class=" col-xs-1 col-md-4 twitterimg">
            <a href="http://www.twitter.com" target="_blank"><img src="app/img/home/twitter.png"></a>
          </div>
          <div class="col-xs-1 col-md-4 linkedinimg">
            <a href="http://www.linkedin.com" target="_blank"><img src="app/img/home/linkedin.png"></a>
          </div>
        </div>
    -->
			</div>
		</div>
	</section>
	<section class="section-general section-header-rp visible-xs visible-sm">
	  <div class="col-xs-3">
	    <a href="index.php">
	      <img style="height: 59px;" class="logo-menu-rp" src="app/img/home/logo.png">
	    </a>
	  </div>
	  <div class="sec-menu-rp">
	    <button class="btn-menu-rp" id="btn-open-menu">
	      <div class="line-btn-menu-rp"></div>
	      <div class="line-btn-menu-rp"></div>
	      <div class="line-btn-menu-rp"></div>
	    </button>
	  </div>
	</section>
</header>

<!-- Menu Responsive Movil -->
<!-- Contenido de menu rp -->
<section class="menu-rp">
  <div class="col-xs-12 sec-close-menu text-right">
    <button class="btn-close-menu no-btn" id="btn-close-menu">
      <span class="menu-rp-btn"></span>
    </button>
  </div>

<!-- por mientras lo comento -->
  <div class="col-xs-12 text-center sec-lista-menu-rp visible-xs visible-sm">
    <div class="section-block sec-link-menu-rp">
      <a href="index.php">
        <?= $lang['menu'][5]; ?>
      </a>
    </div>
    <div class="section-block sec-link-menu-rp">
      <a href="empresas.php">
        <?= $lang['menu'][7]; ?>
      </a>
    </div>
    <div class="section-block sec-link-menu-rp">
      <a href="rutas.php">
        <?= $lang['menu'][6]; ?>
      </a>
    </div>
    <div class="section-block sec-link-menu-rp">
      <a href="quejas.php">
        <?= $lang['menu'][8]; ?>
      </a>
    </div>
    <div class="section-block sec-link-menu-rp">
      <a href="contactenos.php">
        <?= $lang['menu'][9]; ?>
      </a>
    </div>
  </div>
</section>

<script>
    $(document).ready(function(){
        setTimeout(
            function(){
                $('.cc1').css('opacity','1');
                $('.cc2').css('opacity','1');
            }
        , 1000);
        setTimeout(
            function(){
                $('.cc4').css('transition','all 0s');
                $('.cc5').css('transition','all 0s');
                $('.cc4').css('transform','rotate(90deg)');
                $('.cc5').css('transform','rotate(-90deg)');
                $('.ltr').css('opacity','1');
            }
        , 2000);
        setTimeout(
            function(){
                $('.ltr').css('opacity','1');
            }
        , 1200);
    });
</script>

</header>



