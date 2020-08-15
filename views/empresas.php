<?php 
	// echo "--->".$vistaPaginador;
 ?>

<?php 
	// echo "--->".$vistaPaginador;
 ?>

<div class="noticias col-xs-12">
	<div class="not-sect1 col-xs-12">
		<!-- background-image -->
	</div>
	<div class="not-sect2 col-xs-12">
		<div class="notDet-espaciosLat col-xs-12 col-sm-offset-1 col-sm-10">

			<div class="not-sect2-noticias col-xs-12">
				<?= $lang['empresas']['emp1']; ?>
			</div>

			<?php 
				if($site['lang'] == 'es'){
					echo $empresasPorPagina;
				}
				if ($site['lang'] == 'en') {
					echo $empresasPorPaginaIngles;
				}
			?>

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