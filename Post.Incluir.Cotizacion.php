<?php   
 
   require_once "ClaseServicios.php";		    
   require_once "ClasesCotizacion.php";
    
	function BuscoCosto ($cod){
	
				   //debo consultar a  la bd el costo de ese servicio seleccionado
				   $servicio = Servicio::SoloId($cod);
				   
				   $arreglo = $servicio ->SelecId();
				   
				   $datos= $arreglo -> fetch_array();
					   
				   return ($datos['Costo']); 
				   
				   $arreglo->free(); 
	}

             	                 
	function GuardarRegistro ($Cod_Serv, $Ced_Cli, $Placa, $fecha, $estatus, $Ced_mecanico){
     		   
			$db4= new Conexion;
			   
	$cadena = "INSERT INTO tbcotizaciones (Ced_Cli, Cod_Serv, Placa, Fecha_Cot, Estatus, Ced_Mecanico) VALUES ('$Ced_Cli, $Cod_Serv, $Placa, $fecha, $estatus, $Ced_mecanico')";
		
	        $db4->query($cadena);
			
	}
	
   function GuardarRelacion ($Num_Cot, $Cod_Serv, $Costo){
     		   
			   $db3= new Conexion;
			   
			   $sql = "INSERT INTO tbrelacioncotserv (Num_Cot, Cod_Serv, Costo) VALUES ('$Num_Cot','$Cod_Serv','$Costo')";

			   $db3->query($sql);
		
			  
	}
	
	
	  
  if (isset($_POST['cmdTotalizar'])){
    
  		  //aqui en este punto voy a guardar la cotizacion
             //va un while para rtecorrer la tabla
			 
		$post = (isset($_POST['lista0']) && !empty($_POST['lista0'])) &&
        (isset($_POST['lista1']) && !empty($_POST['lista1'])) &&
        (isset($_POST['lista2']) && !empty($_POST['lista2']));
	 
	 if ($post==false) {
          echo "<script> alert('Ingrese lo solicitado')</script> ";
		  echo "<script>window.location='Cotizar.php'</script>"; //con esta instruccion cargo 
		}else {	
             

			$Ced_Cli= $_POST['lista0'];
			$Placa= $_POST['lista1'];
			$Ced_mecanico= $_POST['lista2'];
			$estatus=0;
			$fecha= date("Y-m-d", time());
	

            //guardo la cotizacion en la tabla cotizaciones
  		                  
  		    GuardarRegistro(1, $Ced_Cli, $Placa, $fecha, $estatus, $Ced_mecanico);
				
			//aqui envio los datos de la relacion pero necesito el num de la cotizacion y debo sacarlo de la bd
				
			$db1= new conexion();  	    
			 
			$cadena = "SELECT Num_Cot FROM tbcotizaciones WHERE Estatus='0' and Ced_Cli='$Ced_Cli' and Placa='$Placa' and Fecha_Cot='$fecha' and Ced_Mecanico='$Ced_mecanico'";
			 
	 		$row = $db1->query($cadena);	
		
	 		$fila = $row->fetch_array();
					

	 		$Num_Cot= $fila['Num_Cot']; 
				
			if ( ( isset($_POST['1'])) && ($_POST['1']=='1')) {
				   $Cod_Serv= $_POST['1'];
				   $Costo_Serv = BuscoCosto($Cod_Serv);
				   GuardarRelacion($Num_Cot, $Cod_Serv, $Costo_Serv);
			
			 }
			 
			 
  		     
			 if ( (isset($_POST['2'])) && ($_POST['2']=='2')) {
				   $Cod_Serv= $_POST['2'];
				   $Costo_Serv = BuscoCosto($Cod_Serv);
				   GuardarRelacion($Num_Cot, $Cod_Serv, $Costo_Serv);
			
			 }
			 
			if ( (isset($_POST['3'])) && ($_POST['3']=='3')) {
				   $Cod_Serv= $_POST['3'];
				   $Costo_Serv = BuscoCosto($Cod_Serv);
				   GuardarRelacion($Num_Cot, $Cod_Serv, $Costo_Serv);
			
			 }
			 
			 if ( (isset($_POST['4'])) && ($_POST['4']=='4')) {
				   $Cod_Serv= $_POST['4'];
				   $Costo_Serv = BuscoCosto($Cod_Serv);
				   GuardarRelacion($Num_Cot, $Cod_Serv, $Costo_Serv);
			
			 }
			 
			if ( (isset($_POST['5'])) && ($_POST['5']=='5')) {
				   $Cod_Serv= $_POST['5'];
				   $Costo_Serv = BuscoCosto($Cod_Serv);
				   GuardarRelacion($Num_Cot, $Cod_Serv, $Costo_Serv);
			
			 }
			 
			if ( (isset($_POST['6'])) && ($_POST['6']=='6')) {
				   $Cod_Serv= $_POST['6'];
				   $Costo_Serv = BuscoCosto($Cod_Serv);
				   GuardarRelacion($Num_Cot, $Cod_Serv, $Costo_Serv);
			
			 }
			 
			 if ( (isset($_POST['7'])) && ($_POST['7']=='7')) {
				   $Cod_Serv= $_POST['7'];
				   $Costo_Serv = BuscoCosto($Cod_Serv);
				   GuardarRelacion($Num_Cot, $Cod_Serv, $Costo_Serv);
			
			 }
			 
			 if ( (isset($_POST['8'])) && ($_POST['8']=='8')) {
				   $Cod_Serv= $_POST['8'];
				   $Costo_Serv = BuscoCosto($Cod_Serv);
				    GuardarRelacion($Num_Cot, $Cod_Serv, $Costo_Serv);
			
			 }
			 
			 if ( (isset($_POST['9'])) && ($_POST['9']=='9')) {
				   $Cod_Serv= $_POST['9'];
				   $Costo_Serv = BuscoCosto($Cod_Serv);
				   GuardarRelacion($Num_Cot, $Cod_Serv, $Costo_Serv);
			
			 }
			 
			 if ( (isset($_POST['10'])) && ($_POST['10']=='10')) {
				   $Cod_Serv= $_POST['10'];
				   $Costo_Serv = BuscoCosto($Cod_Serv);
				   GuardarRelacion($Num_Cot, $Cod_Serv, $Costo_Serv);
			
			 }
		    
		header("location:Cotizar.php");	
	    }
	   
    } 
  
?>  
  