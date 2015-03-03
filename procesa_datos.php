<?php include '_header.php' ?>

	<div class="well">procesa</div>

		<?php
		  	$nombre = $_POST["nombre"];
		  	$password = $_POST["password"];
		  	$fecha_de_nacimiento = $_POST["$fecha_nacimiento"];
		  	$checkbox = $_POST['formWheelchair'];
		  	$nuevo = $_POST['nuevoUsuario'];
		?>

		Hoy es <?php   echo date("d-m-Y") ?> <br>
		
	
		Tu nombre tiene <?php echo strlen($nombre);  ?> caracteres. <br>
		
		Te llamas <?php echo strtoupper($nombre);  ?> <br>
		echo (nuevo_usuario) ?>
		
		<?php 
	if ($nuevo) echo "hola nuevo usuario";
 ?>

		

<?php include '_footer.php' ?>
