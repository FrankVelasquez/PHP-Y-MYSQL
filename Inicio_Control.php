
 <?php 
  include('Connections/conexionMYSQLI.php');
  //si presiono el boton de aceptar
   
  
  if (isset($_POST['cmdenviar'])){ 

   if (($_POST['txtusuario']!='') && ($_POST['txtclave']!='')) {
   // si los campos no estan vacios
      
    	 
		 $usuario=$_POST['txtusuario'];
		 $clave=$_POST['txtclave'];
	 
    
         $bd= new Conexion  ();		 
		
		 $sql = "SELECT * FROM tbusuario WHERE nom_usu='$usuario' and cla_usu='$clave'";
		
		/* comprobar si el servidor sigue vivo */
		if (!($bd->stat())) {
		    printf ("Error: %s\n", $mysqli->error);
		    exit();
		    
		} 		    
		    $resultado= $bd->query($sql);
		 
		    $num_rows = mysqli_num_rows($resultado);

		    If ($num_rows <= 0) { // No existe el usuario registrado
	  	        echo "<script> alert('Error No existe el usuario seleccionado')</script> ";
			     echo "<script>window.location='index.php'</script>"; //con esta instruccion cargo ell index.php	
			    
			}
		   
		        $resultado->free(); //libero memoria 
     
                $bd->close(); //cierro conexion
			     
			     echo "<script>window.location='principal.php'</script>"; //con esta instruccion cargo ell index.php	       } 
		 
	      	 
        }else {
		
		 echo "<script> alert('Debe ingresar la información solicitada')</script> ";
		 echo "<script>window.location='index.php'</script>"; //con esta instruccion cargo ell index.php	
		}

}
?>
