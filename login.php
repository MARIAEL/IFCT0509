<?php include '_header.php' ?>

	<div class="well">login</div>
	<form action="procesa_datos.php" method="post">
		<!-- usuario:  <input type="text" name="usuario" value= "" placeholder="nombre" /><br> -->
<!-- 		password: <input type="password" name="password" value= "" /><br>
		<br>
		<input type="submit" name="submit" value="enviar" /> -->


	<div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            <div class="well">
            	
            <h4>Welcome back.</h4>
            usuario:  <input type="text" name="usuario" value= "" placeholder="nombre" />
            <br>
            password: <input type="password" name="password" value= "" />
            <br>
            <br>
           <button type="submit" class="btn btn-primary">
  				<i class="icon-user icon-white"></i> ENVIAR</button>

            </div>
            
            </div>
            </div>
<div class="container">
      <div class="row">
      <!-- <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="edit.html" ></A>

        <A href="edit.html" ></A>
       <br>
<p class=" text-info"></p>
      </div> -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   <form action="procesa_datos.php" method="post">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">usuario</h3>  

            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="left"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre de cliente:</td>
                        <td> <input type="text" name="nombre" value= "" placeholder="" /></td>
                      </tr>
                      <tr>
                        <td>Año de nacimiento:</td>
                        <td> <input type="date" name="fecha_nacimiento" value= "" placeholder="" /></td>
                      </tr>
                      <tr>
                        <td>D.N.I.</td>
                        <td> <input type="text" name="DNI" value= "" placeholder="" /></td>
                      </tr>
                      <tr>
                        <td>Direccion</td>
                        <td> <input type="text" name="Direcciom" value= "" placeholder="" /></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Provincia</td>
                        <td> <input type="text" name="Provincia" value= "" placeholder="" /></td>
                      </tr>
                        <tr>
                        <td>telefono</td>
                        <td> <input type="text" name="telefono" value= "" placeholder="" /></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><input type="texto" name="email" value= "" placeholder="" </td>
                      </tr>
                        <td>contraseña</td>
                        <td><input type="texto" name="contraseña" value= "" placeholder="" /></td><br>
                        </td>
                        </tr>
                        <td> <input type="checkbox" name="aceptar" value= "" &nbsp <td> Aceptar las condiciones</td>
                        <td> <input type="checkbox"  name="nuevo" value= "1" &nbsp <td> nuevo usuario</td>
						</td>
                        
                           
                     
                    </tbody>
                  </table>
                  

					<button type="submit" class="btn btn-primary">
  						<i class="icon-user icon-white"></i> Guardar usuario
  					</button>

                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>        




        </div>


	</form>

		</form>

<?php include '_footer.php' ?>
