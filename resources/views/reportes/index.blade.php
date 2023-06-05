<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INICIO DE SESIÓN</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <header>
    <h2>Recursos Humanos</h2>
    <h1>Reporteador</h1>
  </header>
  <div class="container1">
    <h2>
      <img src="images/login1.png" alt="">
    </h2>
  </div>
  <div class="container">
    <img src="images/logo.png" alt="">
    <h2>Iniciar sesión</h2>
    <form action="http://10.33.21.128/DAP.DesaRepo/inicio.aspx" method="POST">
      <label for="username">Nombre de usuario:</label>
      <input type="text" id="username" name="username" required>
    
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>
         
      <input type="submit" value="Iniciar sesión">
    </form>
  </div>
</body>
</html>