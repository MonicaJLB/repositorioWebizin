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

<?php include 'include/header.php'; ?>
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

<?php require_once 'include/footer.php'?>
