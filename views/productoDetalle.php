
<div class="productoDetalle nos-fondo col-xs-12">
	<div class="prodDet-set1 pro-sect1 col-xs-12">
	</div>
	
	<div class="proDetalle-sect2 hidden-sm col-xs-12 col-md-offset-1 col-md-10">
		<div class="col-xs-12">
			<div class="hidden-xs proDetalle-sect2-izq col-xs-12 col-sm-6">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  
						  <ol class="proDetalle-circulos carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="proDetalle-active active <?= $pag1; ?>" ></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1" class="<?= $pag2; ?>"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2" class="<?= $pag3; ?>"></li>
						  </ol>
							
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						 
						 	<?php  if($htmlImgNombre1 != ''){ ?>
						    <div class="item active proDet-slider1 col-xs-12" style="background-image: url(<?= $htmlImg1; ?>);">
						    	<div class="ini-fondo-txt col-xs-12">
			
						    	</div>				    
						    </div>
						    <?php } ?>

						    <?php  if($htmlImgNombre2 != ''){ ?>
						    <div class="item proDet-slider2 col-xs-12" style="background-image: url(<?= $htmlImg2; ?>);">
						    	<div class="ini-fondo-txt col-xs-12">
			
						    	</div>  	
						    </div>
							<?php } ?>

						    <?php  if($htmlImgNombre3 != ''){ ?>
						    <div class="item proDet-slider3 col-xs-12" style="background-image: url(<?= $htmlImg3; ?>);">
						    	<div class="ini-fondo-txt col-xs-12">

						    	</div>				      	
						    </div>
						    <?php } ?>
						  </div>

						  <!-- controls -->
				</div>
			</div>
			
			<div class="hidden-xs proDetalle-sect2-der col-xs-12 col-sm-6">
				<div class="proDetalle-sect2-cabecera col-xs-12" style="background: <?= $colorProdDet;?>">
					<?php 
						if($site['lang'] == 'es'){
							echo $htmlNombre;
						}
						if ($site['lang'] == 'en') {
							echo $htmlNombreIngles;
						}
					 ?>
				</div>
				<div class="proDetalle-sect2-marco2 col-xs-12">
					<div class="proDetalle-sect2-marco col-xs-12">
						<div class="proDet-caja">
							<div class="proDetalle-sect2-parr">
								<?php 
									if($site['lang'] == 'es'){
										echo $htmlCarateristicas;
									}
									if ($site['lang'] == 'en') {
										echo $htmlCarateristicasIngles;
									}
								?>	
							</div>
						</div> 
						<!-- <div class="proDetalle-sect2-parr col-xs-12">
							<div class="proDet-caja">
								<div class="proDetalle-sect2-punto col-xs-1">.</div>
								<div class="proDetalle-sect2-txt col-xs-11">
									70% de sólidos de cacao y panela con incrustaciones de blueberry.
								</div>
							</div> 
						</div>
						<div class="proDetalle-sect2-parr col-xs-12">
							<div class="proDet-caja">
								<div class="proDetalle-sect2-punto col-xs-1">.</div>
								<div class="proDetalle-sect2-txt col-xs-11">
									Caca fino de aroma.
								</div>
							</div> 
						</div>
						<div class="proDetalle-sect2-parr col-xs-12">
							<div class="proDet-caja">
								<div class="proDetalle-sect2-punto col-xs-1">.</div>
								<div class="proDetalle-sect2-txt col-xs-11">
									Con certificación orgánica para la norma europea, norteamericana y peruana.
								</div>
							</div> 
						</div> -->
					</div>
				</div>
			</div>
			
			
<!-- MODO MOVIL -->
            <div style="margin-bottom: 10px; background: <?= $colorProdDet;?>" class="proDetalle-sect2-cabecera visible-xs col-xs-12">
					<?php 
						if($site['lang'] == 'es'){
							echo $htmlNombre;
						}
						if ($site['lang'] == 'en') {
							echo $htmlNombreIngles;
						}
					 ?>
				</div>
            <div class="visible-xs proDetalle-sect2-izq col-xs-12 col-sm-6">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  
						  <ol class="proDetalle-circulos carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="proDetalle-active active <?= $pag1; ?>" ></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1" class="<?= $pag2; ?>"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2" class="<?= $pag3; ?>"></li>
						  </ol>
							
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						 
						 	<?php  if($htmlImgNombre1 != ''){ ?>
						    <div class="item active proDet-slider1 col-xs-12" style="background-image: url(<?= $htmlImg1; ?>);">
						    	<div class="ini-fondo-txt col-xs-12">
			
						    	</div>				    
						    </div>
						    <?php } ?>

						    <?php  if($htmlImgNombre2 != ''){ ?>
						    <div class="item proDet-slider2 col-xs-12" style="background-image: url(<?= $htmlImg2; ?>);">
						    	<div class="ini-fondo-txt col-xs-12">
			
						    	</div>  	
						    </div>
							<?php } ?>

						    <?php  if($htmlImgNombre3 != ''){ ?>
						    <div class="item proDet-slider3 col-xs-12" style="background-image: url(<?= $htmlImg3; ?>);">
						    	<div class="ini-fondo-txt col-xs-12">

						    	</div>				      	
						    </div>
						    <?php } ?>
						  </div>

						  <!-- controls -->
				</div>
			</div>
			
			<div class="visible-xs proDetalle-sect2-der col-xs-12 col-sm-6" style="margin-bottom: 30px;">
				
				<div class="proDetalle-sect2-marco2 col-xs-12">
					<div class="proDetalle-sect2-marco col-xs-12">
						<div class="proDet-caja">
							<div class="proDetalle-sect2-parr">
								<?php 
									if($site['lang'] == 'es'){
										echo $htmlCarateristicas;
									}
									if ($site['lang'] == 'en') {
										echo $htmlCarateristicasIngles;
									}
								?>	
							</div>
						</div> 
						<!-- <div class="proDetalle-sect2-parr col-xs-12">
							<div class="proDet-caja">
								<div class="proDetalle-sect2-punto col-xs-1">.</div>
								<div class="proDetalle-sect2-txt col-xs-11">
									70% de sólidos de cacao y panela con incrustaciones de blueberry.
								</div>
							</div> 
						</div>
						<div class="proDetalle-sect2-parr col-xs-12">
							<div class="proDet-caja">
								<div class="proDetalle-sect2-punto col-xs-1">.</div>
								<div class="proDetalle-sect2-txt col-xs-11">
									Caca fino de aroma.
								</div>
							</div> 
						</div>
						<div class="proDetalle-sect2-parr col-xs-12">
							<div class="proDet-caja">
								<div class="proDetalle-sect2-punto col-xs-1">.</div>
								<div class="proDetalle-sect2-txt col-xs-11">
									Con certificación orgánica para la norma europea, norteamericana y peruana.
								</div>
							</div> 
						</div> -->
					</div>
				</div>
			</div>
			
			
	
		</div>
		<div class="proDetalle-sect2-btn col-xs-12">
			<form action="productos.php" method="post">
				<button type="submit" name="categoria-anterior" value="<?= $productoTipo; ?>" class="proDetalle-sect2-btnRegresar">
					<?= $lang['prodDetalle']['proDet1']; ?>
				</button>
			</form>
		</div>
		<div class="proDetalle-sect2-linea col-xs-12"></div>
	</div>
	
<!-- MODO TABLET -->	
	
	<div class="proDetalle-sect2 visible-sm col-xs-12 col-md-offset-1 col-md-10">
		<div class="prodDetalle-contenedor-cabecera col-xs-12">
			<div class="proDetalle-sect2-cabecera col-xs-12" style="background: <?= $colorProdDet;?>">
				<?php 
					if($site['lang'] == 'es'){
						echo $htmlNombre;
					}
					if ($site['lang'] == 'en') {
						echo $htmlNombreIngles;
					}
				?>
			</div>
		</div>
		

		<div class="col-xs-12">
			<div class="proDetalle-sect2-izq col-xs-12 col-sm-6">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  
						  <ol class="proDetalle-circulos carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="proDetalle-active active <?= $pag1; ?>" ></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1" class="<?= $pag2; ?>"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2" class="<?= $pag3; ?>"></li>
						  </ol>
							
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						 
						 	<?php  if($htmlImgNombre1 != ''){ ?>
						    <div class="item active proDet-slider1 col-xs-12" style="background-image: url(<?= $htmlImg1; ?>);">
						    	<div class="ini-fondo-txt col-xs-12">
			
						    	</div>				    
						    </div>
						    <?php } ?>

						    <?php  if($htmlImgNombre2 != ''){ ?>
						    <div class="item proDet-slider2 col-xs-12" style="background-image: url(<?= $htmlImg2; ?>);">
						    	<div class="ini-fondo-txt col-xs-12">
			
						    	</div>  	
						    </div>
							<?php } ?>

						    <?php  if($htmlImgNombre3 != ''){ ?>
						    <div class="item proDet-slider3 col-xs-12" style="background-image: url(<?= $htmlImg3; ?>);">
						    	<div class="ini-fondo-txt col-xs-12">

						    	</div>				      	
						    </div>
						    <?php } ?>
						  </div>

						  <!-- controls -->
				</div>
			</div>
			
			<div class="proDetalle-sect2-der col-xs-12 col-sm-6">
				
				<div class="proDetalle-sect2-marco2 col-xs-12">
					<div class="proDetalle-sect2-marco col-xs-12">
						<div class="proDet-caja">
							<div class="proDetalle-sect2-parr">
								<?php 
									if($site['lang'] == 'es'){
										echo $htmlCarateristicas;
									}
									if ($site['lang'] == 'en') {
										echo $htmlCarateristicasIngles;
									}
								?>	
							</div>
						</div> 
					</div>
				</div>
			</div>
		</div>
		<div class="proDetalle-sect2-btn col-xs-12">
			<form action="productos.php" method="post">
				<button type="submit" name="categoria-anterior" value="<?= $productoTipo; ?>" class="proDetalle-sect2-btnRegresar">
					<?= $lang['prodDetalle']['proDet1']; ?>
				</button>
			</form>
		</div>
		<div class="proDetalle-sect2-linea col-xs-12"></div>
	</div>
</div>