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
     $newnameuser=$_POST['newnameuser'];
	 $correo = $_POST['correo'];
	 $password = $_POST['password'];
	 $artescr=$_POST['artescr'];
	 $artpub=$_POST['artpub'];
	 $titulo=$_POST['titulo'];
	 $sql = "UPDATE escritores SET nombre='$newnameuser',email='$correo',pwd='$password',aescritos='$artescr',apublicados='$artpub',titulo=$titulo WHERE nombre='$nameuser'";
	 if (mysqli_query($db, $sql)) {
		 ?><div class="box">
		 <p><h1>Perfíl de Escrtior actualizado exitosamente</h1></p>
		 </div>
		 <form action="Escritor.php" method="post">
                                <p><input type="submit" class="btn btn-primary" value="Aceptar"/></p></form>
		 <?php
	 } else{
		?><div class="box">
		<p><h1>Error al actualizar Escritor</h1></p>
		</div>
		<form action="pantallaperfilescritor.php" method="post">
							   <p><input type="submit" class="btn btn-primary" value="Regresar"/></p></form>
	 <?php  

	 }

}
?>

<?php require_once 'include/footer.php'?>