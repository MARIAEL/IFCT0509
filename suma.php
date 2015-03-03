<?php include '_header.php' ?>
	<div class="well">suma</div>
	
	<?php
	$a = $_POST["numero_1"];
	$b = $_POST["numero_2"];

	?>
<!-- PHP DENTRO DE HTML -->	
<p>La suma de los dos números es = <?php echo $a + $b; ?> </p>
	
<!-- HTML DENTRO DE PHP -->	
<?php echo "<p>La suma de los dos números es =" . ($a + $b) . " </p>" ?>

 
<!-- Mi primer condicional -->
 <?php 
	if ($a < $b) echo "$a es menor que $b";
 ?>


<?php include '_footer.php' ?>