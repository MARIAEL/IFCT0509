<?php include '_header.php' ?>

	<div class="well"> calcular</div>

	<?php
	$a = $_POST["numero_1"];
	$b = $_POST["numero_2"];

	if( $_POST["suma"] ){  echo $a . "+" .  $b . " = " . ($a + $b); }
	if( $_POST["resta"] ){  echo $a . "-" .  $b . " = " . ($a - $b); }
	if( $_POST["multiplica"] ){  echo $a . "*" .  $b . " = " . ($a * $b); }
	if( $_POST["divide"] ){  echo $a . "/" .  $b . " = " . ($a / $b); }

	?>

<!-- 
	<p>La suma de los dos números es = <?php echo $a + $b; ?> </p>
	<p>La resta de los dos números es = <?php echo $a - $b; ?> </p>
	<p>La multiplicación de los dos números es = <?php echo $a * $b; ?> </p>
	<p>La división de los dos números es = <?php echo $a / $b; ?> </p> -->



		







<?php include '_footer.php' ?>