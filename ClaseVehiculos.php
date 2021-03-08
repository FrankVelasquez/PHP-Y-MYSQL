<?php 
 require_once ("Connections/conexionMYSQLI.php");
class Vehiculo {
  
    private $placa;
	private $marca;
	private $modelo;
	private $color;
	private $ano;
	
	//Constructor

	public function __construct($placa, $marca, $modelo, $color, $ano)    {
	 
	  $db= new conexion();

	  $this->placa=$db->real_escape_string(strtoupper($placa));
	  $this->marca=$db->real_escape_string(strtoupper($marca));
	  $this->modelo=$db->real_escape_string(strtoupper($modelo));
	  $this->color=$db->real_escape_string(strtoupper($color));
	  $this->ano=$db->real_escape_string($ano);
		 
	}
 	
	public static function SoloId($iden){
	  return new self($iden, '','','','');
	
    }	
	
 	public static function ningundato(){
	  return new self('','','','','');
	  
	
	}	
	
 public function select (){

    	    $db= new conexion();   
		     
	        $cadena = "SELECT * FROM tbvehiculo order by Placa ASC";
	
		    $result= $db->query($cadena);
          
            return($result);
   
  }
	   
 //Funcion para insertar datos en la tabla persona
 	public function insert (){

    	$db= new conexion();   
		     
		$cadena = "INSERT INTO tbvehiculo (placa, marca, modelo, color, ano) VALUES ('$this->placa','$this->marca','$this->modelo','$this->color', '$this->ano')";
		
	if (!($db->query($cadena)))
	
			 header("location:Clientes2.php?res=error");
	else	   
			 
			 header("location:Clientes2.php?res=insertado");
		
  }
  
  	//Funcion para seleccionar elid en la tabla persona
public function SelecId() {
  
   	     $db= new conexion();   
			 
	     $cadena = "SELECT * FROM tbvehiculo where placa='$this->placa'";
	
		 $ejecutor=$db->query($cadena);
          
		 return($ejecutor);
  
  }
  
  
  //Funcion para actualizar datos en la tabla persona
  
 public function update() {
  
  	  $db= new conexion();   
		     
	  $cadena = "UPDATE tbvehiculo SET marca='$this->marca', modelo='$this->modelo', color='$this->color',ano= '$this->ano' WHERE placa= '$this->placa'";
		
	 if (!($db->query($cadena)))
	
			 header("location:Clientes2.php?res=error");
	else	   
			 
			 header("location:Clientes2.php?res=insertado");
	   
 
  } 

 
  


 //Funcion para insertar datos en la tabla vehiculo
 	public function insertVehiculo (){

    	$db= new conexion();   
		     
		$cadena = "INSERT INTO tbvehiculo (placa, marca, modelo, color, ano) VALUES ('$this->placa','$this->marca','$this->modelo','$this->color', '$this->ano')";
		
		$db->query($cadena);
			
	 
  }

}

?>