<?php

// inicializar la sesion 
session_start();

$id=$_SESSION['id_usuario'];
?>

<?php



if(!empty($_POST)){
    $n=$POST["nombre"];
	if(isset($_POST["nombre"]) &&isset($_POST["fecha_nac"]) &&isset($_POST["preferencias"]) ){
		if($_POST["nombre"]!=""&& $_POST["fecha_nac"]!=""&&$_POST["preferencias"]!=""){
			include "conexion_bd.php";
            $c=$_SESSION['id_usuario'];
            $n=$_POST['nombre'];
            $f=$_POST['fecha_nac'];
            $p=$_POST['preferencias'];
			$sql = "update usuarios set nombre='".$_POST['nombre']."', fecha_nac='".$_POST['fecha_nac']."', preferencias='".$_POST['preferencias']."' where id_usuario=".$_SESSION['id_usuario'];
            
			$query = $con->query($sql);
			if($query!=null){
				
                $_SESSION['nombre']=$_POST['nombre'];
                $_SESSION['fecha_nac']=$_POST['fecha_nac'];
                $_SESSION['preferencias']=$_POST['preferencias'];
                print "<script>alert(\"Actualizado exitosamente .\");window.location='user.php';</script>";

			}else{
				print "<script>alert(\"No se pudo actualizar d $n $f $p $sql $c.\");window.location='user.php';</script>";

			}
		}else{
            print "<script>alert(\"No se pudo actualizar c.\");window.location='user.php';</script>";
        }
	}else{
        print "<script>alert(\"No se pudo actualizar b .\");window.location='user.php';</script>";
    }
}else{
    print "<script>alert(\"No se pudo actualizar a.\");window.location='user.php';</script>";
}



?>