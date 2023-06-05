<!-- resources/views/empleados/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>RF-02</title>
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
            max-width: 800px;
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

        .container label,
        .container select,
        .container input[type="submit"] {
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

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: green;
            color: white;
        }

        .pagination {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pagination a {
            padding: 5px 10px;
            margin: 0 5px;
            background-color: #349938;
            color: white;
            text-decoration: none;
        }

        .pagination a:hover {
            background-color: #45a08e;
        }

        .pagination .active {
            background-color: #45a08e;
        }

        .export-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .export-button a {
            padding: 10px;
            background-color: #349938;
            color: white;
            text-decoration: none;
        }

        .export-button a:hover {
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
            <h1>RF-03</h1>
            <br>
            <h1>Reporte de Servicio Social</h1>
        </div>
    </header>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Motivo de movimiento</th>
                <th>Tipo de servicio</th>
                <th>Tabulador</th>
                <th>Periodo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resultado as $item)
            <tr>
                <td>{{ $item->motivo_movimiento }}</td>
                <td>{{ $item->tipo_de_servicio }}</td>
                <td>{{ $item->cve_tabulador }}</td>
                <td>{{ $item->periodo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="export-button">
        <a href="">Descargar en Excel</a>
        
    </div>
</body>
</html>
