<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
	<title></title>
</head>
<body>
	<div class="contenedor">
		<div>
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
  					<button type="button" class="btn btn-light" id="show">
    					Iniciar sesión
  					</button>
  				</li>
  				<li class="nav-item">
  					<button type="button" class="btn btn-light" id="show">
    					Registrarse
  					</button>
  				</li>
  			</ul>
			</nav>
		</div>
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
     <div>
     <main>
    </aside>
    <section>
    <div id="escritor" >
    <h1 style="text-align: center; "> Bienvenido </h1>
    <h2 style="text-align: center; "> Crear nuevo articulo</h2>
<fieldset title= "Formulario" style="text-align: center;">
 <form method ="get" action="">
   Imagen: <input type="file" id="img">
   <br>
    id_Articulo: <input type="text" name ="id_Art">
    <br>
    id_Autor: <input type="text" name ="id_Aut">
    <br>
  	Tema:
    <select class ="form-control">
      			<option>Cardiologia</option>
            <option>Geriatria</<option>
            <option>Pediatria</option>
            <option>Odontologia</option>
            <option>Neurologia</option>
            </select>
      				
<br>
      Decadas:
      <select class ="form-control">
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
Articulo: <textarea class="form-control" rows="6">Escriba aquí Articulo</textarea>
<input type="submit" value="Crear" class="fa fa-login"style="background: green; text-align: center;">
</form>
</fieldset>
 </div>

 <div>
 <h2 style="text-align: center; ">Artuculos</h2>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id_Articulo</th>
      <th scope="col">id_Autor</th>
      <th scope="col">Categoria</th>
      <th scope="col">Decada</th>
      <th scope="col">Articulo</th>
      <th scope="col">imagen</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">001</th>
      <td>001</td>
      <td>Pediatria</td>
      <td>1920-1930</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui magnam iure enim inventore, doloremque nisi deleniti architecto possimus aspernatur. Ducimus doloribus nesciunt beatae praesentium excepturi enim perferendis amet architecto corrupti?</td>
      <td>img</td>
      <td>
      <input class="btn btn-warning" type="button" value="Editar">
      <input class="btn btn-danger" type="button" value="Eliminar">
      <input class="btn btn-info" type="button" value="Publicar">
      </td>
    </tr>
    <tr>
    <th scope="row">001</th>
      <td>001</td>
      <td>Pediatria</td>
      <td>1920-1930</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui magnam iure enim inventore, doloremque nisi deleniti architecto possimus aspernatur. Ducimus doloribus nesciunt beatae praesentium excepturi enim perferendis amet architecto corrupti?</td>
      <td>img</td>
      <td>
      <input class="btn btn-warning" type="button" value="Editar">
      <input class="btn btn-danger" type="button" value="Eliminar">
      <input class="btn btn-info" type="button" value="Publicar">
      </td>
    </tr>
    <tr>
    <th scope="row">001</th>
      <td>001</td>
      <td>Pediatria</td>
      <td>1920-1930</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui magnam iure enim inventore, doloremque nisi deleniti architecto possimus aspernatur. Ducimus doloribus nesciunt beatae praesentium excepturi enim perferendis amet architecto corrupti?</td>
      <td>img</td>
      <td>
      <input class="btn btn-warning" type="button" value="Editar">
      <input class="btn btn-danger" type="button" value="Eliminar">
      <input class="btn btn-info" type="button" value="Publicar">
      </td>
    </tr>
  </tbody>
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
      <th scope="col">Decada</th>
      <th scope="col">Articulo</th>
      <th scope="col">imagen</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">001</th>
      <td>001</td>
      <td>Pediatria</td>
      <td>1920-1930</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui magnam iure enim inventore, doloremque nisi deleniti architecto possimus aspernatur. Ducimus doloribus nesciunt beatae praesentium excepturi enim perferendis amet architecto corrupti?</td>
      <td>img</td>
      <td>
      <input class="btn btn-info" type="button" value="Ver">
      </td>
    </tr>
    <tr>
    <th scope="row">001</th>
      <td>001</td>
      <td>Pediatria</td>
      <td>1920-1930</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui magnam iure enim inventore, doloremque nisi deleniti architecto possimus aspernatur. Ducimus doloribus nesciunt beatae praesentium excepturi enim perferendis amet architecto corrupti?</td>
      <td>img</td>
      <td>
      <input class="btn btn-info" type="button" value="Ver">
      </td>
    </tr>
    <tr>
    <th scope="row">001</th>
      <td>001</td>
      <td>Pediatria</td>
      <td>1920-1930</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui magnam iure enim inventore, doloremque nisi deleniti architecto possimus aspernatur. Ducimus doloribus nesciunt beatae praesentium excepturi enim perferendis amet architecto corrupti?</td>
      <td>img</td>
      <td>
      <input class="btn btn-info" type="button" value="Ver">
      </td>
    </tr>
  </tbody>
</table>
</div>
  </section>
</main>
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