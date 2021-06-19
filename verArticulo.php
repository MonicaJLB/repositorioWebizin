<?php include 'include/header.php'; ?>


<?php
        $categoria = $subcategoria= $titulo = $contenido=$comentario=$creditos=$fechaD=$lugar=$premios= "";
        $servidor="localhost";
        $usuarioBD="root";
        $pwdBD="";
        $nomBD="webizin";
        
        $db= mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);
        if(!$db)
        {
            die("La conexion fallo: " . mysqli_connect_error());
        }
        else{
            mysqli_query($db,"SET NAME 'UTF8'");
        }
        $id = $_POST['bVer'];

        $sql="SELECT titulo,categoria,subcategoria,contenido,id_comentario,creditos,fecha_desc,lugar,premios
         FROM articulos WHERE id_articulo=$id";
        $result = mysqli_query($db, $sql);

        if($row = mysqli_fetch_array($result)){
            //Guardo los datos de la BD en las variables de php
            $titulo = $row[0];
            $categoria = $row[1];
            $subcategoria = $row[2];
            $contenido = $row[3];
            $comentario = $row[4];
            $creditos= $row[5];
            $fechaD= $row[6];
            $lugar= $row[7];
            $premios= $row[8];


         }

           
    ?>

<br>

<h2 style="text-align: center;"><b><?php echo $titulo;?></b></h2>

        <div class="row">
        <div class="col-1">

        </div>
            <div class="col-10">
                <h5><b>Categoría:</b></h5>
                <input type="text" name="categ"  class="form-control" value="<?php echo $categoria;?>" readonly>                        
                <h5><b>Subcategoria:</b></h5>
                <input type="text" name="subcateg" class="form-control" value="<?php echo $subcategoria;?>" readonly>
                <h5><b>A quien corresponde:</b></h5>
                <input type="text" name="cred" class="form-control" value="<?php echo $creditos;?>" readonly>
                <h5><b>Fecha de descubrimiento:</b></h5>
                <input type="date" name="feD" class="form-control" value="<?php echo $fechaD;?>" readonly>
                <h5><b>Lugar:</b></h5>
                <input type="text" name="luga" class="form-control" value="<?php echo $lugar;?>" readonly>
                <h5><b>Premios Recibidos:</b></h5>
                <input type="text" name="prem" class="form-control" value="<?php echo $premios;?>" readonly>     
                <h5><b>Contenido:</b></h5>
                <textarea name="cont" class="form-control" rows="5" cols="5"" readonly><?php echo $contenido;?></textarea>
                <h5><b>Comentarios:</b><span></h5>
                <textarea name="com" class="form-control" rows="5" cols="5"" readonly><?php echo $comentario;?></textarea>
                <br>
                <input type="button" onclick="alert('Requiere iniciar sesión para comentar')" value="Comentar Artículo" />
                
            </div> 
               
            </div>
        </div>

        <div class="col-1">
            
        </div>


    <?php require_once 'include/footer.php'?>