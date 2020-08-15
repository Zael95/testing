<div class="noticiaDetalle col-xs-12">
	<div class="notDet-sect1 not-sect1 col-xs-12">
			
	</div>
	<div class="nos-fondo col-xs-12">
	<div class="notDet-sect2 col-xs-12">
		<div class="notDet-espaciosLat col-xs-12 col-md-offset-1 col-md-10">
			<div class="notDet-sect2-contenedor col-xs-12">
				<div class="notDet-sect2-izq col-xs-12 col-sm-6 col-md-7">
<!-- 					<div class="col-xs-12 np"> -->
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
							
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">

						 <?php  if($htmlImgNotNombre1 != ''){ ?>
						    <div class="<?= $notDetSlider1; ?> item active notDet-slider1 col-xs-12" style="background-image: url(<?= $htmlImg1; ?>);">
						    	<div class="ini-fondo-txt col-xs-12">
			
						    	</div>				    
						    </div>
						  <?php } ?>

						 <?php  if($htmlImgNotNombre2 != ''){ ?>
						    <div class="<?= $notDetSlider2; ?> item notDet-slider2 col-xs-12" style="background-image: url(<?= $htmlImg2; ?>);">
						    	<div class="ini-fondo-txt col-xs-12">
			
						    	</div>  	
						    </div>
						  <?php } ?>

						 <?php  if($htmlImgNotNombre3 != ''){ ?>
						    <div class="<?= $notDetSlider3; ?> item notDet-slider3 col-xs-12" style="background-image: url(<?= $htmlImg3; ?>);">
						    	<div class="ini-fondo-txt col-xs-12">
			
						    	</div>				      	
						    </div>
						  <?php } ?>
						  </div>

						  <!-- controls -->
						  <a class="left carousel-control notDet-carouselControl" href="#carousel-example-generic" role="button" data-slide="prev">
						  	<span class="notDet-flecha-izq gliphicon glyphicon-chevron-left" aria-hidden="true"></span>
						  	<span class="sr-only">Previus</span>
						  </a>
						  <a class="right carousel-control notDet-carouselControl" href="#carousel-example-generic" role="button" data-slide="next">
						  	<span class="notDet-flecha-der gliphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  	<span class="sr-only">Previus</span>
						  </a>
						<!-- </div> -->
					</div>
				</div>

				<div class="notDet-sect2-der col-xs-12 col-sm-6 col-md-5">
					<div class="notDet-sect2-tit col-xs-12">
						<?php 
							if($site['lang'] == 'es'){
								echo $htmlTitulo;
							}
							if ($site['lang'] == 'en') {
								echo $htmlTituloIngles;
							}
						 ?>
						<!-- NUESTRO CULTIVO -->
					</div>
					<div class="notDet-sect2-desc col-xs-12">
						<span class="notDet-sect2-bordebajo">
							<?php 
								if($site['lang'] == 'es'){
									echo $htmlSubtitulo;
								}
								if ($site['lang'] == 'en') {
									echo $htmlSubtituloIngles;
								}
							 ?>
							<!-- Lorem ipsum dolor sit ament, consectetur adipiscing. -->
						</span>
						<div class="notDet-sect2-subr col-xs-12"></div>
					</div>
					<div class="notDet-sect2-parr1 col-xs-12">
						<?php 
							if($site['lang'] == 'es'){
								echo $htmlDescripcion2;
								}
							if ($site['lang'] == 'en') {
								echo $htmlDescripcion2Ingles;
							}
						?>
					
					</div>
				</div>
			</div>
			<div class="notDet-sect2-parr2 col-xs-12">
				<?php 
					if($site['lang'] == 'es'){
						echo $htmlDescripcion3;
						}
					if ($site['lang'] == 'en') {
						echo $htmlDescripcion3Ingles;
					}
				?>

			</div>

			<?php if($noticia_id == 24){ ?>
				<div class="col-xs-12" style="margin-top: 50px; margin-bottom: 60px; ">
					<center>
						<!-- width="560"(16) height="315"(9) -->
						<iframe class="video-yt" src="https://www.youtube.com/embed/1wY35_gfwPk?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</center>
				</div>
			<?php } ?>

			<div class="notDer-sect2-fecha-btn col-xs-12">
				<div class="notDet-sect2-fb-fecha col-xs-12 col-sm-6">
					<img src="app/img/noticiaDetalle/fb.png" alt="">
						<span class="notDet-sect2-fecha">
							<?php 
								if($site['lang'] == 'es'){
									echo $htmlFecha;
									}
								if ($site['lang'] == 'en') {
									echo $htmlFechaIngles;
								}
							?>

							<!-- 15 / 04 / 2018 -->
						</span>
				</div>
				<div class="notDet-sect2-btn col-xs-12 col-sm-6">
					<a class="notDet-sect2-btnRegresar" href="quejas.php"><?= $lang['notDetalle']['notDet1']; ?></a>
				</div>
			</div>
		</div>
		<div class="notDet-sect2-margenes col-xs-12">	
		</div>	
	</div>

	<div class="notDet-sect3 col-xs-12">
		<div class="notDet-espaciosLat col-xs-12 col-md-offset-1 col-md-10">
			<div class="notDet-sect3-masnoticias col-xs-12">
				<!-- <?= $lang['notDetalle']['notDet2']; ?> -->
				Otras Historias
			</div>
			<div class="col-xs-12" style="padding: 0;">

				<?php 
					if($site['lang'] == 'es'){
						echo $DosNotOrdenMin;
						}
					if ($site['lang'] == 'en') {
						echo $DosNotOrdenMinIngles;
					}
				?>

			</div>
		</div>
		<div class="notDet-sect3-margenes col-xs-12 col-sm-offset-3 col-sm-6">
		</div>
	</div>
	</div>	
</div>
