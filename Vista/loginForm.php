<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Ingreo al modulo registro de la pagina +++++">
  <link rel="stylesheet" href="../assets/css/estilos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="shortcut icon" href="img/papeleria-logo.png" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bevan&family=Handjet:wght@100;200;300;400;500&family=Lato:ital,wght@0,100;0,400;1,400&family=Montserrat:ital,wght@0,100;0,200;1,600&family=Noto+Serif+Vithkuqi:wght@600&family=Raleway:wght@100;300;500&family=Roboto:ital,wght@0,100;0,300;0,500;0,900;1,100;1,300;1,900&family=Source+Code+Pro:wght@200;300;400&display=swap" rel="stylesheet">


  <title>Inicio de sección | Papelería Benneton</title>
</head>

<body>

  <div class="container">
    <div id="contenedor-1">

      <div class="cabecera">
        <img id="logo" src="../img/iconSección.png" alt=""><br>
        <h2>Papelería Benetton</h2>
        <h3>Inicio de Sesión </h3>

      </div>

      <form action="loginAuth.php" method="post">
        <div>

          <span>Correo</span><br>
          <input name="email" id="email" type="text" placeholder="Escribe tu correo aquí">
          <br>
          <br>
          <span>Contraseña</span>
          <br>
          <input name="password" id="password" type="password" placeholder="Escribe tu contraseña aquí">
          <br>
          <br>
          <button name="btnLogin" id="btnLogin">INICIA SESIÓN</button><br>
          <br>
          <span id="olvi"> <a href="">¿Olvidaste tu contraseña?</a></span><br>
          <span id="olvi-2"><a href="register.php">Registrate</a></span>


        </div>
      </form>
    </div>
  </div>
  <script src="../js/script.js"></script>
</body>

</html>