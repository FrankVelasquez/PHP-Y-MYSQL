<?php   
  include "ClasesClientes.php";
  
	if (isset($_POST['cmdaceptar'])){
      
      if ($_POST['accion']=='insertar') {
		
			 $id= $_POST['txtid'];
			 $nom= $_POST['txtnom'];
			 $apel= $_POST['txtapel'];
			 $tel= $_POST['txttel'];
			 $correo= $_POST['txtcorreo'];
			 $dir= $_POST['txtdir'];
						 
			 $cliente = new persona ($id, $nom, $apel, $tel, $correo, $dir); 
		   	 //Creo una instancia de la clase Clientes 
		     //Y le asigno los valores que voy a insertar mediante la clase
			 $cliente->insert(); //aqui solo llamo a ejecutar la funcion insert
			
			
	    }
	         	   
		  if ($_POST['accion']=='editar'){
         	 
			 $id= $_POST['txtid'];
			 $nom= $_POST['txtnom'];
			 $apel= $_POST['txtapel'];
			 $tel= $_POST['txttel'];
			 $correo= $_POST['txtcorreo'];
			 $dir= $_POST['txtdir'];
						 
			 $cliente = new persona ($id, $nom, $apel, $tel, $correo, $dir); 
			 //Creo una instancia de la clase Clientes 
		     //Y le asigno los valores que voy a insertar mediante la clase
			 
			 $cliente->update(); //aqui solo llamo a ejecutar la funcion update
	   
	    }
		
   }  
  
  
?>  
  
  