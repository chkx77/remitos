<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css">

    <style>
        body {
            background: #4f556b;
            margin: 0;
        }

        .navbar {
            background-color: #1E2749;
            margin-bottom: 0;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
        }

        .navbar h4 {
            color: white;
            text-shadow: 1px 1px 10px white;
            margin-right: 80px;
        }

        .container-form {
            max-width: 800px;
            margin: 20px auto;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .btn-submit,
        .btn-reset {
            width: 48%;
            margin-top: 10px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="main.php">A&M Gestion</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="main.php">Pagina Principal</a>
                    <a class="nav-link" href="nuevaOrden.php">Nuevo Remito</a>
                    <a class="nav-link" href="buscarRemito.php">Buscar Remito</a>
                    <a class="nav-link" href="https://wa.me/+543416590688">Consultas</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-form bg-secondary shadow p-3 mb-5 bg-body-tertiary rounded">
        <h2 style="background: rgb(190, 190, 190); padding: 10px 5px;">Nuevo Remito</h2>
        <hr>

         <form method="post" action="nuevaOrden.php">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="inputProducto" class="form-label">Numero de Remito</label>
                    <input type="number" class="form-control" id="inputProducto" name="numero" placeholder="Número de Remito">
                </div>

                <div class="mb-3">
                    <label for="inputProducto" class="form-label">Numero de Orden de Compra</label>
                    <input type="number" class="form-control" id="inputProducto" name="orden" placeholder="Número de Orden de Compra">
                </div>

                <div class="mb-3">
                    <label for="inputProducto" class="form-label">Numero de Carrito</label>
                    <input type="number" class="form-control" id="inputProducto" name="carrito" placeholder="Número de Carrito">
                </div>

                <div class="mb-3">
                    <label for="inputCantidad" class="form-label">Cantidad de personas</label>
                    <input type="number" class="form-control" id="inputCantidad" name="personas" placeholder="Cantidad de Personas">
                </div>

                <div class="mb-3">
                    <label for="inputProveedor" class="form-label">Horas totales de trabajo</label>
                    <input type="number" class="form-control" id="inputProveedor" name="horas" placeholder="Horas Totales de Trabajo">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="inputProveedor" class="form-label">Monto total</label>
                    <input type="number" class="form-control" id="inputProveedor" name="monto" placeholder="Monto Total">
                </div>

                <div class="mb-3">
                    <label for="inputFecha" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="inputFecha" placeholder="Empresa" name="jefe">
                </div>

                <div class="mb-3">
                    <label for="inputFecha" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="inputFecha" name="fecha">
                </div>

                <div class="mb-3">
                    <label for="inputFechaInicio" class="form-label">Fecha Inicio</label>
                    <input type="date" class="form-control" id="inputFechaInicio" name="fechai">
                </div>

                <div class="mb-3">
                    <label for="inputFechaFinal" class="form-label">Fecha Final</label>
                    <input type="date" class="form-control" id="inputFechaFinal" name="fechaf">
                </div>

                </div>
                
                <div class="mb-3">
                    <label for="inputProveedor" style="margin: 5px auto !important; text-align: center;" class="form-label">Descripcion / Anotaciones</label>
                    <input type="text" style="margin: 5px auto !important; width: 90%; padding: 15px 0px;" class="form-control" id="inputProveedor" name="descripcion" placeholder="Descripción / Anotaciones">
                </div>
            
        </div>

            <button type="submit" class="btn btn-success btn-submit">Guardar</button>
            <input type="reset" class="btn btn-danger btn-reset" value="Borrar">
        </form>
    </div>

    <?php
        include 'conexion.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['numero'])) {
                $n = $_POST['numero'];
                $o = $_POST['orden'];
                $c = $_POST['carrito'];
                $p = $_POST['personas'];
                $h = $_POST['horas'];
                $m = $_POST['monto'];
                $j = $_POST['jefe'];
                $f = $_POST['fecha'];
                $fi = $_POST['fechai'];
                $ff = $_POST['fechaf'];
                $d = $_POST['descripcion'];

                $sql = "INSERT INTO remitos (remito_numero, remito_orden, remito_carrito, remito_personas, remito_horas, remito_monto, remito_encargado, remito_fecha, remito_fechai, remito_fechaf, remito_descripcion) VALUES ('$n', '$o', '$c', '$p', '$h', '$m', '$j', '$f', '$fi', '$ff', '$d')";

                if ($conexion->query($sql) === TRUE) {
                    echo "Registro insertado correctamente";
                } else {
                    echo "Error al insertar el registro: " . $conexion->error;
                }
            }
        }

        $conexion->close();
    ?>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
