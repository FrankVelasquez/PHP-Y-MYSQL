
<?php 
 require_once ("Connections/conexionMYSQLI.php"); 
class Servicio {
  
    private $Id;
	private $Des;
	private $Pre;
	
	//Constructor

	public function __construct($Cod, $Des, $Pre)    {
	 
      $db= new conexion(); 
	  $this->Id=$db->real_escape_string($Cod);
	  $this->Des=$db->real_escape_string(strtoupper($Des));
	  $this->Pre=$db->real_escape_string($Pre);
	 
	}
 	
	public static function SoloId($iden){
	  return new self($iden, '','');
	
	}	
	
 	public static function ningundato(){
	  return new self('','','');
	  
	
	}	
	
	   
 //Funcion para insertar datos en la tabla persona
 	public function insert (){

 		$db= new conexion();    
		
		$cadena = "INSERT INTO tbservicios (Id,Descripcion, Costo) VALUES ('$this->Id','$this->Des','$this->Pre')";
		
		if (!($db->query($cadena)))
	
			 header("location:Servicios.php?res=error");
	else	   
			 
			 header("location:Servicios.php");
  }
  
  	//Funcion para seleccionar elid en la tabla persona
public function SelecId() {
  
   	     $db= new conexion();    
			 
	     $cadena = "SELECT * FROM tbservicios where Id='$this->Id'";
	
		 $ejecutor=$db->query($cadena);
          
		 return($ejecutor);
  }
  
  
  //Funcion para actualizar datos en la tabla persona
  
 public function update() {
      
	  $db= new conexion();    
  
	  $cadena = "UPDATE tbservicios SET Descripcion='$this->Des', Costo='$this->Pre' WHERE Id= '$this->Id'";
		
	  if (!($db->query($cadena)))
	
			 header("location:Servicios.php?res=error");
	  else	   
			 
			 header("location:Servicios.php");
	   
 
  } 

 public function delete() {
  
      $db= new conexion();   
		     
	  $cadena = "DELETE FROM tbservicios WHERE Id= '$this->Id'";
		
	  if (!($db->query($cadena)))
	
			 header("location:Servicios.php?res=error");
	  else	   
			 
			 header("location:Servicios.php");
	   
  
  } 

 
   	public function select (){
	        $db= new conexion(); 
			
	        $cadena = "SELECT * FROM tbservicios";
	
		   $ejecutor=$db->query($cadena);
          
		   return($ejecutor);
  }


}

?>