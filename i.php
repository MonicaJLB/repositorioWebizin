<?php
include ("conexion_bd.php");
$usuario= $_POST['correo'];
$password=$_POST['password'];

if (isset($usuario)) {
 
	
	session_start();
 
	$sql= "SELECT * FROM usuarios WHERE email ='".$usuario."'";

	$resultado= mysqli_query($con,$sql);
	$fila=mysqli_fetch_array($resultado);
	
	
	if ($password==$fila['pwd']){
 
		$_SESSION['id_usuario']=$fila['id_usuario'];
		$_SESSION['nombre']=$fila['nombre'];
		$_SESSION['email']=$fila['email'];
		$_SESSION['rol']=$fila['rol'];
		$_SESSION['pwd']=$fila['pwd'];
		$_SESSION['fecha_nac']=$fila['fecha_nac'];
		$_SESSION['preferencias']=$fila['preferencias'];
		$_SESSION["loggedin"] = true;
		
		header("location:user.php");
	}
	else{
			$sql= "SELECT * FROM escritores WHERE email ='".$usuario."'";

		$resultado= mysqli_query($con,$sql);
		$fila=mysqli_fetch_array($resultado);
		
		
		if ($password==$fila['pwd']){
	
			$_SESSION['id_escritor']=$fila['id_escritor'];
			$_SESSION['nombre']=$fila['nombre'];
			$_SESSION['email']=$fila['email'];
			$_SESSION['rol']=$fila['rol'];
			$_SESSION['pwd']=$fila['pwd'];
			$_SESSION['aescritos']=$fila['aescritos'];
			$_SESSION['apublicados']=$fila['apublicados'];
			$_SESSION['profesion']=$fila['profesion'];
			$_SESSION['especialidad']=$fila['especialidad'];
			$_SESSION["loggedin"] = true;
			
			header("location:escritor.php");
		}
		else{
			print "<script>alert(\"Error en tus credenciales \");window.location='login.php';</script>";
		}
	}
}
else{
	header("location:login.php");
}
?>