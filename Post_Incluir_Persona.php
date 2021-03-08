<?php   
  include "ClasesClientes.php";
  
	if (isset($_POST['cmdaceptar'])){
      
      if ($_POST['accion']=='insertar') {
		
	
			 
		$post = (isset($_POST['txtid']) && !empty($_POST['txtid'])) &&
        (isset($_POST['txtnom']) && !empty($_POST['txtnom'])) &&
        (isset($_POST['txtapel']) && !empty($_POST['txtapel'])) &&
		(isset($_POST['txttel']) && !empty($_POST['txttel'])) &&
		(isset($_POST['txtcorreo']) && !empty($_POST['txtcorreo'])) &&
		(isset($_POST['txtdir']) && !empty($_POST['txtdir']));


		// Si $post es true (verdadero), entonces se mostrarán los resultados:
		if ( $post == false) {
		   
		  echo "<script> alert('Ingrese lo solicitado')</script> ";
		  echo "<script>window.location='InsertarClientes.php'</script>"; //con esta instruccion cargo ell index.php	
		}else {
		 
			 
			 $id= $_POST['txtid'];
			 $nom= $_POST['txtnom'];
			 $apel= $_POST['txtapel'];
			 $tel= $_POST['txttel'];
			 $correo= $_POST['txtcorreo'];
			 $dir= $_POST['txtdir'];
						 
			 $cliente = new persona ($id, $nom, $apel, $tel, $correo, $dir); 
		   	 //Creo una instancia de la clase Clientes 
		     //Y le asigno los valores que voy a insertar mediante la clase
			 $cliente->insertCliente(); //aqui solo llamo a ejecutar la funcion insert
			
			
			  echo "<script> 
			           
					   window.close();
					
					</script>";
			 exit;
          } 
	    }
	         	   
		  
		
   }  
  
  
?>  
  