<!DOCTYPE html>
<html>
<head>
  <title>Formulario RF-03</title>
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
    <div class="header-column">
      <img src="images/logo.png" alt="Imagen del Encabezado">
    </div>
    <div class="header-column">
      <h1>RF-03 </h1>
      <br>
      <h1>Reporte de Servicio Social</h1>
    </div>
  </header>
  
  <div class="container">
    <h2>Seleccione los criterios</h2> <br> <br>
    <form action="{{ route('pruebas3') }}" method="POST">
      @csrf
      <label for="campo1">Motivo de Movimiento</label>
      <select id="campo1" name="campo1" required>
        <option value="">Selecciona una opción</option>
        @foreach ($motivos as $motivo)
        <option value="{{$motivo->concatenar}}">{{$motivo->concatenar}}</option>    
        @endforeach
      </select> <br>
      
      <label for="campo2">Tipo de Servicio</label>
      <select id="campo2" name="campo2" required>
        <option value="">Selecciona una opción</option>
        @foreach ($servicios as $servicio)
        <option value="{{$servicio->concatenar1}}">{{$servicio->concatenar1}}</option>    
        @endforeach
      </select> <br>
      
      <label for="campo3">Tabulador</label>
      <select id="campo2" name="campo2" required>
        <option value="">Selecciona una opción</option>
        @foreach ($tabuladores as $tabulador)
        <option value="{{$tabulador->cve_tabulador}}">{{$tabulador->cve_tabulador}}</option>    
        @endforeach
      </select> <br> <br>


      <input type="submit" value="Descargar XLSX">

      <input type="submit" value="Cerrar Sesión">
