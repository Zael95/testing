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

						 <?php  if($htmlImgEmpNombre1 != ''){ ?>
						    <div class="<?= $empDetSlider1; ?> item active notDet-slider1 col-xs-12" style="background-image: url('intranet/view/app/img/empresas/<?= $htmlImgEmpNombre1; ?>');">
						    	<div class="ini-fondo-txt col-xs-12">
			
						    	</div>				    
						    </div>
						  <?php } ?>

						 <?php  if($htmlImgEmpNombre2 != ''){ ?>
						    <div class="<?= $empDetSlider2; ?> item notDet-slider2 col-xs-12" style="background-image: url('intranet/view/app/img/empresas/<?= $htmlImgEmpNombre2; ?>');">
						    	<div class="ini-fondo-txt col-xs-12">
			
						    	</div>  	
						    </div>
						  <?php } ?>

						 <?php  if($htmlImgEmpNombre3 != ''){ ?>
						    <div class="<?= $empDetSlider3; ?> item notDet-slider3 col-xs-12" style="background-image: url('intranet/view/app/img/empresas/<?= $htmlImgEmpNombre3; ?>');">
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
								echo $htmlNombre;
							}
							if ($site['lang'] == 'en') {
								echo $htmlNombreIngles;
							}
						 ?>
						<!-- NUESTRO CULTIVO -->
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
			<div style="margin-bottom: 30px;" class="notDet-sect2-parr2 col-xs-12">
				<?php 
					if($site['lang'] == 'es'){
						echo $htmlDescripcion3;
						}
					if ($site['lang'] == 'en') {
						echo $htmlDescripcion3Ingles;
					}
				?>
			</div>
			<div class="empDet-sect2-parr2 col-xs-12">
				<div class="col-xs-12 empDet-sect2-recuadro">
					<div class="col-xs-12" style="padding: 0 15px">
						<div class="rutas-mapa-contenedor empDet-mapa-contenedor col-xs-12" style="padding: 0">
							<div class="rutas-mapa" id="gmap"></div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="col-xs-12 empDet-padding">
							<div class="col-xs-12 empDet-sect2-tit">
								Rutas
							</div>
							<div class="col-xs-12 empDet-txt">
								<!-- <?php 
									if($site['lang'] == 'es'){
										echo $htmlDescripcion3;
										}
									if ($site['lang'] == 'en') {
										echo $htmlDescripcion3Ingles;
									}
								?>	  -->
								<div class="col-xs-12">
									<div class="col-xs-6 col-sm-4 col-md-3">
										Ruta de ida:
									</div>
									<div class="rutas-sect3-color col-xs-6 col-sm-8 col-md-9 ">
										<div class="col-xs-12 rutas-sect3-verde">
											
										</div>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="col-xs-6 col-sm-4 col-md-3">
										Ruta de regreso:
									</div>
									<div class="rutas-sect3-color col-xs-6 col-sm-8 col-md-9">
										<div class="col-xs-12 rutas-sect3-azul">
											
										</div>	
									</div>
								</div>
								
								<br><br><br>
								<div class="col-xs-12" style="font-size: 25px; font-weight: bold">
									Paraderos y costos de pasaje
								</div>
								<div class="col-xs-12">
									<table>
										<tr>
											<th>Paradero 1</th>
											<th></th>
											<th>Paradero 2</th>
											<th>Costo</th>
										</tr>
										<tr>
											<td>paradero 1</td>
											<td> --> </td>
											<td>paradero 2</td>
											<td>S/. 2.00</td>
										</tr>
										<tr>
											<td>paradero 1</td>
											<td> --> </td>
											<td>paradero 2</td>
											<td>S/. 2.00</td>
										</tr>
										<tr>
											<td>paradero 1</td>
											<td> --> </td>
											<td>paradero 2</td>
											<td>S/. 2.00</td>
										</tr>
										<tr>
											<td>paradero 1</td>
											<td> --> </td>
											<td>paradero 2</td>
											<td>S/. 2.00</td>
										</tr>
										<tr>
											<td>paradero 1</td>
											<td> --> </td>
											<td>paradero 2</td>
											<td>S/. 2.00</td>
										</tr>
										<tr>
											<td>paradero 1</td>
											<td> --> </td>
											<td>paradero 2</td>
											<td>S/. 2.00</td>
										</tr>
									</table>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="notDer-sect2-fecha-btn col-xs-12">
				<div class="notDet-sect2-fb-fecha col-xs-12 col-sm-6">
					<a href="<?= $htmlLinkFace; ?>" target="_blank">
						<img src="app/img/noticiaDetalle/fb.png" alt="">
					</a>
				</div>
				<div class="notDet-sect2-btn col-xs-12 col-sm-6">
					<a class="notDet-sect2-btnRegresar" href="empresas.php">Regresar</a>
				</div>
			</div>
		</div>
		<div class="notDet-sect2-margenes col-xs-12">	
		</div>	
	</div>
	
	</div>	
</div>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBWTqbyGQEG91zL0IeVEuPi3ZTGvji0TE8"></script>
<script>
    init = function() {
      var addMarker, map, mapElement, mapOptions, myLatlng;
      myLatlng = new google.maps.LatLng(-12.053353, -77.085605);
      mapOptions = {
        zoom: 17,
        center: myLatlng,
        scrollwheel: false,
        panControl: false,
        zoomControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        overviewMapControl: false,
        styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"saturation":-100},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"on"},{"saturation":-100},{"lightness":40}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"saturation":-10},{"lightness":30}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":-60},{"lightness":10}]},{"featureType":"landscape.natural","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":-60},{"lightness":60}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"},{"saturation":-100},{"lightness":60}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"},{"saturation":-100},{"lightness":60}]}],
      };
      mapElement = document.getElementById('gmap');
      map = new google.maps.Map(mapElement, mapOptions);
      addMarker = function() {
        var marker;
        marker = new google.maps.Marker({
          map: map,
          position: myLatlng,
          draggable: false,
          title: 'Template CCL',
          icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
        });
      };
      google.maps.event.addDomListener(window, 'resize', function() {
        map.setCenter(myLatlng);
      });
      addMarker();
    };

    google.maps.event.addDomListener(window, 'load', init);
  </script>
