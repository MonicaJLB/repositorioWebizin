<?php include 'include/header.php'; ?><br>

<head>
 <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
	
</head>
<body>
    
        <div class="contenedor">
            <div class="box">
    <p><h1>Formulario de registro</h1></p>
    </div>
    
    <form action="registro.php" method="post">
    <div class="box">
   <p>
    <label for="fname">Nombre de usuario: </label>
    <input type="text"  name="nameuser"></p>
</div>
<div class="box">
    <p>
        <label for="fname">Correo: </label>
        <input type="text" name="correo"></p>
    </div>
    <div class="box">
        <p>
            <label for="fname">Contraseña: </label>
            <input type="password" id="password" name="password" ><i class="bi bi-eye-slash" id="togglePassword"></i></p>
        </div>
       <div class="box">
            <p>
                <label for="fname">Confirmación de contraseña: </label>
                <input type="password" id="password" name="password"><i class="bi bi-eye-slash" id="togglePassword"></i></p>
            </div> 
            <div class="box">
            <p>
                <label for="fname">Preferencias: </label>
                <input type="text" name="preferencias"></p>
            </div> 
            <div class="buto">
                    <p><input type="submit" class="btn btn-primary" name="Registrarse" value="Registrarse"/></p>
                </div>   </form>
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
<?php require_once 'include/footer.php'?>
