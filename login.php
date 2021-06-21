<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="webizin";

$db=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

// Definimos variables a usar
$username = $password = $rol="";
$username_err = $password_err = "";
 
//Verificamos si existen valores con el metodo post
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Checamos si está vació el campo de usuario
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor ingresa un usuario.";
        
    } else{
        $username = trim($_POST["username"]);
    }
    
    //validamos contraseña
    if(empty(trim($_POST["password"]))){
        $password_err = "Ingresa una contraseña."; 

    } else
    if(strlen(trim($_POST["password"])) < 4){
        $password_err = "La contraseña debe tener al menos 4 caracteres, 1 letra mayúscula y un numero.";
    } else{
        $password = trim($_POST["password"]);
     
    }
    
    // Validamos credenciales
    if(empty($username_err) && empty($password_err)){
        // Preparamos select 
        $sql = "SELECT id_usuario, nombre, pwd FROM usuarios WHERE username = ?";
       
        if($stmt = $mysqli->prepare($sql)){
            // Unimos variables para la consulta
            $stmt->bind_param("s", $param_username);
            
            // Asignamos parametros
            $param_username = $username;
            
            // Ejecutamos 
            if($stmt->execute()){
                // Revisamos resultados
                $stmt->store_result();
                
                //Checamos sí existe el nombre de usuario
                if($stmt->num_rows == 1){                    
                    // Unimos variables
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        //verificamos contraseña
                        if(password_verify($password, $hashed_password)){
                            // La contraseña es correcta iniciamos sesion
                            session_start();
                            
                            //Colocamos los valores de la consulta en variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                 
                            //Verificamos el rol del usuario            
                            $sql = "SELECT rol FROM users WHERE username ='".$username."'";
                            $resultado = mysqli_query($db,$sql); 
                           
                            if (mysqli_query($db,$sql)) {
                                //colocamos los valores de la consulta en nuestras variables
                                while ($linea = mysqli_fetch_object($resultado)){ 
                                    $rol=$linea->rol;
                                    $username=$linea->username;
                                }
                               
                                } else {
                                    echo "ERROR:".$sql.": ";
                                }
                                echo $rol;
                            if ($rol=="admin") {
                            
                            // mandamos al admin a su vista
                            echo $rol;
                            header("location: admin.php");
                          }else{
                            
                            // mandamos al usuario a su vista
                            echo $rol;
                           header("location: user.php");
                            }
                            
                        } else{
                            //Mostramos error 
                            $password_err = "La contraseña no es correcta.";
                        }
                    }
                } else{
                    // Mostramos error de existencia de datos
                    $username_err = "No hay una cuenta con ese nombre.";
                }
            } else{
                echo "Oh! Algo salió mal.";
            }

            // Cerramos consulta
            $stmt->close();
        }
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if(empty($username_err) && empty($password_err)){
      // Preparamos select 
      $sql = "SELECT id_escritor, nombre, email, pwd FROM escritores WHERE username = ?";
     
      if($stmt = $mysqli->prepare($sql)){
          // Unimos variables para la consulta
          $stmt->bind_param("s", $param_username);
          
          // Asignamos parametros
          $param_username = $username;
          
          // Ejecutamos 
          if($stmt->execute()){
              // Revisamos resultados
              $stmt->store_result();
              
              //Checamos sí existe el nombre de usuario
              if($stmt->num_rows == 1){                    
                  // Unimos variables
                  $stmt->bind_result($id, $username, $hashed_password);
                  if($stmt->fetch()){
                      //verificamos contraseña
                      if(password_verify($password, $hashed_password)){
                          // La contraseña es correcta iniciamos sesion
                          session_start();
                          
                          //Colocamos los valores de la consulta en variables
                          $_SESSION["loggedin"] = true;
                          $_SESSION["id"] = $id;
                          $_SESSION["username"] = $username;      
                          //Verificamos el rol del usuario            
                          $sql = "SELECT rol FROM users WHERE username ='".$username."'";
                          $resultado = mysqli_query($db,$sql); 
                         
                          if (mysqli_query($db,$sql)) {
                              //colocamos los valores de la consulta en nuestras variables
                              while ($linea = mysqli_fetch_object($resultado)){ 
                                  $rol=$linea->rol;
                                  $username=$linea->username;
                              }
                             
                              } else {
                                  echo "ERROR:".$sql.": ";
                              }
                              echo $rol;
                          if ($rol=="admin") {
                          
                          // mandamos al admin a su vista
                          echo $rol;
                          header("location: admin.php");
                        }else{
                          
                          // mandamos al usuario a su vista
                          echo $rol;
                         header("location: user.php");
                          }
                          
                      } else{
                          //Mostramos error 
                          $password_err = "La contraseña no es correcta.";
                      }
                  }
              } else{
                  // Mostramos error de existencia de datos
                  $username_err = "No hay una cuenta con ese nombre.";
              }
          } else{
              echo "Oh! Algo salió mal.";
          }

          // Cerramos consulta
          $stmt->close();
      }
  }
    
    // Cerramos consulta
    $mysqli->close();
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/login.css" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-black navbar-dark" style="background-color: #54BBEC;">
  			<!-- Links -->
  			<ul class="navbar-nav">
          <li class="nav-item">
              <a class="navbar-brand" href="#">
              Inicio
            </a>
          </li>
    			<li class="nav-item">
      				<a class="navbar-brand" href="#">
    					Nosotros
  					</a>
    			</li>
    			<li class="nav-item dropdown">
      				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        				Decadas
      				</a>
      				<div class="dropdown-menu">
        				<a class="dropdown-item" href="#">1901-1910</a>
        				<a class="dropdown-item" href="#">1911-1920</a>
        				<a class="dropdown-item" href="#">1921-1930</a>
        				<a class="dropdown-item" href="#">1931-1940</a>
        				<a class="dropdown-item" href="#">1941-1950</a>
        				<a class="dropdown-item" href="#">1951-1960</a>
        				<a class="dropdown-item" href="#">1961-1970</a>
        				<a class="dropdown-item" href="#">1971-1980</a>
        				<a class="dropdown-item" href="#">1981-1990</a>
        				<a class="dropdown-item" href="#">1991-2000</a>
        				<a class="dropdown-item" href="#">2001-2010</a>
        				<a class="dropdown-item" href="#">2011-2020</a>
      				</div>
   				 </li>
    			<li class="nav-item dropdown">
      				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        				Categorias
      				</a>
      				<div class="dropdown-menu">
        				<a class="dropdown-item" href="#">Cardiologia</a>
        				<a class="dropdown-item" href="#">Geriatria</a>
        				<a class="dropdown-item" href="#">Pediatria</a>
        				<a class="dropdown-item" href="#">Odontologia</a>
        				<a class="dropdown-item" href="#">Neurologia</a>
      				</div>
   				 </li>
  			</ul>
  			<ul class="nav navbar-nav ml-auto">
  				<li class="nav-item">
          <a href="login.php">
            <button type="button" class="btn btn-light" id="show">
    					Iniciar sesión
  					</button>
          </a>
  					
  				</li>
  				<li class="nav-item">
            <a href="register.php">
            <button type="button" class="btn btn-light" id="show">
    					Registrarse
  					</button>
            </a>
  					
  				</li>
  			</ul>
			</nav>
    <div class="content">
        
        <h1>Iniciar sesión</h1>
        <br>
        
        <img src="img/user.png" alt="usuario_login">
        <br>
        <br>
        <div>
        <form action="" id="formulario">
          <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Usuario</label>
                <input type="text"  name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Contraseña</label>
                <input type="password"  name="password" class="form-control" >
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Iniciar">
                <a href="pantallaregistro.php">Registrarse</a> 
            </div>

        </form>
        </div>
    </div>

    <footer class="section footer-classic context-dark bg-image" style="background: #2d3246;" style="width: 95%;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html">
                <p>Somos un equipo de estudiantes del teconologico, trayendo ante a utedes los mas importantes descubrimientos de la medicina en el ultimo siglo. Diria que es para informar pero solo queremos olvidar la materia.</p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2020</span><span> </span><span>Equipo 4</span><span>. </span><span>Libre de uso.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contactanos</h5>
              <dl class="contact-list">
                <dt>Direccion:</dt>
                <dd>Instituto tcnologico de toluca, Metepec</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">carloscm211@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>telefonos:</dt>
                <dd><a href="tel:#">7291246423</a> <span>or</span> <a href="tel:#">7223448899</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Github</h5>
              <ul class="nav-list">
                <li><a href="#">github1</a></li>
                <li><a href="#">github1</a></li>
                <li><a href="#">github1</a></li>
                <li><a href="#">github1</a></li>
                <li><a href="#">github1</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
        </div>
    </footer>
</body>
</html>
