<?php 

require_once ("Connections/conexionMYSQLI.php");
 
class persona {
  
    private $Iden;
	private $Nomb;
	private $Apel;
	private $Telef;
	private $Correo;
	private $Direc;
	
	//Constructores

	public function __construct($Iden, $Nomb, $Apel, $Telef, $Correo, $Direc)    {
	 
	   $db= new conexion();
	   
	  $this->Iden= $db->real_escape_string($Iden);
	  $this->Nomb=$db->real_escape_string(strtoupper($Nomb));
	  $this->Apel=$db->real_escape_string(strtoupper($Apel));
	  $this->Telef=$db->real_escape_string($Telef);
	  $this->Correo=$db->real_escape_string(strtoupper($Correo));
	  $this->Direc=$db->real_escape_string(strtoupper($Direc));
	 
	}
 	
	public static function SoloId($iden){
	  return new self($iden, '','','','','');
	
	}	
	
 	public static function ningundato(){
	  return new self('','','','','','');
	  
	
	}	
	
	   
 //Funcion para insertar datos en la tabla persona
 public function insert (){

	$db= new conexion();
		     
	$cadena = "INSERT INTO tbpersona (Identificacion, Nombres, Apellidos, Telefono, Correo, Direccion) VALUES ('$this->Iden','$this->Nomb','$this->Apel','$this->Telef','$this->Correo','$this->Direc')";
		
	if (!($db->query($cadena)))
	
			 header("location:Clientes.php?res=error");
	else	   
			 
			 header("location:Clientes.php");
	    

 }


 //Funcion para insertar datos en la tabla persona
 public function insertCliente (){

  $db= new conexion();
		     
  $cadena = "INSERT INTO tbpersona (Identificacion, Nombres, Apellidos, Telefono, Correo, Direccion) VALUES ('$this->Iden','$this->Nomb','$this->Apel','$this->Telef','$this->Correo','$this->Direc')";
		
  $ejecutor = $db->query($cadena);


  }
    
  	//Funcion para seleccionar elid en la tabla persona
public function SelecId() {
         
         $db= new conexion();
			 
	     $cadena = "SELECT * FROM tbpersona where Identificacion='$this->Iden'";
	
		 $ejecutor = $db->query($cadena);
          
		 return($ejecutor);
  
  }
  
  //Funcion para actualizar datos en la tabla persona
public function update() {
  
  	   $db= new conexion;
		     
	  $cadena = "UPDATE tbpersona SET Nombres='$this->Nomb', Apellidos='$this->Apel', Correo='$this->Correo', Telefono='$this->Telef',Direccion= '$this->Direc' WHERE Identificacion= '$this->Iden'";
		
	  if (!($db->query($cadena)))
	
			 header("location:Clientes.php?res=error");
	else	   
			 
			 header("location:Clientes.php?res=eliminado");
	    
 
  } 
 //Funcion para eliminar un registro
 public function delete() {
  
      $db= new conexion;
		     
	  $cadena = "DELETE FROM tbpersona WHERE Identificacion= '$this->Iden'";
		
	if (!($db->query($cadena)))
	
			 header("location:Clientes.php?res=error");
	else	   
			 
			 header("location:Clientes.php");
	    
 } 


 
public function select (){

  $db= new conexion;
			    
  $sql = "SELECT * FROM tbpersona order by Nombres ASC";
			    
  $result= $db->query($sql);
          
   return($result);
   
  } 

}


class Personal {
  
    private $Iden;
	private $Nomb;
	private $Apel;
	private $Telef;
	private $Correo;
	private $Direc;
	private $Cargo;
	private $Especialidad;
	
	//Constructores

	public function __construct($Iden, $Nomb, $Apel, $Telef, $Correo, $Direc, $Cargo, $Especialidad){
	 
	  Include('Connections/ConexionSistema.php'); // aqui se consulta la conexion
					
	  mysql_select_db($database_ConexionSistema, $ConexionSistema);

	  $this->Iden=mysql_real_escape_string($Iden);
	  $this->Nomb=mysql_real_escape_string($Nomb);
	  $this->Apel=mysql_real_escape_string($Apel);
	  $this->Telef=mysql_real_escape_string($Telef);
	  $this->Correo=mysql_real_escape_string($Correo);
	  $this->Direc=mysql_real_escape_string($Direc);
	  $this->Cargo=mysql_real_escape_string($Cargo);
	  $this->Especialidad=mysql_real_escape_string($Especialidad);
	 
	}
 	
	public function SoloId($iden){
	  return new self($iden, '','','','','', '', '');
	
	}	
	
 	public function ningundato(){
	  return new self('','','','','','', '', '');
	  
	
	}	
	
	   
 //Funcion para insertar datos en la tabla persona
 public function insert (){

    	 Include('Connections/ConexionSistema.php'); // aqui se consulta la conexion
					
		 mysql_select_db($database_ConexionSistema, $ConexionSistema);
		     
		$cadena = "INSERT INTO tbpersona (Identificacion, Nombres, Apellidos, Telefono, Correo, Direccion) VALUES ('$this->Iden','$this->Nomb','$this->Apel','$this->Telef','$this->Correo','$this->Direc')";
		
		 $ejecutor = mysql_query($cadena, $ConexionSistema) or die(mysql_error());
			

	 if (!($db->query($cadena)))
	
			 header("location:Clientes.php?res=error");
	else	   
			 
			 header("location:Clientes.php?res=eliminado");
	    

  }

 //Funcion para insertar datos en la tabla persona
 public function insertCliente (){

    	 Include('Connections/ConexionSistema.php'); // aqui se consulta la conexion
					
		 mysql_select_db($database_ConexionSistema, $ConexionSistema);
		     
		$cadena = "INSERT INTO tbpersona (Identificacion, Nombres, Apellidos, Telefono, Correo, Direccion) VALUES ('$this->Iden','$this->Nomb','$this->Apel','$this->Telef','$this->Correo','$this->Direc')";
		
		 $ejecutor = mysql_query($cadena, $ConexionSistema) or die(mysql_error());
			



  }
    
  	//Funcion para seleccionar elid en la tabla persona
public function SelecId() {
  
   	     include('Connections/ConexionSistema.php'); // aqui se consulta la conexion
					
		 mysql_select_db($database_ConexionSistema, $ConexionSistema);
			 
	     $cadena = "SELECT * FROM tbpersona where Identificacion='$this->Iden'";
	
		 $ejecutor = mysql_query($cadena, $ConexionSistema) or die(mysql_error());
          
		 return($ejecutor);
  
  }
  
  
  //Funcion para actualizar datos en la tabla persona
  
 public function update() {
  
  	  include('Connections/ConexionSistema.php'); // aqui se consulta la conexion
					
	  mysql_select_db($database_ConexionSistema, $ConexionSistema);
		     
	  $cadena = "UPDATE tbpersona SET Nombres='$this->Nomb', Apellidos='$this->Apel', Correo='$this->Correo', Telefono='$this->Telef',Direccion= '$this->Direc' WHERE Identificacion= '$this->Iden'";
		
	  $ejecutor = mysql_query($cadena, $ConexionSistema) or die(mysql_error());

	  if (!($db->query($cadena)))
	
			 header("location:Clientes.php?res=error");
	else	   
			 
			 header("location:Clientes.php?res=eliminado");
	    
	   
 
  } 

 public function delete() {
  
  	  include('Connections/ConexionSistema.php'); // aqui se consulta la conexion
					
	  mysql_select_db($database_ConexionSistema, $ConexionSistema);
		     
	  $cadena = "DELETE FROM tbpersona WHERE Identificacion= '$this->Iden'";
		
	  $ejecutor = mysql_query($cadena, $ConexionSistema) or die(mysql_error());

    if (!($db->query($cadena)))
	
			 header("location:Clientes.php?res=error");
	else	   
			 
			 header("location:Clientes.php?res=eliminado");
	    
	   
  
  } 

 
   	public function select (){

    	    include('Connections/ConexionSistema.php'); // aqui se consulta la conexion
					
			mysql_select_db($database_ConexionSistema, $ConexionSistema);
		     
	        $cadena = "SELECT * FROM tbpersona order by Nombres ASC";
	
		    $ejecutor = mysql_query($cadena, $ConexionSistema) or die(mysql_error());
          
		   return($ejecutor);
  }

}




?>