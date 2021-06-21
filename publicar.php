<?php 
	$servidor= "localhost";
    $usuarioBD = "root";
    $pwdBD = "";
    $nomBD = "webizin";
    $db = mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);
    if(!$db){
        die("la coneccion fallo" . mysqli_connect_error());
    }
else {
    mysqli_query($db,"SET NAMES 'utf8' ");
}
  

  $id_Art=$_POST['id_Art'];
  $id_Aut=$_POST['id_Aut'];
  $categoria=$_POST['categoria'];
  $subcategoria=$_POST['subcategoria'];
  $estado=$_POST['estado'];
  $titulo=$_POST['titulo'];
  $creditos=$_POST['creditos'];
  $fecha=$_POST['fecha'];
  $lugar=$_POST['lugar'];
  $contenido=$_POST['contenido'];
  $premios=$_POST['premios'];
  $comentario=$_POST['comentario'];

$sql="UPDATE articulos SET id_Art='$id_Art',id_Aut='$id_Aut',categorias='$categoria',subcategoria='$subcategoria',estado='1'
  ,titulo='$titulo',creditos='$creditos',fecha='$fecha'lugar='$lugar',contenido='$contenido',premios='$premios',comentario='$comentario' 
   where id_Art='$id_Art'";
  echo $result=mysqli_query($db,$sql);
 ?>
 
 <script type="text/javascript">
	alert("Articulo publicado");
	window.location.href='Escritor.php';
</script>