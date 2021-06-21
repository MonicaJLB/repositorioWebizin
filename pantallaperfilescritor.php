<?php include 'include/header.php'; ?><br>
<?php
$servidor="localhost";
$usuarioBD="root";
$pwdBD="";
$nomBD="progweb";

$db=mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);


?>
<head>
   <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
		
</head>
<body>
        <div class="box">
    <p><h1>Mi perfíl de escritor</h1></p> </div>
    
    <form action="actualizar.php" method="post">
    <div class="box">
   <p>
    <label for="fname">Nombre de usuario: </label>
    <input type="text" name="newusername"></p></div>
    <div class="box">
    <p>
        <label for="fname">Correo: </label>
        <input type="text" name="correo"></p></div>
        <div class="box">
        <p>
            <label for="fname">Contraseña: </label>
            <input type="password" id="password" name="password"><i class="bi bi-eye-slash" id="togglePassword"></i></p></div>
            <div class="box">
            <p>
                <label for="quantity">#Articulos escritos: </label>
                <input type="number" name="artescr" min="0" size="10"></p></div>
                <div class="box">
                <p>
                    <label for="quantity">#Articulos publicados: </label>
                    <input type="number" name="artpub" min="0" size="10"></p></div>
                    <div class="box">
                    <p>
                        <label for="fname">Titulo/Profesión: </label>
                        <input type="text"  name="titulo"></p></div>
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
                                <p><input type="submit" class="btn btn-primary" value="Actualizar"/></p>
</div>
</form>
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
