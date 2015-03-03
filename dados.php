<?php 

	if (isset($_POST ["play"])) {

	$dados = '<img src="http://www.gifsanimados.org/data/media/710/dado-imagen-animada-0022.gif">';
	$titleimage_1 = '';
	$titleimage_2 = '';
	$titleimage_3 = '';
	$titleimage_4 = '';

}
 ?>

<?php
		$d1 = rand(1,6);
		$d2 = rand(1,6);
		$d3 = rand(1,6);
		$d4 = rand(1,6);


		if (isset($_POST ["stop"])) {


switch ($d1) {
    case 1: 
        $titleimage_1 = '<img src="http://grabilla.com/0521a-08e57917-174f-4347-9bc8-734abae88d1b.png">'; 
        break; 
    case 2: 
        $titleimage_1 = '<img src="http://grabilla.com/0521a-d9d3963a-75da-4a6b-9b78-454e874a6570.png">';
        break; 
    case 3: 
        $titleimage_1 = '<img src="http://grabilla.com/0521a-97cdf956-41c7-4bc0-b9aa-8cae009c5551.png">'; 
        break; 
    case 4: 
        $titleimage_1 = '<img src="http://grabilla.com/0521a-9dea1667-66bd-4548-b229-0f6e58d03800.png">'; 
        break;    
    case 5: 
        $titleimage_1 = '<img src="http://grabilla.com/0521a-40d1edde-aed8-4194-a457-69dac16b4caa.png">';
        break; 
    case 6: 
        $titleimage_1 = '<img src="http://grabilla.com/0521a-bee94f5a-ec1c-49ee-9631-670658350f81.png">'; 
        break; 
}

switch ($d2) {
    case 1: 
        $titleimage_2 = '<img src="http://grabilla.com/0521a-08e57917-174f-4347-9bc8-734abae88d1b.png">'; 
        break; 
    case 2: 
        $titleimage_2 = '<img src="http://grabilla.com/0521a-d9d3963a-75da-4a6b-9b78-454e874a6570.png">'; 
        break; 
    case 3: 
        $titleimage_2 = '<img src="http://grabilla.com/0521a-97cdf956-41c7-4bc0-b9aa-8cae009c5551.png">';
        break; 
    case 4: 
        $titleimage_2 = '<img src="http://grabilla.com/0521a-9dea1667-66bd-4548-b229-0f6e58d03800.png">'; 
        break;    
    case 5: 
        $titleimage_2 = '<img src="http://grabilla.com/0521a-40d1edde-aed8-4194-a457-69dac16b4caa.png">'; 
        break; 
    case 6: 
        $titleimage_2 = '<img src="http://grabilla.com/0521a-bee94f5a-ec1c-49ee-9631-670658350f81.png">';
        break; 
}

switch ($d3) {
    case 1: 
        $titleimage_3 = '<img src="http://grabilla.com/0521a-08e57917-174f-4347-9bc8-734abae88d1b.png">'; 
        break; 
    case 2: 
        $titleimage_3 = '<img src="http://grabilla.com/0521a-d9d3963a-75da-4a6b-9b78-454e874a6570.png">'; 
        break; 
    case 3: 
        $titleimage_3 = '<img src="http://grabilla.com/0521a-97cdf956-41c7-4bc0-b9aa-8cae009c5551.png">'; 
        break; 
    case 4: 
        $titleimage_3 = '<img src="http://grabilla.com/0521a-9dea1667-66bd-4548-b229-0f6e58d03800.png">'; 
        break;    
    case 5: 
        $titleimage_3 = '<img src="http://grabilla.com/0521a-40d1edde-aed8-4194-a457-69dac16b4caa.png">'; 
        break; 
    case 6: 
        $titleimage_3 = '<img src="http://grabilla.com/0521a-bee94f5a-ec1c-49ee-9631-670658350f81.png">';
        break; 
}

switch ($d4) {
    case 1: 
        $titleimage_4 = '<img src="http://grabilla.com/0521a-08e57917-174f-4347-9bc8-734abae88d1b.png">';
        break; 
    case 2: 
        $titleimage_4 = '<img src="http://grabilla.com/0521a-d9d3963a-75da-4a6b-9b78-454e874a6570.png">'; 
        break; 
    case 3: 
        $titleimage_4 = '<img src="http://grabilla.com/0521a-97cdf956-41c7-4bc0-b9aa-8cae009c5551.png">'; 
        break; 
    case 4: 
        $titleimage_4 = '<img src="http://grabilla.com/0521a-9dea1667-66bd-4548-b229-0f6e58d03800.png">'; 
        break;    
    case 5: 
        $titleimage_4 = '<img src="http://grabilla.com/0521a-40d1edde-aed8-4194-a457-69dac16b4caa.png">'; 
        break; 
    case 6: 
        $titleimage_4 = '<img src="http://grabilla.com/0521a-bee94f5a-ec1c-49ee-9631-670658350f81.png">'; 
        break; 
}

}
?> 

<?php include '_header.php' ?>

	<div class="well">DADOS</div>
	
	<form action="dados.php" method="post">

		<div class="row">
			<div class="col-xs-6">
				<div class="well">	
					<h3>COMPUTER</h3>	
					<?php echo $dados; ?>
					<?php echo $titleimage_1; ?>
					<?php echo $titleimage_2; ?>
				</div>

							

					<input type="submit" name="play" value="PLAY" class= "pull-right btn btn-primary" style="width:100px; height:60px"/>
				
			</div>

			<div class="col-xs-6">
				<div class="well">
				<h3>YO</h3>		
					<?php echo $dados; ?>
					<?php echo $titleimage_3; ?>
					<?php echo $titleimage_4; ?>	
				
			</div>
					<input type="submit" name="stop" value="STOP" class= "btn btn-danger" style="width:100px; height:60px"/>
			</div>
		</div>	
		
		<br>

		<div class="row">
		
			<div class="col-xs-6">
				<div class="well">	
						<p> SU PUNTUACIÓN ES = <?php echo $resultado = "" . ($d1+$d2);?> </p>	
				</div>
			 </div>	
			 	
			<div class="col-xs-6">
				<div class="well">	
						<p> SU PUNTUACIÓN ES = <?php echo $resultado = "" . ($d3+$d4);?> </p>	
				</div>
			 </div>


		</div>


		
		</div>
	</form>
<?php include '_footer.php' ?>