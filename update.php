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
<form method ="post" action="aux_up.php">
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
    <button class="btn btn-primary" type="submit" id="submit" name="submit">Editar</button>
</form>
</section>
</main>
     </div>
 <?php require_once 'include/footer.php'?>