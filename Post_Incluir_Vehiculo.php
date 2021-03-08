<?php   
  include "ClaseVehiculos.php";
  
	if (isset($_POST['cmdaceptar'])){
      
      if ($_POST['accion']=='insertar') {
		
		$post = (isset($_POST['txtplaca']) && !empty($_POST['txtplaca'])) &&
        (isset($_POST['txtmarca']) && !empty($_POST['txtmarca'])) &&
        (isset($_POST['txtmodelo']) && !empty($_POST['txtmodelo'])) &&
		(isset($_POST['txtcolor']) && !empty($_POST['txtcolor'])) &&
		(isset($_POST['txtano']) && !empty($_POST['txtano']));


		// Si $post es true (verdadero), entonces se mostrarán los resultados:
		if ( $post == false) {
		   
		  echo "<script> alert('Ingrese lo solicitado')</script> ";
		  echo "<script>window.location='InsertarVehiculo.php'</script>"; //con esta instruccion cargo ell index.php	
		}else {	


			 $placa= $_POST['txtplaca'];
			 $marca= $_POST['txtmarca'];
			 $modelo= $_POST['txtmodelo'];
			 $color= $_POST['txtcolor'];
			 $ano= $_POST['txtano'];

			 $vehiculo = new vehiculo ($placa, $marca, $modelo, $color, $ano); 
		   	 //Creo una instancia de la clase vehiculos 
		     //Y le asigno los valores que voy a insertar mediante la clase
			 $vehiculo->insertVehiculo(); //aqui solo llamo a ejecutar la funcion insert
			
			
			  echo "<script> 
			           
					   window.close();
					
					</script>";
			 exit;
         
	    }
	         	   
		  
		
   }  
}  
  
?>  