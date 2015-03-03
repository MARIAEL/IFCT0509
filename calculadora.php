<?php include '_header.php' ?>
	<div class="well">calculadora</div>
	
	<form action="calcula.php" method="post">

	a &nbsp <input type="number" name="numero_1" placeholder= "numero a" /> <br>	
	<br>
	b &nbsp <input type="number" name="numero_2" placeholder= "numero b " /> <br>	
	<br>
	+ <input type="checkbox" name="suma" value= "suma" /> &nbsp  
    - <input type="checkbox" name="resta" value= "resta" /> &nbsp 
    * <input type="checkbox" name="multiplica" value= "multiplica" /> &nbsp 
    / <input type="checkbox" name="divide" value= "divide" /> &nbsp 
    
    <br>
	<br>
	<input type="submit" class= "btn btn-primary" name="submit" value= "calcula"/>
	
	</form>

<?php include '_footer.php' ?>

