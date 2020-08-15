<?php 

function listaDias(){
	$diasCalendario = '';
	for($i=1;$i<=31;$i++){
		$diasCalendario .= '<option value="'.$i.'" style="background:#002d5d;">'.$i.'</option>';
	}

	return $diasCalendario;
}

function listaMeses(){
	$meses = array(
		 'Enero'
		,'Febrero'
		,'Marzo'
		,'Abril'
		,'Mayo'
		,'Junio'
		,'Julio'
		,'Agosto'
		,'Septiembre'
		,'Octubre'
		,'Noviembre'
		,'Diciembre'
		);

	$countMeses = count($meses);

	$mesesCalendario = '';

	for($i=0;$i<$countMeses;$i++){
		$val = $i+1;
		$mesesCalendario .= '<option value="'.$val.'" style="background:#002d5d;">'.$meses[$i].'</option>';
	}

	return $mesesCalendario;

}

function listaAnio(){
	$anio = date('Y');
	$anio_inicio = $anio-100;

	$anioLista = '';

	for($i=$anio_inicio;$i<$anio;$i++){
		$aniosCalendario .= '<option value="'.$i.'" style="background:#002d5d;">'.$i.'</option>';
	}

	return $aniosCalendario;
	
}


function script_redirect($direction,$duration)
{
	$htmlRedirect = '
			<script>
                setTimeout(function(){ $( location ).attr("href", "'.$direction.'"); }, '.$duration.');
			</script>
	';
	return $htmlRedirect;
}



 ?>