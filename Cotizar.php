<?php 
    require_once("Connections/conexionMYSQLI.php");
    require_once ("ClasesClientes.php");
    require_once ("ClaseVehiculos.php");
 
/*value="<?php if(isset($_POST['txtid_cli'])){ echo $_POST['txtid_cli'];} ?>"*/

 	$datos = array ("Identificacion"=>'',"Nombres"=>'',"Apellidos"=>'',"Telefono"=>'',"Correo"=>'',"Direccion"=>''); 
	$vehiculo = array ("Placa"=>'',"Marca"=>'',"Modelo"=>'',"Color"=>'',"ano"=>''); 

	
	$accion="Seleccionar"; //variable de control para insertar, modificar o eliminar
    
    
if (isset($_REQUEST['Bus_veh'])) {
		
  $id= $_REQUEST['txtplaca'];

  $vehiculo = vehiculo::SoloId($id); //aqui envio al constructor de la clase persona

   $arreglo = $vehiculo ->SelecId(); //llamo a seleccionar toda la informacion segun lo establecido en el iden de la clase
	
   $vehiculo = $arreglo->fetch_array ();

   $arreglo->free();  //libera de la memoria el resultado

 }
 
  
if (isset($_REQUEST['Buscar'])) {
		
  $id= $_REQUEST['txtid_cli'];
 
  $cliente = persona::SoloId($id); //aqui envio al constructor de la clase persona

  $arreglo = $cliente ->SelecId(); //llamo a seleccionar toda la informacion segun lo establecido en el iden de la clase
	
   $datos = $arreglo->fetch_array ();

  $arreglo->free();  //libera de la memoria el resultado


}


 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8" /> 
<link rel="stylesheet" href="CSS/estilo.css" />

<title>Cotizaciones</title>

<script type="text/javascript">
<!--
<!--
//-->
//FUNCION QUE ABRE LA VENTANA EMERGENTE Y LE COLOCA UN TAMAÑO


function Insertar_Cliente()
				{    //usa objeto window para abrir la ventana
					Insertar_Cliente = window.open('InsertarClientes.php', 'Clientes', 'width=300,height=700','align=center'); //
				}

function Insertar_Vehiculo()
				{    //usa objeto window para abrir la ventana
					Insertar_Vehiculo = window.open('InsertarVehiculo.php', 'Nuevo_Vehiculo', 'width=350,height=500','align=center'); //
				}


function LLamoALaVentana(jsStr) 	
   { //Aqui llamo a la ventana
   		return eval(jsStr)
   }
//-->

function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>


</head>

<body>



<div class="divy">
  <table>
    <tr>
      
	   <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  
	  
   <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>    
  
	  <td width="123"><p align="center"><a href="Cotizaciones.php" target="_top" onclick="MM_nbGroup('down','group1','Aprobar','',1)" onmouseover="MM_nbGroup('over','Aprobar','','',1)" onmouseout="MM_nbGroup('out')"><img src="Imagenes/totalizar.png" class="avatar" alt="" name="Aprobar" width="78" height="91" border="0" onload="" /></a></p>
      <p align="center"><strong>Aprobar Cotizaci&oacute;n </strong> </p></td>
	  
	   <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  
        <td width="103"><p align="center"><a href="ImpCotizacion.php" target="_top" onclick="MM_nbGroup('down','group1','Imprimir','',1)" onmouseover="MM_nbGroup('over','Imprimir','','',1)" onmouseout="MM_nbGroup('out')"><img src="Imagenes/descargasf.png" class="avatar" alt="Imprime Cotización" name="Imprimir" width="59" height="70" border="0" onload="" /></a></p><p align="center"><strong>Imprimir Cotizaci&oacute;n </strong></p></td>
      
      <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  
	  <td width="104"><p align="center"><a href="DeAlta.php" target="_top" onclick="MM_nbGroup('down','group1','DeAlta','',1)" onmouseover="MM_nbGroup('over','DeAlta','','',1)" onmouseout="MM_nbGroup('out')"><img src="Imagenes/descarga.jpg" class="avatar" alt="Dar Salida a Vehiculos" name="Clientes" width="77" height="86" border="0" onload="" /></a></p>
      <p align="center"><strong>Dar de Alta</strong></p></td>
      <td width="21"><div align="center"></div>
	  <p align="center">&nbsp;</p></td>
	  
	   <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  
      <td width="104"><p align="center"><a href="Clientes.php" target="_top" onclick="MM_nbGroup('down','group1','Clientes','',1)" onmouseover="MM_nbGroup('over','Clientes','','',1)" onmouseout="MM_nbGroup('out')"><img src="Imagenes/cli.jpg" class="avatar" alt="Clientes del Taller" name="Clientes" width="77" height="86" border="0" onload="" /></a></p>
      <p align="center"><strong>Nuestros Clientes</strong></p></td>
      <td width="21"><div align="center"></div>
	  <p align="center">&nbsp;</p></td>
	  
       <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
	  
	  <td width="116"><p align="center"> <a href="Productos.php" target="_top" onclick="MM_nbGroup('down','group1','Productos','',1)" onmouseover="MM_nbGroup('over','Productos','','',1)" onmouseout="MM_nbGroup('out')"><img src="Imagenes/producto.png" class="avatar" alt="Productos de Almacen" name="Productos" width="96" height="94" border="0" onload="" /></a><a href="#" target="_top" onClick="MM_nbGroup('down','group1','Servicios','',1)" onMouseOver="MM_nbGroup('over','Servicios','','',1)" onMouseOut="MM_nbGroup('out')"></a></p>
      <p align="center"><strong>Nuestros Productos </strong></p></td>
 
  <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
    	 
		  <td width="116"><p align="center"> <a href="Servicios.php" target="_top" onclick="MM_nbGroup('down','group1','Servicios','',1)" onmouseover="MM_nbGroup('over','Servicios','','',1)" onmouseout="MM_nbGroup('out')"><img src="Imagenes/servi.jpg" class="avatar" alt="Servicios" name="Servicios" width="96" height="94" border="0" onload="" /></a><a href="#" target="_top" onClick="MM_nbGroup('down','group1','Servicios','',1)" onMouseOver="MM_nbGroup('over','Servicios','','',1)" onMouseOut="MM_nbGroup('out')"></a></p>
      <p align="center"><strong>Nuestros Servicios </strong></p></td>  
 
 
 <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  
	  <td width="225"><div align="center">
        <p> <a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Servicios','',1)" onmouseover="MM_nbGroup('over','Servicios','','Ojo',1)" onmouseout="MM_nbGroup('out')"></a><a href="#" target="_top" onClick="MM_nbGroup('down','group1','Mecanicos','',1)" onMouseOver="MM_nbGroup('over','Mecanicos','','',1)" onMouseOut="MM_nbGroup('out')"></a><a href="Usuarios.php" class="avatar" target="_top" onclick="MM_nbGroup('down','group1','Usuarios','',1)" onmouseover="MM_nbGroup('over','Usuarios','','',1)" onmouseout="MM_nbGroup('out')"><img src="Imagenes/clientes.jpg" class="avatar" alt="Usuarios" name="Usuarios" width="87" height="93" border="0" onload="" /></a></p>
	 <p><strong>Usuarios</strong></p>
	  </div></td>
	
	 <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  
  
		  <td width="116"><p align="center"> <a href="Mecanicos.php" target="_top" onclick="MM_nbGroup('down','group1','Mecanicos','',1)" onmouseover="MM_nbGroup('over','Mecanicos','','',1)" onmouseout="MM_nbGroup('out')"><img src="Imagenes/mecanicos.png" class="avatar" alt="Mecanicos" name="Mecanicos" width="96" height="94" border="0" onload="" /></a><a href="#" target="_top" onClick="MM_nbGroup('down','group1','Mecanicos','',1)" onMouseOver="MM_nbGroup('over','Mecanicos','','',1)" onMouseOut="MM_nbGroup('out')"></a></p>
      <p align="center"><strong>Mecanicos </strong></p></td>  
 
  
   <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
    <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
    <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>

 <td width="225"><div align="center">
        <p> <a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Servicios','',1)" onmouseover="MM_nbGroup('over','Servicios','','Ojo',1)" onmouseout="MM_nbGroup('out')"></a> <a href="#" target="_top" onClick="MM_nbGroup('down','group1','Usuarios','',1)" onMouseOver="MM_nbGroup('over','Usuarios','','',1)" onMouseOut="MM_nbGroup('out')"></a> <a href="Principal.php" class="avatar" target="_top" onclick="MM_nbGroup('down','group1','Principal','',1)" onmouseover="MM_nbGroup('over','Principal','','',1)" onmouseout="MM_nbGroup('out')"><img src="Imagenes/logo.png" class="avatar" alt="Principal" name="Principal" width="90" height="93" border="0" onload="" /></a><strong>Principal</strong></p>
	    <p>&nbsp;</p>
 </div></td>
  
    </tr>
  </table>
  </div>

<div class="cotizar">  

  <form id="frmdatos" name="frmdatos" method="post" action="Post.Incluir.Cotizacion.php">
      <strong>
      <p>
       Indique el Cliente
          
    	  <select name="lista0">
              <option value="0">Seleccione:</option>
            <?php
      		
          		 $qli = new conexion();
          // Realizamos la consulta para extraer los datos
                    $query = $qli -> query ("SELECT * FROM tbpersona order by Nombres ASC");
                    
          		  while ($valores = $query->fetch_array()) {
          // En esta sección estamos llenando el select con datos extraidos de una base de datos.
              echo '<option value="'.$valores[Identificacion].'">'.$valores[Identificacion]. ' - ' . $valores[Nombres]. ' ' . $valores[Apellidos].'</option>';
                    }
              ?>
          </select>
       
          <input name= "Nuevo" type="button" id="subNuevo" value="Nuevo" onclick="MM_callJS('Insertar_Cliente()')"> 
      </p>
      <p>
   
    Indique el Vehiculo
          <select name="lista1">
            <option value="0">Seleccione:</option>
            <?php
          		 $qli = new conexion();
               // Realizamos la consulta para extraer los datos
                    $query = $qli -> query ("SELECT * FROM tbvehiculo order by Marca ASC");
                    
          		  while ($valores = $query->fetch_array()) {
              // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                      echo '<option value="'.$valores[Placa].'">'.$valores[Placa]. ' - ' . $valores[Marca]. ' - ' . $valores[Modelo]. ' - ' . $valores[ano]. '</option>';
                    }
            ?>
         </select> 
     
    	   <input name= "Nue_veh" type="button" id="Nue_veh" value="Nuevo" onclick="MM_callJS('Insertar_Vehiculo()')">  
      </p>
    	
    <p>
        <label> Indique el Mecanico
          <select name="lista2">
            <option value="0">Seleccione:</option>
            <?php
    		 $mysqli = new conexion();
    // Realizamos la consulta para extraer los datos
              $query = $mysqli -> query ("SELECT * FROM tbnomina INNER JOIN tbpersona ON tbnomina.Cedula = tbpersona.Identificacion ORDER BY tbpersona.Nombres");
              while ($valores = $query->fetch_array()) {
    // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                echo '<option value="'.$valores[Cedula].'">'.$valores[Nombres]. '</option>';
              }
            ?>
          </select>
        </label>
    </p>	
      
    </strong>
    <p>
     
     <!--Creo la siguiente tabla aqui para aplicar el codigo php backend -->
     <table border="1" width="100%">
            <th>Codigo</th>
    		<th>Tipo</th>
    		<th>Descripci&oacute;n</th>
    		<th>Costo</th>
            <th>Seleccionar</th>

    	 	 <?php 
    		      $servicios = new conexion();
    		      $res = $servicios -> query ("SELECT * FROM tbservicios");
    			  $i=0;
    	          while ($fila = $res->fetch_array()){
                  ?>
    				 <tr> 
    			    	<td>
    					<?php echo $fila['Id']; ?>
    					</td>    
        	    	    <td>Servicio</td>
    			        <td><?php echo $fila['Descripcion']; ?></td>	
    					<td><?php echo $fila['Costo']; ?></td>
    					<?php $i++; ?>
    					<td> <center><input type="checkbox" id=<?php echo $fila['Descripcion']; ?> name=<?php echo $fila['Id']; ?>  value=<?php echo $fila['Id']; ?> /></center>
    				    </td>
    					
    				</tr>	
    	    <?php  } ?>

      </table> 
    </p>

    <p>	
       <input name="cmdTotalizar" type="submit" id="cmdTotalizar" value="Generar Cotización" />  
       
    </p>
     
 
  </form>
</div>


</body>
</html>


