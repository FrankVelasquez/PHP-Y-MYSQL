
<?php 
    
	include "ClasesClientes.php";
    //aqui voy a guardar tods los datos, una vez que reciba el id de 
	//Clientes.php para hacer la consulta en la funcion SoloId
	// de la clase Clientes , lo inicializo con vacio a cada campo.
	
	$datos = array ("Identificacion"=>'',"Nombres"=>'',"Apellidos"=>'',"Telefono"=>'',"Correo"=>'',"Direccion"=>''); 
	
	$accion="insertar"; //variable de control para insertar, modificar o eliminar

	
	
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Clientes</title>
    <link rel="stylesheet" href="CSS/miniventanas.css" />
  </head>
  <body>

 <div class="login-box">
 
   <p>&nbsp; </p>  
    
  <h1>Nuevo Cliente</h1>
   
  <form method="post" action="Post_Incluir_Persona.php">
   
   <label>Identificacion <input name="txtid" type="text" id="txtid" placeholder="Inserte ID" /> </label>
       
   <label>Nombres<input name="txtnom" type="text" id="txtnom" placeholder="Inserte nombres" />       </label>
      
   <label>Apellidos <input name="txtapel" type="text" id="txtapel" placeholder="Inserte apellidos"/>  </label>
    
   <label>Email <input name="txtcorreo" type="text" id="txtcorreo" placeholder="Inserte correo electrónico"/>  </label>
 
   <label>Telefono   <input name="txttel" type="text" id="txttel" placeholder="Inserte teléfono" />  </label>
    
   <label>Direccion<textarea name="txtdir" id="txtdir" width="300"></textarea> </label> 
     
   <input name="cmdaceptar" type="submit" id="cmdaceptar" value="Guardar" />
   
   <input type="hidden" name="accion" value="insertar" />
	
				 
  </form>
</div>


</body>
</html>
