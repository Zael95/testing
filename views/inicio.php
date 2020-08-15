<div class="section_general">
	 <!-- Sección Body 
	<a class="fancybox" href="app/img/slider1.jpg">
	 Ejemplo Fancybox
	</a>
	<a href="nosotros.php">Nosotros</a> -->
	<div class="ini-sect1-slider col-xs-12">
	</div>
		<div class="ini-sect-2 col-xs-12 np">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  
			  <ol class="carousel-indicators ini-slider-botones visible-md visible-lg">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>
				
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active ini-sect1-slider1 col-xs-12">
				    
			    </div>
			    <div class="item ini-sect1-slider2 col-xs-12">
			      	
			    </div>
			    <div class="item ini-sect1-slider3 col-xs-12">

			    </div>
			  </div>

				<div class="ini-noticias col-xs-12">
					
				  <div class="container">
				  	<div class="col-xs-12">
				  		<div class="not-sect2-noticias col-xs-12">
							<?= $lang['inicio']['ini1']; ?>
						</div>

						<?php  
							 if($site['lang'] == 'es'){
						         echo $alertP;
						     }
						     if ($site['lang'] == 'en') {
						         echo $alertPIngles;
						     }
						?>
						<div class="sec-list-prod <?= $visibleP; ?>">
							<?php  
							 if($site['lang'] == 'es'){
						         echo $noticiasPorPagina;
						     }
						     if ($site['lang'] == 'en') {
						         echo $noticiasPorPagina_ingles;
						     }
						    ?>
						</div>

						<div class="not-paginador col-xs-12">
							
						<?php 

							for ($i=1; $i <= $numeroPaginas; $i++) { 
								if ($i == $pagina_actual) { // Si estamos en la página actual...
									echo "<span class='activePaginador not-paginador-num'><a href='?pagina=$i'>$i</a></span>"; // Lo mostramos activado.
								}else{ // sino solo mostramos sin activar.
									echo "<span class='not-paginador-num'><a href='?pagina=$i'>$i</a></span>";
								}
							}

						 ?>

			
						</div>
					</div>
				  </div>
				</div>
			</div>
		</div>
</div>
	