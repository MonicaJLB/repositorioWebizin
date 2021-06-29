<?php include 'include/header.php'; ?><br>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	
    <link rel="stylesheet" href="css/login.css" type="text/css">
</head>
<body>

    <div class="content">
        
        <h1>Iniciar sesión</h1>
        <br>
        
        <img src="img/user.png" alt="usuario_login">
        <br>
        <br>
        <div>
        <form action="i.php" method="POST"   class="validated">
   
            <div class="form-group" >
            <label for="">Correo:</label>
            <br>
            <input type="text"  class="form-control" name="correo" placeholder="correo@correo.com"  pattern="[a-zA-Z0-9._\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,4}" title="Ejemplo: correo@correo.com" /> 

            </div>
            <div class="form-group">
            <label for="">Contraseña:</label><br>
            <input type="password"  class="form-control" name="password" placeholder="Contraseña" pattern="[A-Za-z0-9!?-]{8,12}" 
                title="la contraseña debe entre 8 y 12 caracteres" required>
            </div>

            <div class="botones">
            <input type="submit" name="Ingresar" value="Ingresar">

            </div>

            <div class="botones">
                ¿no tiene cuenta?
                <a  href="pantallaregistro.php">Registrarse</a>
            </div>
        </form>

        </div>
    </div>

    <?php require_once 'include/footer.php'?>