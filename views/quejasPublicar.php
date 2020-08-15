<div class="noticiaDetalle col-xs-12">
	<div class="notDet-sect1 not-sect1 col-xs-12">
			
	</div>
	<div class="not-sect2 col-xs-12">
		<div class="quejas-contenedor col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">

			<div class="quejas-sect2-noticias col-xs-12">
				Cuéntanos tu experiencia
			</div>
			<div class="quejas-sect2-txt col-xs-12">
				<div class="quejas2-sect2-bordebajo col-xs-12">
					 Muchas veces sufrimos abusos por parte de un chofer o cobrador, ya sea porque no quiere aceptar el medio pasaje entre otras cosas. En esta sección puedes hacer tu denuncia, contarnos tu experiencia, para que otras personas y las autorides tomen en cuenta este tipo de abusos, reconocer que empresas de transporte público no cumple con las normas establecidas y no respeta a los usuarios de estos servicios.
				</div>
			</div>

			<div class="quejas-comentario col-xs-12">
				<div class="col-xs-12 quejas-recuadro">
					<form action="" method="post">
						<div class="queja-tit col-xs-12">
							Escribe tu denuncia aquí
						</div>
						<div class="col-xs-12">
							<textarea class="queja-entrada" name="queja-comentario" rows="7">Tu experiencia...	
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
						<div class="queja-fila col-xs-12 col-sm-6">
							<div class="col-xs-12">
								Correo<span class="queja-asterisco"> *</span>
							</div>
							<div class="queja-msjPequeno col-xs-12" required>
								Tu correo eletrónico no será publicado.
							</div>
							<div class="col-xs-12">
								<input class="queja-entrada" type="email" class="" type="text">
							</div>
						</div>
						<div class="queja-fila col-xs-12 col-sm-6" style="margin-top: 10px">
							<div class="col-xs-12">
								Empresa
							</div>
							<div class="col-xs-12">
								<input class="queja-entrada" type="text" class="" type="text">
							</div>
						</div>
						<div class="queja-fila col-xs-12 col-sm-6" style="margin-top: 10px">
							<div class="col-xs-12">
								Placa
							</div>
							<div class="col-xs-12">
								<input class="queja-entrada" type="email" class="" type="text">
							</div>
						</div>
						<div class="queja-fila col-xs-12 col-sm-6" style="margin-top: 10px">
							<div class="col-xs-12">
								Hora (aprox)
							</div>
							<div class="col-xs-12">
								<input class="queja-entrada" type="text" class="" type="text">
							</div>
						</div>
						<div class="queja-fila col-xs-12 col-sm-6" style="margin-top: 10px">
							<div class="col-xs-12">
								Fecha
							</div>
							<div class="col-xs-12">
								<input class="queja-entrada" type="email" class="" type="text">
							</div>
						</div>
						<div class="queja-fila col-xs-12 col-sm-6" style="margin-top: 10px">
							<div class="col-xs-12">
				                <label>Imagen 1:</label>
				                  <input type="file" class="form-control btn-success" name="noticia_imagen" id="quejas-imagen-1" accept="image/*" value="">
				            </div>
						</div>
						<div class="queja-fila col-xs-12 col-sm-6" style="margin-top: 10px">
							<div class="col-xs-12">
				                <label>Imagen 2:</label>
				                  <input type="file" class="form-control btn-success" name="noticia_imagen2" id="quejas-imagen-2" accept="image/*" value="">
				            </div>
						</div>
						<div class="queja-fila col-xs-12 col-sm-6" style="margin-top: 10px">
							<div class="col-xs-12">
								Video
							</div>
							<div class="col-xs-12">
								<input class="queja-entrada" type="email" class="" type="text">
							</div>
						</div>
						<div class="queja-fila col-xs-12 col-sm-6" style="margin-top: 10px">
							<div class="col-xs-12">
				                <!-- label>Imagen 3:</label>
				                  <input type="file" class="form-control btn-success" name="noticia_imagen3" id="quejas-imagen-3" accept="image/*" value=""> -->
				                  <div class="g-recaptcha" data-sitekey="6LdzFFUUAAAAAOx91EipstySSY38Zq_EBqIzrltT"></div> 
				            </div>
						</div>
						
						<div class="quejas-btn-pub col-xs-12">
							<div class="quejasPublicar-btn1 col-xs-12 col-sm-6">
								<form action="quejas.php">
									<button id="btnPublicar" type="submit" name="queja-btnPublicar" class="btn-publicar">
											Publicar
									</button>
								</form>
							</div>
							<div class="quejasPublicar-btn2 col-xs-12 col-sm-6">
								<form action="quejas.php">
									<button type="submit" name="queja-btnPublicar" class="btn-publicar">
											Regresar
									</button>
								</form>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
		echo "==>datos:<br>";
		print_r($_POST);
		/*
		echo $_POST['telefono']."<br>";
		echo $_POST['correo']."<br>"; 
		echo $_POST['ayuda']."<br>";
		echo $_POST['checkbox']."<br>";   
		*/ 

		echo "==><br>Respuestas:<br>";

		if (isset($_POST['g-recaptcha-response'])) {

			$secret = '6LdzFFUUAAAAAJADSJZOaTiQw9vQN1aUJoskjcOK'; // CLAVE PRIVADA
			$response = $_POST['g-recaptcha-response']; // key del post de la respuesta de la interfaz del recaptcha ("name del post del interfaz "input" del captcha").
			$ip = $_SERVER['REMOTE_ADDR']; // Dirección ip del usuario (opcional).

			// URL donde se debe enviar estos 3 datos para que google verifique si el recaptcha fue llenado correctamente.
			$url = 'https://www.google.com/recaptcha/api/siteverify';

			// Con este método d php lo enviar mediante post estos 3 datos a ese link de google.
			$finalResponse = file_get_contents($url."?secret=".$secret."&response=".$response."&remoteip=".$ip);

			echo "<br>Respuesta de Google en JSON:";
			print_r($finalResponse); // me imprime en json
			echo "<br><br>";

			// Lo convierto a un objeto de php ese json para hacer lo que quiero hacer:
			$jsonResponse = json_decode($finalResponse);
			print_r($jsonResponse);
			if ($jsonResponse->success) {
				$msjJason = "captcha llenado correctamente";
				$catpchaRequerido = "disabled";
			}else{
				$msjJason = "LLENE el captcha correctamente";
			}

			echo "-->".$msjJason;

		}
		
	 ?>
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<script>
		 var varjs = <?php echo json_encode($msjJason) ?>;
    	 
    	 $(function(){
    	 	$("#btnPublicar").click(function(){
    	 		alert(varjs);
    	 	});
    	 });
 
	</script>



	 
