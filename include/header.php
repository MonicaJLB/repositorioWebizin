<!doctype html>
<html lang="es">
  <head>
    <title>Proyecto Unidad 5</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    

    <style>
       
        /*MEDIA QUERIES*/
    @media screen and (max-width:767px){
        .caja{
            width: 100%;
            padding: 5px 10px;
        }
    }
    @media screen and (min-width:767px) and (max-width:1023px){
        .caja{
            width: 100%;
            padding: 5px 10px;
        }
    }

    @media screen and (min-width:1024px){
        .caja{
            width: 100%;
            padding: 5px 15px;
        }
    }

    @media screen and (min-width:1280px){
        .caja{
            width: 80%;
            padding: 5px 15px;
        }
    }

    *{
        box-sizing: border-box;
    }

    body{
        background: #bbdff5;
        margin-left: auto;
        margin-right: auto ;
        width: 90%;
    }

    .Jumbotron-fluid{
        background-color:  #5cbcf7 ;
        color: whitesmoke;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-align: center;

    }

    .pie{
        background-color: #5cbcf7 ;
        color: whitesmoke;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 10px;
    }

    #btn1,#bt3,#bt2,#btn2,#btn3,#btn4,#btn5,#btn6{
            background-color: rgb(33, 47, 50 );
            border-color: rgb(33, 47, 50 );
            height: 90px;
            width: 150px;
        }

        #btn1:hover,#btn2:hover,#btn4:hover,#btn5:hover,#btn6:hover,#btn3:hover{
            background-color:lightblue;
            color: blue;           
        }
    
    #menC,#menD{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: darkblue;
    }

    h1{
        font-size:100px;
        text-align: left;
    }
    
    h2{
        text-align: center;
        color: darkblue;
    }
    h4{
        text-align: left;
        color: darkblue;
    }

    #car{
        height: 400px;
        width: 1500px;

    }
    #demo{
        text-align: center;
        padding: 15px;
        height: auto;
        width: auto;
    }
    .linea-division {
    width: 100%;
    height: 5px;
    background-color: darkblue;
    }

    p{
    margin: 0;
    color:rgb( 21, 72, 230 );
    display: inline;
    font-size: 30px;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    h3{
    color: #fff;
    text-shadow: 2px 2px 1px rgba(0,0,0,0.7);
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    margin-top: 0;
    font-size: 50px;
    font-weight: 500

    }

    h5{
        text-align: left;
        font-size: 15px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: rgba(0,0,0,0.7);
    }

    #etnosotros{
        text-align: center;
        align-items: center;
        color: blue;
        font-size: 30px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    #nosPad{
        padding: 30px;
    }

    #nos{
        width: 120px;
        height: 100px;
    }

    </style>

<script type="text/javascript">
$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#txtPassword').attr('type', $(this).is(':checked') ? 'text' : 'txtPassword');
	});
});
</script>

  </head>
  <body>
    <div class="container-fluid">
        <div class="Jumbotron-fluid">
        <div class="row">
            <div class="col-6">
            <img src="img/logo.png" alt="mi logo" width="250px" height="150px">
            </div>
            <div class="col-6">
                <h1> Wedizin</h1>
                <h4>Artículos Médicos de Relevancia</h4>
            </div>
        </div>

        </div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colapsa">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="colapsa">
                <ul class="nav">
                    <button class="nav-item" id="btn1">
                        <a href="index.php" class="nav-link">
                            <img src="img/home.png" alt="Inicio" width="80px" height="70px">
                        </a>
                    </button>

                    <button class="nav-item dropdown" id="bt2">
                        <a class="nav-link dropdown-toggle" href="#" id="btn2" data-toggle="dropdown">
                        <img src="img/decadas.png" alt="Decadas" width="80px" height="70px">
                        </a>
                        <div class="dropdown-menu" id="menD">
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
                    </button>


                    <button class="nav-item dropdown" id="bt3">
      				<a class="nav-link dropdown-toggle" href="#" id="btn3" data-toggle="dropdown">
                      <img src="img/categ.png" alt="Categorias" width="80px" height="70px">
      				</a>
      				<div class="dropdown-menu" id="menC">
        				<a class="dropdown-item" href="#">Cardiologia</a>
        				<a class="dropdown-item" href="#">Geriatria</a>
        				<a class="dropdown-item" href="#">Pediatria</a>
        				<a class="dropdown-item" href="#">Odontologia</a>
        				<a class="dropdown-item" href="#">Neurologia</a>
      				</div>
                    </button>

                    <button class="nav-item" id="btn4">
                        <a href="nosotros.php" >
                            <img src="img/nosotros.png" alt="Nosotros" width="80px" height="70px">
                        </a>  
                    </button>
                    <button class="nav-item" id="btn5">
                        <a href="" >
                            <img src="img/i_sesion.png" alt="Iniciar Sesión" width="100px" height="70px">
                        </a>  
                    </button>
                    <button class="nav-item" id="btn6">
                        <a href="" >
                            <img src="img/registrarse.png" alt="Registrarse" width="80px" height="70px">
                        </a>  
                    </button>
                </ul>
                
            </div>    
        </nav>

       
        


        


        
