<?php include 'include/headerloged.php'; ?>

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	
    <link rel="stylesheet" href="css/user.css" type="text/css">
</head>
<body>


    <div class="content">
        
        <h1>Mi Perfil</h1>
        <br>
        
        
        <br>
        <br>
        <div>
        <form action="actualizar.php" method="post" id="actualizar">
            Nombre: <input type="text" name="nombre" id="nombre" value=<?php echo $_SESSION['nombre']?>>
            <br>
            <br>Correo: <input type="text" name="email" value=<?php echo $_SESSION['email']?> disabled="true">
            <br>
            <br>Contraseña: <input type="text" name="pwd" value=<?php echo $_SESSION['pwd']?> disabled="true">
            <br>
            <br>Fecha de nacimiento: <input type="date" name="fecha_nac" value=<?php echo $_SESSION['fecha_nac']?>>
            <br>
            <br>Preferencias de lectura: <input type="text" name="preferencias" value=<?php echo $_SESSION['preferencias']?>>
            <br><input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id_usuario']?>" >
            <br>
            
            <br><button type="submit" class="btn btn-light">Actualizar</button>
        </form>

        </div>
    </div>

    <?php require_once 'include/footer.php'?>