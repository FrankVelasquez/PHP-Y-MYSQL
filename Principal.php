<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="CSS/estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="UTF-8">
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
;
<title>Principal</title>
	 
</head>

<body>



<div class="div3">
  <table>
    <tr>
      
	   <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  
      <td width="110"><p> <a href="Cotizar.php" target="_top" onclick="MM_nbGroup('down','group1','Cotizar','',1)" onmouseover="MM_nbGroup('over','Cotizar','','',1)" onmouseout="MM_nbGroup('out')"><img src="Imagenes/cotizar.png" class="avatar" alt="Cotizaciones" name="Cotizar" width="87" height="73" border="0" id="Cotizar" onload="" /></a></p>
      <p align="center"><strong>Cotizaciones</strong></p></td>
	  
   <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>    
  
	  <td width="123"><p align="center"><a href="AprobarCotizacion.php" target="_top" onclick="MM_nbGroup('down','group1','Aprobar','',1)" onmouseover="MM_nbGroup('over','Aprobar','','',1)" onmouseout="MM_nbGroup('out')"><img src="Imagenes/totalizar.png" class="avatar" alt="" name="Aprobar" width="78" height="91" border="0" onload="" /></a></p>
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
 
  
 

 <td width="116"><p align="center"> <a href="Vehiculos.php" target="_top" onclick="MM_nbGroup('down','group1','Vehiculos','',1)" onmouseover="MM_nbGroup('over','Vehiculos','','',1)" onmouseout="MM_nbGroup('out')"><img src="Imagenes/vehiculo.png" class="avatar" alt="Salir" name="Salir" width="96" height="94" border="0" onload="" /></a><a href="#" target="_top" onClick="MM_nbGroup('down','group1','Vehiculos','',1)" onMouseOver="MM_nbGroup('over','Salir','','',1)" onMouseOut="MM_nbGroup('out')"></a></p>
      <p align="center"><strong>Vehiculos</strong></p></td>  
	  
	  
  <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
    <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
    <td width="19"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
  <td width="4"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','group1','Totalizar','',1)" onmouseover="MM_nbGroup('over','Totalizar','','',1)" onmouseout="MM_nbGroup('out')"></a></td>
	
  <td width="116"><p align="center"> <a href="Index.php" target="_top" onclick="MM_nbGroup('down','group1','Salir','',1)" onmouseover="MM_nbGroup('over','Salir','','',1)" onmouseout="MM_nbGroup('out')"><img src="Imagenes/salir.jpg" class="avatar" alt="Salir" name="Salir" width="96" height="94" border="0" onload="" /></a><a href="#" target="_top" onClick="MM_nbGroup('down','group1','Salir','',1)" onMouseOver="MM_nbGroup('over','Salir','','',1)" onMouseOut="MM_nbGroup('out')"></a></p>
      <p align="center"><strong>Cerrar Sesion </strong></p></td>  
	</tr>
  </table>
</div>


</body>
</html>
