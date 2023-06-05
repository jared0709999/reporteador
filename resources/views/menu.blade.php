<!DOCTYPE html>
<html>
<head>
  <title>Menú</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    header {
      background: linear-gradient(to right, #5fcd9d, #4cb46c, #219e21);
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .header-column {
      flex: 1;
      display: flex;
      align-items: center;
    }
    
    .header-column h1 {
      margin: 0;
      margin-left: 10px;
    }
    
    .header-column img {
      max-width: 100px;
      height: auto;
      display: flex;
      align-items: center;
    }
    
    .container {
      max-width: 400px;
      margin: 20px auto;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      background-color: #f4f4f4;
    }
    
    .container h2 {
      text-align: center;
      margin-top: 0;
    }
    
    .container label, .container select, .container input[type="submit"] {
      display: block;
      width: 100%;
      margin-bottom: 10px;
    }
    
    .container input[type="submit"] {
      padding: 10px;
      background-color: #349938;
      color: white;
      border: none;
      cursor: pointer;
    }
    
    .container input[type="submit"]:hover {
      background-color: #45a08e;
    }
  </style>
</head>
<body>
  <header>
    <div class="header-column" style="width: 300px; margin: 0 auto;">
      <img src="images/logo.png" alt="Imagen del Encabezado">
    </div>
    <div class="header-column" style="width: 300px; margin: 0 auto;">
      <h1> </h1>
      <br>
      <h1>Menú Reporteador</h1> <br>
    </div>
  </header>
  
  <div class="container">
    <h2>Seleccione Reporte</h2> <br> <br>
    <form action="" method="POST">
      <label for="campo1">RF-01 Reporte Plantilla de Nomina</label>
      <input type="submit" value="Generar">
      
      <br>
      
      <label for="campo2">RF-02 Reporte de Equidad</label>
      <input type="submit" value="Generar"> <br>
      
      <label for="campo2">RF-03 Reporte de Servicio Social</label>
      <input type="submit" value="Generar">

      
      <br> <br> <br> <br> 

      <input type="submit" value="Cerrar sesión">
    </form>
  </div>
</body>