
<?php 
require_once "Connections/conexionMYSQLI.php";

/* Clase de la cotizacion, se cream las siuientes variables y las fnciones constrctor para inicializar, y las funciones principales inherentes a las cotizaciones */

class Cotizacion{
  
    private $Num_Cot;
	private $Ced_Cli;
	private $Cod_Serv;
	private $Placa;
	private $Fecha_Cot;
	private $Estatus;
	private $Ced_Mecanico;
	
	//Constructores
 
	public function __construct($Num_Cot, $Cod_Serv, $Ced_Cli, $Placa, $Fecha_Cot, $Estatus, $Ced_Mecanico )    {
	 
	  
	   $db= new conexion();
	   
	  $this->Num_Cot=$db->real_escape_string($Num_Cot);
	  $this->Cod_Serv=$db->real_escape_string($Cod_Serv);
	  $this->Ced_Cli=$db->real_escape_string($Ced_Cli);
	  $this->Placa=$db->real_escape_string($Placa);
	  $this->Fecha_Cot=$db->real_escape_string($Fecha_Cot);
	  $this->Estatus=$db->real_escape_string($Estatus);
      $this->Ced_Mecanico=$db->real_escape_string($Ced_Mecanico);
	  
	}
 	
	public static function SoloId($iden){
	  return new self($iden, '','','','','', '');
	
	}	
	
 	public static function ningundato(){
	  return new self('','','','','','', '');
	  
	
	}	
	
   
  	//Funcion para seleccionar el id en la tabla cotizaciones
public function SelecId() {
  
	 $db= new conexion();  	    
				 
	$cadena = "SELECT * FROM tbcotizaciones INNER JOIN tbpersona ON tbcotizaciones.ced_cli = tbpersona.Identificacion INNER JOIN tbvehiculo ON tbcotizaciones.placa = tbvehiculo.Placa WHERE estatus='0' and Num_Cot='$this->Num_Cot' GROUP BY tbcotizaciones.Num_Cot";
			 
	 $ejecutor = $db->query($cadena);
			  
	return($ejecutor);
  
  }
 
  	//Funcion para seleccionar elid en la tabla persona
public function SelecAprobada() {
  
	 $db= new conexion();  	    
				 
	$cadena = "SELECT * FROM tbcotizaciones INNER JOIN tbpersona ON tbcotizaciones.ced_cli = tbpersona.Identificacion INNER JOIN tbvehiculo ON tbcotizaciones.placa = tbvehiculo.Placa WHERE estatus='1' GROUP BY tbcotizaciones.Num_Cot";
			 
	 $ejecutor = $db->query($cadena);
			  
	return($ejecutor);
	  
  } 
  
  
 //Funcion para seleccionar todas las cotizaciones de los clientes
  public function SelecTodos() {
  
	 $db= new conexion();  	    
				 
	$cadena = "SELECT * FROM tbcotizaciones INNER JOIN tbpersona ON tbcotizaciones.ced_cli = tbpersona.Identificacion INNER JOIN tbvehiculo ON tbcotizaciones.placa = tbvehiculo.Placa WHERE Num_Cot='$this->Num_Cot' GROUP BY tbcotizaciones.Num_Cot";
			 
	 $ejecutor = $db->query($cadena);
			  
	return($ejecutor);
	  
  }
  
  	//Funcion para seleccionar elid en la tabla persona
public function SelecRelacion() {
  
 $db= new conexion();  	    
			 
$cadena = "SELECT * FROM tbservicios INNER JOIN tbrelacioncotserv ON tbservicios.Id = tbrelacioncotserv.Cod_Serv WHERE tbrelacioncotserv.Num_Cot='$this->Num_Cot'";
		 
 $ejecutor = $db->query($cadena);
          
return($ejecutor);
  
  }
  


 //Funcion para insertar datos en la tabla persona
 public function insert (){

	$db= new conexion();
		     
	$cadena = "INSERT INTO tbcotizaciones (Ced_Cli, Cod_Serv, PLaca, Fecha_Cot, Estatus, Ced_Mecanico) VALUES ('$this->Ced_Cli','$this->Cod_Serv','$this->Placa','$this->Fecha_Cot','$this->Estatus', '$this->Ced_Mecanico')";
		
	
	
	
	
	if (!($db->query($cadena)))
	
			 header("location:Cotizar.php?res=error");
	else	   
			 
			 header("location:Cotizar.php");
 }
 	   
 //Funcion para aprobar la cotizacion seleccionada
 public function aprobar (){

    	 $db= new conexion();  
		 
		 $cadena = "UPDATE tbcotizaciones SET Estatus='$this->Estatus' WHERE Num_Cot= '$this->Num_Cot'";     
		
   	if (!($db->query($cadena)))
	
			 header("location:AprobarCotizacion.php?res=error");
	else	   
			 
			 header("location:AprobarCotizacion.php");
   
   

  }
   
   //Funcion para dar de alta o sacar el carro del taller
 public function alta (){

    	 $db= new conexion();  
		 
		 $cadena = "UPDATE tbcotizaciones SET Estatus='$this->Estatus' WHERE Num_Cot= '$this->Num_Cot'";     
		
   		if (!($db->query($cadena)))
	
			 header("location:DeAlta.php?res=error");
		else	   
			 
			 header("location:DeAlta.php");
   
   

  }
  
  
  
  
  
  //Funcion para actualizar datos en la tabla persona
  
 public function imprimir() {
  
 
		
	 //aqui es ue debo solicitar imprimir el PDF
	 
	//  $cadena = "UPDATE tbcotizaciones SET Cod_Serv='$this->Cod_Serv', Ced_Cli='$this->Ced_Cli', Placa='$this->Placa',Costo_Serv= '$this->Costo_Serv', Fecha_Cot='$this->Fecha_Cot', Estatus='$this->Estatus'  WHERE Num_Cot= '$this->Num_Cot'";
		
	//  $ejecutor = mysql_query($cadena, $ConexionSistema) or die(mysql_error());

	//    if (mysql_error()=='')	   
	//     header("location: Cotizaciones.php?res=impreso");
	    
	 //  else
	 
	 //    header("location: Cotizaciones.php?res=error");
	   
 
  } 


  public function buscar() {
  
 
		
	 //aqui es ue debo solicitar imprimir el PDF
	 
	//  $cadena = "UPDATE tbcotizaciones SET Cod_Serv='$this->Cod_Serv', Ced_Cli='$this->Ced_Cli', Placa='$this->Placa',Costo_Serv= '$this->Costo_Serv', Fecha_Cot='$this->Fecha_Cot', Estatus='$this->Estatus'  WHERE Num_Cot= '$this->Num_Cot'";
		
	//  $ejecutor = mysql_query($cadena, $ConexionSistema) or die(mysql_error());

	//    if (mysql_error()=='')	   
	//     header("location: Cotizaciones.php?res=impreso");
	    
	 //  else
	 
	 //    header("location: Cotizaciones.php?res=error");
	   
 
  } 
 
public function select (){


 	 $db= new conexion();  
 
$cadena = "SELECT * FROM tbcotizaciones INNER JOIN tbpersona ON tbcotizaciones.ced_cli = tbpersona.Identificacion INNER JOIN tbvehiculo ON tbcotizaciones.placa = tbvehiculo.Placa GROUP BY tbcotizaciones.Num_Cot";

$ejecutor=$db->query($cadena);
 
return($ejecutor);

}

public function selectNoAP (){


 	 $db= new conexion();  
 
$cadena = "SELECT * FROM tbcotizaciones INNER JOIN tbpersona ON tbcotizaciones.ced_cli = tbpersona.Identificacion INNER JOIN tbvehiculo ON tbcotizaciones.placa = tbvehiculo.Placa WHERE tbcotizaciones.Estatus='0' GROUP BY tbcotizaciones.Num_Cot";

$ejecutor=$db->query($cadena);
 
return($ejecutor);

}


}





?>




