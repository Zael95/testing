
<form method="post">

	<input type="hidden" name="producto-tipo" value="<?= $producto_tipo; ?>">

<div class="productos col-xs-12">
	<div class="pro-sect1 col-xs-12">
		<!-- background-image -->
	</div>
	<div class="pro-sect2 col-xs-12">
		<div class="prod-contenedor col-xs-12 col-sm-offset-1 col-sm-10">
			<div class="pro-sect2-tit col-xs-12">
				<?= $lang['productos']['pro1']; ?>
			</div>
			<div class="pro-sect2-txt col-xs-12">
				<?= $lang['productos']['pro2']; ?>
			</div>
			<div class="pro-sect2-categorias col-xs-12">
				
				<?php  
				 if($site['lang'] == 'es'){
			         echo $listaCategoria;
			     }
			     if ($site['lang'] == 'en') {
			         echo $listaCategoriaIngles;
			     }
			    ?>

				<!-- <div class="col-xs-12 col-sm-4">
					
						<div id="categoria1" class="pro-sect2-categoria pro-sect2-categoria1 col-xs-12">
							Chocolate 50%
						</div>
										
				</div>
				<div class="col-xs-12 col-sm-4">
					
						<div id="categoria2" class="pro-sect2-categoria pro-sect2-categoria2 col-xs-12">
							Chocolate Dark 70%
						</div>
					
				</div>
				<div class="col-xs-12 col-sm-4">
					
						<div id="categoria3" class="pro-sect2-categoria pro-sect2-categoria3 col-xs-12">
							Premium <br class="visible-sm">80% - 90%
						</div>
					
				</div> -->
			</div>

			<div class="col-xs-12">

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
					         echo $listaProductos;
					     }
					     if ($site['lang'] == 'en') {
					         echo $listaProductosIngles;
					     }
					    ?>
					</div>



				<!-- <div class="pro-sect2-cuadro pro-sect2-cuadro1 col-xs-12 col-sm-6">
					<a href="productoDetalle.php">
						<div class="pro-sect2-img col-xs-12">
							<img id="prod1" class="img-responsive" src="app/img/productos/productosfotos/70/foto1.jpg" alt="">
							<div class="img-producto text-center">
								<img class="hidden-xs hidden-sm img-detalle" src="app/img/productos/icon.png" alt="">
							</div>

						</div>
						
						<div class="pro-sect2-nombre col-xs-12">
							<div class="pro-caja">
								Chocolate Dark Bitter
							</div>
							
						</div>
						

					</a>
				</div>
				<div class="pro-sect2-cuadro pro-sect2-cuadro2 col-xs-12 col-sm-6">
					<a href="productoDetalle.php">
						<div class="pro-sect2-img col-xs-12">
							<img id="prod1" class="img-responsive" src="app/img/productos/productosfotos/70/foto2.jpg" alt="">
							<div class="img-producto text-center">
								<img class="hidden-xs hidden-sm img-detalle" src="app/img/productos/icon.png" alt="">
							</div>

						</div>
						
						<div class="pro-sect2-nombre col-xs-12">
							<div class="pro-caja">
								Chocolate Dark Bitter con Aguaymanto
							</div>
							
						</div>
						

					</a>
				</div>
				<div class="pro-sect2-cuadro pro-sect2-cuadro3 col-xs-12 col-sm-6">
					<a href="productoDetalle.php">
						<div class="pro-sect2-img col-xs-12">
							<img id="prod1" class="img-responsive" src="app/img/productos/productosfotos/70/foto3.jpg" alt="">
							<div class="img-producto text-center">
								<img class="hidden-xs hidden-sm img-detalle" src="app/img/productos/icon.png" alt="">
							</div>

						</div>
						
						<div class="pro-sect2-nombre col-xs-12">
							<div class="pro-caja">
								Chocolate Dark con Blueberry
							</div>
							
						</div>
						

					</a>
				</div>
				<div class="pro-sect2-cuadro pro-sect2-cuadro4 col-xs-12 col-sm-6">
					<a href="productoDetalle.php">
						<div class="pro-sect2-img col-xs-12">
							<img id="prod1" class="img-responsive" src="app/img/productos/productosfotos/70/foto4.jpg" alt="">
							<div class="img-producto text-center">
								<img class="hidden-xs hidden-sm img-detalle" src="app/img/productos/icon.png" alt="">
							</div>

						</div>
						
						<div class="pro-sect2-nombre col-xs-12">
							<div class="pro-caja">
								Chocolate Dark con Sal de maras y Nibs de Cacao
							</div>
							
						</div>
						

					</a>
				</div> -->

			</div>
		</div>
	</div>
</div>

</form>