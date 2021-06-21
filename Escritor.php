<?php
$dato1=0;
$error="";
if (isset($_POST["submit"])) {
       if($_POST['id_Art']==""){
 
        $dato1=1;
       
      }
      if($_POST['id_Aut']==""){
       
        $dato1=1;
       
      } if($_POST['categoria']==""){
     
        $dato1=1;
    
      }
      if($_POST['subcategoria']==""){
      
        $dato1=1;
      
      }
      if($_POST['estado']==""){
      
        $dato1=1;
       
      }
      if($_POST['titulo']==""){
    
        $dato1=1;
       
      }
      if($_POST['creditos']==""){
       
        $dato1=1;
       
      }
      if($_POST['fecha']==""){
       
        $dato1=1;
       
      }
      if($_POST['lugar']==""){
       
        $dato1=1;
       
      }
      if($_POST['contenido']==""){
       
        $dato1=1;
       
      }
      if($_POST['premios']==""){
       
        $dato1=1;
       
      }
      if($_POST['comentario']==""){
       
        $dato1=1;
       
      }
      if($dato1==0){

      
  if (insertar($_POST['id_Art'], $_POST['id_Aut'], $_POST['categoria'], $_POST['subcategoria'], $_POST['estado'], $_POST['titulo'], $_POST['creditos'], $_POST['fecha'], $_POST['lugar'], $_POST['contenido'], $_POST['premios'], $_POST['comentario'], $_FILES)) {
   ?> 
   <script type="text/javascript">
    alert("Almacenado Correctamente");
</script>
    
    <?php
  } else {
      ?>
    <script type="text/javascript">
    alert("Almacenado Incorrectamente");
</script>
     <?php
  }
}else{
  ?>
  <script type="text/javascript">
  alert("Los campos no estan llenados Correctamente");
</script>
   <?php
}
}

function insertar($id_Art, $id_Aut, $categoria, $subcategoria, $estado, $titulo, $creditos, $fecha, $lugar, $contenido, $premios, $comentario){
 

  $servidor = "localhost";
  $usuarioBD = "root";
  $pwdBD = "";
  $nomBD = "webizin";
  $db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD) or die("Problemas unu");
  
  $sql = "INSERT INTO `articulos`(`id_articulo`, `id_autor`, `categoria`, `subcategoria`, `estado`, `titulo`, `creditos`, `fecha_desc`, `lugar`, `contenido`, `premios`, `id_comentario`)
  VALUES('$id_Art', '$id_Aut', '$categoria', '$subcategoria', '$estado', '$titulo', '$creditos', '$fecha', '$lugar', '$contenido', '$premios', '$comentario')";


  $db->query($sql);

  return $db;
}
?>
<?php include 'include/header.php'; ?>

     <div>
     <main>
    </aside>
    <section>
    <div id="escritor" >
    <div>
			<nav class="navbar navbar-expand-sm bg-black navbar-dark" style="background-color: #54BBEC;">
      <a class="navbar-brand" href="index.php">
              Cerrar sesión: Sara
            </a>
			</nav>
    <h1 style="text-align: center; "> Bienvenido </h1>
    <h2 style="text-align: center; "> Crear nuevo articulo</h2>
<fieldset title= "Formulario" style="text-align: center;">
 <form method ="post" action="">
  id_Articulo: <input type="text" name ="id_Art">
    <br>
    id_Autor: <input type="text" name ="id_Aut">
    <br>
  	Categoria:
    <select class ="form-control" name="categoria">
      			<option>Cardiologia</option>
            <option>Geriatria</<option>
            <option>Pediatria</option>
            <option>Odontologia</option>
            <option>Neurologia</option>
            </select>			
<br>
      Subcategoria:
      <select class ="form-control" name ="subcategoria">
    <option>1901-1910</option>
      <option>1911-1920</option>
      <option>1921-1930</option>
      <option>1931-1940</option>
      <option>1941-1950</option>
      <option>1951-1960</option>
      <option>1961-1970</option>
      <option>1971-1980</option>
      <option>1981-1990</option>
      <option>1991-2000</option>
      <option>2001-2010</option>
      <option>2011-2020</option>
      </select>
    <br>
    Estado: <input type="text" name ="estado">
    <br>
    Titulo: <input type="text" name ="titulo">
    <br>
    Creditos: <input type="text" name ="creditos">
    <br>
    Fecha del descubrimiento: <input type="date" name ="fecha">
    <br>
    Lugar: <input type="text" name ="lugar">
    <br>
Contenido: <textarea class="form-control" rows="3" name="contenido"></textarea>
<br>
Premios: <input type="text" name ="premios">
    <br>
    id_comentario: <input type="text" name ="comentario">
    <br><br>
    <button class="btn btn-primary" type="submit" id="submit" name="submit">Crear</button>
</form>
</fieldset>
 </div>

 <div>
 <h2 style="text-align: center; ">Articulos</h2>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id_Articulo</th>
      <th scope="col">id_Autor</th>
      <th scope="col">Categoria</th>
      <th scope="col">Subcategoria</th>
      <th scope="col">Estado</th>
      <th scope="col">Titulo</th>
      <th scope="col">Creditos</th>
      <th scope="col">Fecha</th>
      <th scope="col">Lugar</th>
      <th scope="col">Contenido</th>
      <th scope="col">Premios</th>
      <th scope="col">id_comentario</th>
      <th scope="col">Accion</th> 
    </tr>
  </thead>
  <tbody>
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
?>
<?php 
        $sql = "SELECT * FROM articulos WHERE creditos = 'sara' and estado='0' ";
       $resut= mysqli_query($db,$sql);
       while($mostrar=mysqli_fetch_array($resut)){ 
            ?>
           
         <tbody>              
            <td><?php echo $mostrar['id_articulo'] ?></td>
            <td><?php echo $mostrar['id_autor'] ?></td>
            <td><?php echo $mostrar['categoria'] ?></td>
            <td><?php echo $mostrar['subcategoria'] ?></td>
            <td><?php echo $mostrar['estado'] ?></td>
            <td><?php echo $mostrar['titulo'] ?></td>
            <td><?php echo $mostrar['creditos'] ?></td>
            <td><?php echo $mostrar['fecha_desc'] ?></td>
            <td><?php echo $mostrar['lugar'] ?></td>
            <td><?php echo $mostrar['contenido'] ?></td>
            <td><?php echo $mostrar['premios'] ?></td>
            <td><?php echo $mostrar['id_comentario'] ?></td>
            <td><a href="update.php"> <button  class = " btn btn-warning " type="submit"  name="name">Editar</button>
<a href='eliminar.php?no=".$filas['no']."''>  <button  class = " btn btn-danger "  type = " button "  >Eliminar</button>
<a href="publicar.php"><button  class = " btn btn-info "  type = " button "  >Publicar</button>
            </tbody>
            <?php }   ?>
</table>
</div>

<div>
<h2 style="text-align: center; "> Articulos Publicados</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id_Articulo</th>
      <th scope="col">id_Autor</th>
      <th scope="col">Categoria</th>
      <th scope="col">Subcategoria</th>
      <th scope="col">Estado</th>
      <th scope="col">Titulo</th>
      <th scope="col">Creditos</th>
      <th scope="col">Fecha</th>
      <th scope="col">Lugar</th>
      <th scope="col">Contenido</th>
      <th scope="col">Premios</th>
      <th scope="col">id_comentario</th>
      <th scope="col">Accion</th> 
    </tr>
  </thead>
  <tbody>
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
?>
<?php 
        $sql = "SELECT * FROM articulos WHERE creditos = 'sara' and estado='1'";
       $resut= mysqli_query($db,$sql);
       while($mostrar=mysqli_fetch_array($resut)){ 
            ?>
           
         <tbody>              
            <td><?php echo $mostrar['id_articulo'] ?></td>
            <td><?php echo $mostrar['id_autor'] ?></td>
            <td><?php echo $mostrar['categoria'] ?></td>
            <td><?php echo $mostrar['subcategoria'] ?></td>
            <td><?php echo $mostrar['estado'] ?></td>
            <td><?php echo $mostrar['titulo'] ?></td>
            <td><?php echo $mostrar['creditos'] ?></td>
            <td><?php echo $mostrar['fecha_desc'] ?></td>
            <td><?php echo $mostrar['lugar'] ?></td>
            <td><?php echo $mostrar['contenido'] ?></td>
            <td><?php echo $mostrar['premios'] ?></td>
            <td><?php echo $mostrar['id_comentario'] ?></td>
            <td>
            
  
    <button  class = " btn btn-warning " type="submit"  name="name">Ver</button>
  
</form>
            </tbody>
            <?php }   ?>
</table>
</div>
  </section>
</main>
     </div>
 <?php require_once 'include/footer.php'?>
 