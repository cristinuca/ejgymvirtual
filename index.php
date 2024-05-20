<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      min-heigth: 100vh;
      background-image: url(./log/img/bg.jpg);
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
</head>
<body>

  <form action="reg.php" method="post" class="registrar">
    <h2>Registrar</h2>

    <input type="text" name="nombre" placeholder="Ingrese el nombre">
    <input type="email" name="email" placeholder="Ingrese el email">
    <input type="text" name="usuario" placeholder="Ingrese el usuario">
    <input type="password" name="contraseña" placeholder="Ingrese una contraseña">

    <!---imput*4 por ej para poner 4 imput,segun nº imputs-->
    <button>REGISTRAR</button>
  </form>

  <form action="iniciarsesion.php" method="post" class="iniciar">
    <h2>Iniciar sesión</h2>

    <input type="email" name="email" placeholder="Ingrese el email">
    <input type="password" name="contraseña" placeholder="Ingrese la contraseña"> 
    
    <button>ENTRAR</button><!---MUY IMPORTANTE TYPE:PASWORD para q no se vea al escribir,si es text, se ve--->
  </form>

</body>
</html>