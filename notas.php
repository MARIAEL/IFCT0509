<?php
	if (isset($_POST ["notas"])) {
		
		$calificacion=$_POST["calificacion"];

	if ($calificacion<=2) {
		$resultado = "Muy deficiente " ;
		}

	elseif ($calificacion==3 ) {
		$resultado = "Deficiente" ;
		}

	elseif ($calificacion==4 ) {
		$resultado = "Insuficiente" ;
		}
	elseif ($calificacion==5 ) {
		$resultado = "Suficiente" ;
		}
	elseif ($calificacion==6 ) {
		$resultado = "Bien" ;
		}
	elseif ($calificacion>=7 && $calificacion<=8) {
		$resultado = "Notable" ;
		}

	elseif ($calificacion>=9 && $calificacion<=10) {
		$resultado = "Sobresaliente" ;
		}


	}
	
?>
<?php include '_header.php' ?>

	<div class="well">
		<h4><?php echo $resultado; ?>    <h4>
	</div>
	
	<form action="notas.php" method="post">

	 CALIFICACION   <input type="number" name="calificacion"/> 

	<input type="submit" name="notas" value="notas" class="btn btn-danger"/> 

	</form>
<?php include '_footer.php' ?>