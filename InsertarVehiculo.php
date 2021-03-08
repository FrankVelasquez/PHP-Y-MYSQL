 <?php 
    
	include "ClaseVehiculos.php";
    //aqui voy a guardar tods los datos, una vez que reciba el id de 
	//Clientes.php para hacer la consulta en la funcion SoloId
	// de la clase Clientes , lo inicializo con vacio a cada campo.
	
	$accion="insertar"; //variable de control para insertar, modificar o eliminar

	
	
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Vehiculos</title>
    <link rel="stylesheet" href="CSS/miniventanas.css" />
  </head>
 
<body>

 <div class="login-box">

  <form method="post" action="Post_Incluir_Vehiculo.php">
   
    <label>Placa <input name="txtplaca" type="text" id="txtplaca" /></label>
     
    <label>Marca  <input name="txtmarca" type="text" id="txtmarca" /></label>
   
    <label>Modelo <input name="txtmodelo" type="text" id="txtmodelo" /></label>
   
    <label>Color <input name="txtcolor" type="text" id="txtcolor" /></label>
   
    <label>A&ntilde;o<input name="txtano" type="text" id="txtano" /></label>
    
    <input name="cmdaceptar" type="submit" id="cmdaceptar" value="Guardar" />
    <input type="hidden" name="accion" value="insertar" />
			
  </form>
</div>


</body>
</html>
