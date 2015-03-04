<?php include '_header.php' ?>
<div class="well">TABLA DE MULTIPLICAR</div>
	<form action="tbl_multiplica.php" method="post">
		<tr>
    	<td>Número</td>
    	<td> <input type="number" name="NUMBER" value= ""  />
    	</td>
    	</tr>

	<input type="submit" name="go" value="GO" class="btn btn-warning"/> 

	</form>
<div class="well">
	<?php
		if (isset($_POST ["go"])) {

				$tabla = $_POST["NUMBER"];


				for ($i=1; $i<=10; $i=$i+1){ 
				echo $i ." x $tabla =" . ($i*$tabla). "<br>";
				}
				
		}

?>
</div>

<?php include '_footer.php' ?>