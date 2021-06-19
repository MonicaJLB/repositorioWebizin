<?php include 'include/header.php'; ?>
<br>
<div class="login">
    <h2>Iniciar Sesión</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <img src="img/ic_logeo.png" alt="Usuario" width="250px" height="200px" ><br>
            <table id="sing">
                <tr>
                    <td id="td">
                        <h5><b>Usuario:</b></h5>
                    </td>
                    <td id="td">
                        <input type="text" name="login"  class="form-control">
                        
                    </td>
                </tr>
                <tr>
                    <td id="td">
                        <h5><b>Contraseña:</b></h5>
                    </td>
                    <td id="td">
                        <input type="password" name="pwd" class="form-control" id="txtPassword">
                        <input ID="ShowPassword" type="checkbox">
                    </td>
                </tr>
            </table>
        <input type="image" alt="Boton Ingresar" width="150px" height="30px" src="img/btnIngresar.png">
    </form>
 
</div>
<br>

<?php require_once 'include/footer.php'?>