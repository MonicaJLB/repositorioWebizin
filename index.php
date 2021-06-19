<?php include 'include/header.php'; ?>
<div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2" class="active"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
      </ul>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/cardiologiap.jpg" alt="Cardio" id="car">
            <div class="carousel-caption">
              <h3>Cardiología</h3>
              <div class="linea-division"></div>
              <p>Estudios recientes sobre el cuidado del corazón</p>
            </div>   
        </div>

        <div class="carousel-item">
          <img src="img/neurologiap.jpg" alt="Neuro" id="car">
          <div class="carousel-caption">
            <h3>Neurología</h3>
            <div class="linea-division"></div>
            <p>Especialistas hablan sobre el cerebro</p>
          </div>   
         </div>

         <div class="carousel-item">
          <img src="img/odontologiap.jpg" alt="Odon" id="car">
          <div class="carousel-caption">
            <h3>Odontología</h3>
            <div class="linea-division"></div>
            <p>Informacion para una sonrisa deslumbrante</p>
          </div>   
        </div>

        <div class="carousel-item">
          <img src="img/pediatria.jpg" alt="pediatria"  id="car">
          <div class="carousel-caption">
            <h3>Pediatría</h3>
            <div class="linea-division"></div>
            <p>Informacion para los pequeños del hogar</p>
          </div>   
        </div>

        <div class="carousel-item">
          <img src="img/geriatria.jpg" alt="ger" id="car">
          <div class="carousel-caption">
            <h3>Geriatría</h3>
            <div class="linea-division"></div>
            <p>Lo mas actual para nuestros mayores</p>
          </div>   
      </div>

      <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>
</div>
  <hr>

  <h2> Novedades </h2> 

  <div class="row" id="ArtEjemplo">
    <div class="col-6">
        <table id="demoA">
          <tr>
              <th colspan="2" style="text-align: center;"><h2>Título del Artículo<hr><h2></th>  
          </tr>

          <tr>
            <td>
                <img src="img/pediatria.jpg" alt="DemoArticulo" width="350px" height="250px" style="padding: 10px;"><br>
            </td>
            <td>
                <h4>Fecha de publicación</h4>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quis necessitatibus 
                    assumenda quo ipsum ullam quos. Possimus sapiente, quisquam recusandae debitis 
                    voluptatum ex ipsa iure nulla, corporis illo eius consequatur
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In quis necessitatibus 
                    assumenda quo ipsum ullam quos. Possimus sapiente, quisquam recusandae debitis 
                    voluptatum ex ipsa iure nulla, corporis illo eius consequatur...</h5>
            </td>
          </tr>
          <tr>
              <th colspan="2" style="text-align:right;">
              <a href="#" class="btn btn-primary" >Leer mas</a><hr></th>
          </tr>
        </table>       
      </div>   
       

    <div class="col-6">
    <table id="demoB">
          <tr>
              <th colspan="2" style="text-align: center;"><h2>Título del Artículo<hr><h2></th>  
          </tr>

          <tr>
            <td>
                <img src="img/odontologiap.jpg" alt="DemoArticulo" width="350px" height="250px" style="padding: 10px;"><br>
            </td>
            <td>
                <h4>Fecha de publicación</h4>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quis necessitatibus 
                    assumenda quo ipsum ullam quos. Possimus sapiente, quisquam recusandae debitis 
                    voluptatum ex ipsa iure nulla, corporis illo eius consequatur
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In quis necessitatibus 
                    assumenda quo ipsum ullam quos. Possimus sapiente, quisquam recusandae debitis 
                    voluptatum ex ipsa iure nulla, corporis illo eius consequatur...</h5>
            </td>
          </tr>
          <tr>
              <th colspan="2" style="text-align:right;">
              <a href="#" class="btn btn-primary" >Leer mas</a><hr></th>
          </tr>
        </table>

    </div>

  </div>

<?php require_once 'include/footer.php'?>