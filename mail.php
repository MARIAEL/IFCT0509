<?php include '_header.php' ?>
<?php
	$asunto= $_POST["asunto"];
	$mensaje= $_POST["mensaje"];
	$email= $_POST["email"];
	$direcciones= $_POST["direcciones"];

	if (isset($_POST["enviar"])) {
		# code...
			$resultado= $asunto . $mensaje . $email;
	}

?>

<div class="row">ENVIO de EMAILS</div>
	
		
	<div class="well">	
		<form action="mail.php" method="post"><br>
		<div class="row">	
		    	<div class="col-xs-6">
		    		Asunto
				<input type= "text" name= "asunto"/> <br>
				<br>
				Mensaje
				<textarea class="form-control" name= "mensaje" rows="15"></textarea>
				<br>
				Email
				<input type= "text" name= "email" value="" /><br>
				<br>
				<input type="checkbox" name= "multiples" value="Múltiples">  Múltiples	
			</div>
						
			<div class="col-xs-6">Emails @
				<textarea class="form-control" rows="20"></textarea>	
			</div>
		
		    <div class="col-xs-10 col-xs-offset-2"><br>	
		    	<input type="submit" name="enviar" value="enviar" class= "btn btn-primary"/>
			</div>
		</div>
			
		</form>
		
	</div>
	<h4><?php echo $resultado; ?>    <h4>
	
<?php include '_footer.php' ?>

