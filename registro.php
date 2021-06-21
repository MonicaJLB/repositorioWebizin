<?php include 'include/header.php'; ?><br>
<?php
$servidor="localhost";
$usuarioBD="root";
$pwdBD="";
$nomBD="webizin";
$db=mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);
if(!$db){
die("la conexión fallo".mysqli_connect_error());
}else{
    mysqli_query($db,"SET NAMES 'UTF8'");
}

if(isset($_POST['Registrarse']))
{	 
	 $nameuser = $_POST['nameuser'];
	 $correo = $_POST['correo'];
	 $password = $_POST['password'];
	 $preferencias=$_POST['preferencias'];
	 $sql = "INSERT INTO usuarios VALUES ('','$nameuser','$correo','$password','usuario','$preferencias')";
	 if (mysqli_query($db, $sql)) {
		 ?><div class="box">
		 <p><h1>Usuario creado exitosamente</h1></p>
		 </div>
		 <form action="login.php" method="post">
                                <p><input type="submit" class="btn btn-primary" value="Aceptar"/></p></form>
		 <?php
	 } else{
		?><div class="box">
		<p><h1>Error al registrar usuario</h1></p>
		</div>
		<form action="pantallaregistro.php" method="post">
							   <p><input type="submit" class="btn btn-primary" value="Regresar"/></p></form>
	 <?php  

	 }

}
?>

<?php require_once 'include/footer.php'?>