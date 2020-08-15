<?php 
	// echo "--->".$vistaPaginador;
 ?>

<div class="noticias col-xs-12">
	<div class="not-sect1 col-xs-12">
		<!-- background-image -->
	</div>
	<div class="not-sect2 col-xs-12">
		<div class="quejas-contenedor col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
			<div class="quejas-sect2-noticias col-xs-12">
				Quejas y/o Sugerencias
			</div>
			<div class="quejas-sect2-txt col-xs-12">
				<div class="quejas2-sect2-bordebajo col-xs-12">
					 Muchas veces sufrimos abusos por parte de un chofer o cobrador, ya sea por que no quiere aceptar el medio pasaje entre otras cosas. En esta sección puedes ver las experiencias de muchas personas que no han sido escuchado su reclamo. Si tienes alguna queja o sugerencia puedes contarnos tu experiencia también aquí.
				</div>
			</div>

			<?php  
				if($site['lang'] == 'es'){
					echo $quejasPorPagina;
				}
				if ($site['lang'] == 'en') {
					echo $quejasPorPaginaIngles;
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
			<div class="quejas-comentario col-xs-12">
				<div class="col-xs-12 quejas-recuadro">
					<form action="" method="post">
						<div class="queja-tit col-xs-12">
							Déjanos tu comentario
						</div>
						<div class="col-xs-12">
							<textarea class="queja-entrada" name="queja-comentario" rows="7">Tu comentario...	
							</textarea>
						</div>
						<div class="queja-fila col-xs-12 col-sm-6">
							<div class="col-xs-12">
								Nombre
							</div>
							<div class="queja-msjPequeno col-xs-12">
								Si no añade un nombre, saldrá como anónimo su comentario.
							</div>
							<div class="col-xs-12">
								<input class="queja-entrada" type="text" class="" type="text">
							</div>
						</div>
						<!-- <div class="queja-fila col-xs-12 col-sm-6">
							<div class="col-xs-12">
								Correo<span class="queja-asterisco"> *</span>
							</div>
							<div class="queja-msjPequeno col-xs-12" required>
								Tu correo eletrónico no será publicado.
							</div>
							<div class="col-xs-12">
								<input class="queja-entrada" type="email" class="" type="text">
							</div>
						</div> -->
						<div class="quejas-btn-pub col-xs-12">
							<button type="submit" name="queja-btnPublicar" class="btn-publicar">
									Publicar comentario
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="queja-realizarQueja-txt col-xs-12">
				Si has tenido algun problema o tienes alguna queja o sugerencia con alguna empresa de transporte público, puedes contarnos tu experiencia en esta sección.
			</div>
			<div class="queja-realizarQueja col-xs-12">
				<form action="quejasPublicar.php" method="post">
					<button type="submit" name="queja-btnEscribir" class="btn-publicar">
						Escribir publicación
					</button>
				</form>
			</div>
		</div>
	</div>
</div>