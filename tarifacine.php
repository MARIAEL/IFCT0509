<?php
	if (isset($_POST ["pagar"])) {
		
		$edad=$_POST["edad"];

	if ($edad<=12) {
		$resultado = "Tarifa gratuita " ;
		}

	if ($edad>=13 && $edad<=16) {
		$resultado = "Tarifa 4 € " ;
		}

	if ($edad>=17 && $edad<=65) {
		$resultado = "Tarifa 8 € " ;
		}
if ($edad>=65) {
		$resultado = "Tarifa 4 € " ;
		}

	}
	
?>
<?php include '_header.php' ?>

	<div class="well">
		<h4><?php echo $resultado; ?>    <h4>
	</div>
	
	<form action="tarifacine.php" method="post">

	 EDAD   <input type="number" name="edad"/> 

	<input type="submit" name="pagar" value="pagar" class="btn btn-primary"/> 

	</form>
<?php include '_footer.php' ?>