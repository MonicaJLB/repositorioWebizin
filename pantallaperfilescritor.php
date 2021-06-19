<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
		
    <title>Document</title>
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
        <div class="box">
    <p><h1>Formulario de registro</h1></p> </div>
    <div class="box">
   <p>
    <label for="fname">Nombre de usuario: </label>
    <input type="text" id="fname" name="fname"></p></div>
    <div class="box">
    <p>
        <label for="fname">Correo: </label>
        <input type="text" id="fname" name="fname"></p></div>
        <div class="box">
        <p>
            <label for="fname">Contraseña: </label>
            <input type="password" id="password" name="password"><i class="bi bi-eye-slash" id="togglePassword"></i></p></div>
            <div class="box">
            <p>
                <label for="quantity">#Articulos escritos: </label>
                <input type="number" id="fname" name="fname" min="0" size="10"></p></div>
                <div class="box">
                <p>
                    <label for="quantity">#Articulos publicados: </label>
                    <input type="number" id="fname" name="fname" min="0" size="10"></p></div>
                    <div class="box">
                    <p>
                        <label for="fname">Titulo/Profesión: </label>
                        <input type="text" id="fname" name="fname"></p></div>
                        <div class="box">
                        <p>
                            <label for="fname">Tema de especialidad: </label>
                            <div class="dropdown" style="float:left;">
  <button class="dropbtn">Rama de la medicina</button>
  <div class="dropdown-content" style="left:0;">
  <a class="dropdown-item" href="#">Cardiologia</a>
        				<a  href="#">Geriatria</a>
        				<a  href="#">Pediatria</a>
        				<a  href="#">Odontologia</a>
        				<a  href="#">Neurologia</a>
  </div>
</div></p>
                        </div>
                        <div class="buto">
                            <form action="accion.php" method="post">
                                <p><input type="submit" class="btn btn-primary" value="Actualizar"/></p></form>
</div>
</div>
</div>
<script>
    const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
    </script>
</body>

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
</html>