<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
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
    					Iniciar sesi??n
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
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/cardiologiap.jpg" alt="Cardio" width="1406" height="400">
            <div class="carousel-caption">
            <h3>Cardiologia</h3>
            <p>Siempre estudiando tu corazon</p>
            </div>   
        </div>
      <div class="carousel-item">
        <img src="../img/neurologiap.jpg" alt="Neuro" width="1406" height="400">
        <div class="carousel-caption">
          <h3>Neurologia</h3>
          <p>Somos las voces de tu cerebro</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="../img/odontologiap.jpg" alt="odonto" width="1406" height="400">
        <div class="carousel-caption">
          <h3>Odontologia</h3>
          <p>Hasta de un dolor de muela se muere</p>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

    <hr>
    </div> 
    <div id="content">
      <div id="posts">
        <article class="post">
          <h2>Titulo del articulo</h2>
          <span class="date">Fecha de publicacion</span>
          <p>
            "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
          </p>
        </article>
      </div>
    </div>
    <form>
      <label>??Compartenos tu opinion!</label>
      <br>
      <textarea name="coment" rows="5" cols="80"></textarea>
    </form>    
  </div>  
  <footer class="section footer-classic context-dark bg-image" style="background: #2d3246;" style="width: 95%;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html">
                <p>Somos un equipo de estudiantes del teconologico, trayendo ante a utedes los mas importantes descubrimientos de la medicina en el ultimo siglo. Diria que es para informar pero solo queremos olvidar la materia.</p>
                <!-- Rights-->
                <p class="rights"><span>???? </span><span class="copyright-year">2020</span><span>??</span><span>Equipo 4</span><span>.??</span><span>Libre de uso.</span></p>
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