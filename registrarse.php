<?php include 'include/header.php'; ?>

<br>
<div class="formulario_registro_lector">
    <h2>Registro de Lectores</h2>
<br>
            <table id="registro_nuevo">
                <tr>
                    <td id="tdregistro">
                        <h5 id="tdregistro">Nombre de Usuario:</h5>
                    </td>
                    <td id="td">
                        <input type="text" name="nombre"  class="form-control" size="50">
                        
                    </td>
                </tr>

                <tr>
                    <td id="tdregistro">
                        <h5 id="tdregistro">Correo electrónico:</h5>
                    </td>
                    <td id="td">
                        <input type="text" name="correo"  class="form-control">
                        
                    </td>
                </tr>

                <tr>
                    <td  id="tdregistro">
                        <h5 id="tdregistro">Contraseña:</h5>
                    </td>
                    <td id="td">
                        <input type="password" name="pwd" class="form-control" id="txtPassword">
                        <input ID="ShowPassword" type="checkbox">Ver contraseña
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align:right;">
                    <input type="image" alt="Boton Registrarse" width="150px" height="50px" src="img/btn_registrarse.png">
                    </td>
                </tr>

                

            </table>
        
 
</div>
<br>




<?php require_once 'include/footer.php'?>