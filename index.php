<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login Page | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>facebook</h1>
          <p>Facebook te ayuda a comunicarte y</p>
          <p>compartir con las personas que </p>
            <p>forman parte de tu vida.</p>
        </div>
        <form action="ingresar.php">
          <input name="email" type="email" placeholder="Correo electronico o numero de telefono" required>
          <input name="password" type="password" placeholder="contraseña" required>
          <div class="link">
            <button type="submit" class="login">Iniciar sesion</button>
            <a href="#" class="forgot">¿Has olvidado la contraseña?</a>
          </div>
          <hr>
          <div class="button">
            <a href="#">Crear cuenta nueva</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>