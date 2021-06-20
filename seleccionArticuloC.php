<?php include 'include/header.php'; ?>

<br>
<h2 style="text-align: center;"> <b>Artículos de la Categoría</b> </h2>
<br>

    <table id="tabla">
        <tr id="trV">
        <th id="thV">A U T O R </th>
        <th id="thV">T Í T U L O</th>
        <th id="thV">C A T E G O R Í A</th>
        <th id="thV">O P C I Ó N</th>
        </tr>


<?php
        $dec="";
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

        $cat=$_POST['cat1'];
        $sql="SELECT id_articulo,nombre,titulo,categoria 
        from escritores 
        inner join articulos 
        on escritores.id_escritor=articulos.id_autor 
        where categoria='$cat1'";
        if(mysqli_query($db,$sql)){
            $datos=mysqli_query($db,$sql);
            while($f=mysqli_fetch_array($datos)){

                echo "<tr id=trV>";
				    echo "<td id=tdV>".$f["nombre"] ."</td>";
                    echo "<td id=tdV>".$f["titulo"]."</td>";
                    echo "<td id=tdV>".$f["categoria"]."</td>";
                    echo "<td id=tdV><form method='post' action='verArticulo.php'> \n
                    <input type='hidden' name='bVer'  value='".$f["id_articulo"]."'>
                    <input type='submit' id='btnVer' value='VER'>
                    </form></td>";
                    echo "</tr>";
            }
        }else{
            echo "Error: " . $sql . ":" . mysqli_error($db);
        }

        


    ?>

</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php require_once 'include/footer.php'?>