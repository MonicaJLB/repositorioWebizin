<?php
	$servidor = "localhost";
	$usuarioBD = "root";
	$pwdBD = "";
	$nomBD = "webizin";
	$db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD) or die("Error al conectar la base de datos");
	
	function delete($tblname,$field_id,$id){

	$sql = "delete from ".$tblname." where ".$field_id."=".$id."";
	
	return db_query($sql);
}
?>

<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='Escritor.php';
</script>