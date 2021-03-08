<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Login de sistema</title>
    <link rel="stylesheet" href="CSS/master.css" />
  </head>
  <body>

    <div class="login-box">
      
	  <img src="Imagenes/logo.png" class="avatar" alt="Avatar Image" />
      <h1>Login Aqui</h1>
      
	  <form method="post" action="Inicio_Control.php">
       
	    <!-- Entrada de Nombre de Usuario -->
        <label for="username">Nombre de Usuario</label>
        <input name="txtusuario" type="text" id="txtusuario" placeholder="Inserte nombre de usuario" />
        
		<!-- Entrada del Password -->
        <label for="password">Contraseña</label>
        <input name="txtclave" type="password" id="txtclave" placeholder="Indique su contrasela" />
        
		<input name="cmdenviar" type="submit" id="cmdenviar" value="Entrar" />
        
		<a href="#">Olvidaste tu contraseña?</a><br />
     
      </form>
   
    </div>
  
  </body>
</html>
