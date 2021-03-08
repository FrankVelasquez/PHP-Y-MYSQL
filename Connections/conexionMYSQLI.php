<?php 

  class Conexion extends mysqli{
    public $host = "localhost";
	private $user = "root";
	private $pass = "123456";
	private $db_name = "bd_taller_mecanico";
    
    public function __construct(){
	
      parent:: __construct($this->host,$this->user, $this->pass, $this->db_name);
	  
	  $this->set_charset('utf-8');
	  
	  $this->connect_errno ? exit ('</br>Error en la conexion'. mysqli_connect_errno()): $m="conectado con MYSQLI";
	     
		 
	  if ( $this->connect_errno) {
           echo "</br> Cadena ultimo error de conexion: " . $this -> connect_error;
            exit();
      }
 
	
}
  
  
  }


?>