<?php
		if (isset($_POST ["suma"])) {

				$a = $_POST["a"];
				$b = $_POST["b"];
				$resultado = "La suma es: " . ($a+$b);
		}



?>
<?php include '_header.php' ?>

	<div class="well">calculadora</div>

	<form action= "calculator.php" method= "post">
		
			<input type="number" name="a" value= "<?php echo $a; ?>"/>
			<input type="number" name="b" value= "<?php echo $b; ?>"/>
			
		

	<input type="submit" name="suma" value="Sumar"class="btn btn-danger"/>
	<input type="submit" name="borrar" value="Borrar" class="btn btn-primary"/> 
	<input type="submit" name="coseno" value="Coseno" class="btn btn-warning"/> 

	

	</form>

<h4><?php echo $resultado ?>    <h4>


<?php include '_footer.php' ?>
