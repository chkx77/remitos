<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pagina principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css">
    <style>
        body {
            background: #4f556b;
        }

        .navbar {
            background-color: #1E2749;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
        }

        .navbar h4 {
            color: white;
            text-shadow: 1px 1px 10px white;
            margin-right: 80px;
        }

        #busqueda,
        #cuadroParalelo {
            text-align: center;
            padding: 10px;
            max-width: 600px;
            margin: 20px auto;
            background: grey;
            border-radius: 10px;
            box-shadow: 3px 3px 16px black;
        }

        #busqueda input,
        #cuadroParalelo input {
            text-align: center;
        }

        #busqueda label,
        #cuadroParalelo label {
            text-align: left;
            display: block;
            color: white;
            margin-bottom: 5px;
        }

        #busqueda h2,
        #cuadroParalelo h2 {
            color: white;
            text-shadow: 2px 2px 10px black;
        }

        #busqueda .form-group,
        #cuadroParalelo .form-group {
            margin-bottom: 10px;
        }

        #buscar {
            width: 100%;
            color: white;
            font-weight: 600;
            border: 0;
            border-radius: 25px;
            background: #508D69;
        }

        #buscar:hover {
            background: #9ADE7B;
            text-shadow: 1px 1px 5px black;
        }

        .tabla {
            background: white;
            border: 2px solid black;
            margin: 20px auto;
            width: 90%;
            border-collapse: collapse;
            overflow-x: auto;
        }

        .tabla th,
        .tabla td {
            border: 3px solid black;
            padding: 2px;
            text-align: center;
            font-size: 12px;
        }

        .tabla th {
            background-color: grey;
            color: white;
        }

        .tabla tbody tr:hover {
            background-color: #f5f5f5;
        }

        .row {
            margin: 0;
        }

        #cuadroParalelo {
            background-color: grey;
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 3px 3px 16px black;
            margin-top: 20px;
        }

        #cuadroParalelo form {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    #cuadroParalelo input {
        width: calc(48% - 5px);  /* Ancho ajustado para dos columnas en pantallas grandes */
        margin-bottom: 5px;
    }
    
    @media screen and (max-width: 500px) {
    #cuadroParalelo form {
        background-color: green !important;
    }
}

    #modificacion input {
        width: 39%;
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

    <div class="container-fluid">
        <div class="row">
            <!-- Panel de búsqueda -->
            <div id="busqueda" class="col-sm-6">
                <h2>Buscar remito</h2>
                <form action="buscarRemito.php" method="post" class="row">
                    <div class="form-group col-sm-4">
                        <label for="tipoBusqueda" class="form-label">Tipo de búsqueda:</label>
                        <select name="tipoBusqueda" required class="form-select">
                            <option value="porNumero">Por Número de Remito</option>
                            <option value="porFecha">Por Fecha</option>
                            <option value="porMesAnno">Por Mes y Año</option>
                        </select>
                    </div>

                    <div id="porNumero" class="form-group col-sm-4">
                        <label for="numeroRemito" class="form-label">Número de Remito:</label>
                        <input type="text" name="numeroRemito" class="form-control">
                    </div>

                    <div id="porFecha" class="form-group col-sm-4">
                        <label for="fechaRemito" class="form-label">Fecha de Remito:</label>
                        <input type="date" name="fechaRemito" class="form-control">
                    </div>

                    <div id="porMesAnno" class="form-group col-sm-12">
                        <label for="mesAnno" class="form-label">Seleccionar Mes y Año:</label>
                        <input type="month" name="mesAnno" class="form-control">
                    </div>

                    <div class="form-group col-sm-12">
                        <input type="submit" value="Buscar" id="buscar" class="btn btn-primary">
                    </div>
                </form>
            </div>

            <!-- Formulario paralelo -->
            <div class="col-sm-6">
                <div id="cuadroParalelo">
                    <h2>Formulario de Modificación</h2>
                    <form action="buscarRemito.php" id="modificacion" method="post">
                        Nº Rem<input class="col-sm-9" name="num" type="number">
                        Nº Ord<input name="ord" type="number">
                        Nº Car<input name="car" type="number">
                        Nº Per<input name="per" type="number">
                        Nº Hor<input name="hor" type="number">
                        Mont $<input name="mon" type="number">
                        Usuar.<input name="usu" type="text">
                        FechaR<input name="fer" type="date">
                        FechaI<input name="fei" type="date">
                        FechaF<input name="fef" type="date">
                        Descri<input name="des" type="text">
                        <input type="hidden" name="remito_id" id="remito_id" value="">
                        <input type="submit" value="Guardar" style="background:green; color: white; border: 0;" name="guardar">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "conexion.php";
    $mostrarTabla = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['tipoBusqueda'])) {
            $tipoBusqueda = mysqli_real_escape_string($conexion, $_POST['tipoBusqueda']);

            if ($tipoBusqueda == "porNumero" && isset($_POST['numeroRemito'])) {
                $numeroRemito = mysqli_real_escape_string($conexion, $_POST['numeroRemito']);
                $sql = "SELECT * FROM remitos WHERE remito_numero = '$numeroRemito'";
                $mostrarTabla = true;
            } elseif ($tipoBusqueda == "porFecha" && isset($_POST['fechaRemito'])) {
                $fechaRemito = mysqli_real_escape_string($conexion, $_POST['fechaRemito']);
                $sql = "SELECT * FROM remitos WHERE remito_fecha = '$fechaRemito'";
                $mostrarTabla = true;
            } elseif ($tipoBusqueda == "porMesAnno" && isset($_POST['mesAnno'])) {
                $mesAnno = mysqli_real_escape_string($conexion, $_POST['mesAnno']);
                $sql = "SELECT * FROM remitos WHERE DATE_FORMAT(remito_fecha, '%Y-%m') = '$mesAnno'";
                $mostrarTabla = true;
            } else {
                echo "Error en la selección de búsqueda.";
                exit();
            }

            if ($mostrarTabla) {
                $resultado = $conexion->query($sql);

                if ($resultado->num_rows > 0) {
                    echo "<h2 style='text-align: center; color:white;'>Resultados de la búsqueda:</h2>";
                    echo "<div class='table-responsive'>";
                    echo "<table class='tabla table'>";
                    echo "<thead><tr><th>Nº remito</th><th>Nº orden</th><th>Nº carrito</th><th>Cant.Per.</th><th>Cant.Hor.</th><th>Monto</th><th>Usuario</th><th>Fecha</th><th>Fecha In.</th><th>Fecha Fi.</th><th>Descr.</th><th>Modificar</th><th>Eliminar</th></tr></thead><tbody>";

                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td id='remito_numero_" . $fila['remito_id'] . "'>" . $fila['remito_numero'] . "</td>";
                        echo "<td id='remito_orden_" . $fila['remito_id'] . "'>" . $fila['remito_orden'] . "</td>";
                        echo "<td id='remito_carrito_" . $fila['remito_id'] . "'>" . $fila['remito_carrito'] . "</td>";
                        echo "<td id='remito_personas_" . $fila['remito_id'] . "'>" . $fila['remito_personas'] . "</td>";
                        echo "<td id='remito_horas_" . $fila['remito_id'] . "'>" . $fila['remito_horas'] . "</td>";
                        echo "<td id='remito_monto_" . $fila['remito_id'] . "'>" . "$" . $fila['remito_monto'] . "</td>";
                        echo "<td id='remito_usuario_" . $fila['remito_id'] . "'>". $fila['remito_encargado'] . "</td>";
                        echo "<td id='remito_fecha_" . $fila['remito_id'] . "'>" . $fila['remito_fecha'] . "</td>";
                        echo "<td id='remito_fechai_" . $fila['remito_id'] . "'>" . $fila['remito_fechai'] . "</td>";
                        echo "<td id='remito_fechaf_" . $fila['remito_id'] . "'>" . $fila['remito_fechaf'] . "</td>";
                        echo "<td id='remito_descripcion_" . $fila['remito_id'] . "'>" . $fila['remito_descripcion'] . "</td>";
                        echo "<td><button class='btn btn-warning' name='cambiar'>Modificar</button>";
                        echo "<input type='hidden' id='remito_id_" . $fila['remito_id'] . "' value='" . $fila['remito_id'] . "'>";
                         echo "<td><button class='btn btn-danger' onclick='eliminarRegistro(this, " . $fila['remito_id'] . ")'>Eliminar</button>";
                         echo "</tr>";
                    }

                    
                    echo "</tbody></table>";
                    echo "</div>";
                } else {
                    echo "<p style='text-align:center; color: white; text-shadow: 1px 1px 4px red;'>No se encontraron resultados</p>";
                }
            }
        }
    }

    ?>

<?php
include "conexion.php";

// Verificar si el formulario de modificación fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardar'])) {
    // Obtener los datos del formulario
    $remito_id = mysqli_real_escape_string($conexion, $_POST['remito_id']);
    $num = mysqli_real_escape_string($conexion, $_POST['num']);
    $ord = mysqli_real_escape_string($conexion, $_POST['ord']);
    $car = mysqli_real_escape_string($conexion, $_POST['car']);
    $per = mysqli_real_escape_string($conexion, $_POST['per']);
    $hor = mysqli_real_escape_string($conexion, $_POST['hor']);
    $mon = mysqli_real_escape_string($conexion, $_POST['mon']);
    $usu = mysqli_real_escape_string($conexion, $_POST['usu']);
    $fer = mysqli_real_escape_string($conexion, $_POST['fer']);
    $fei = mysqli_real_escape_string($conexion, $_POST['fei']);
    $fef = mysqli_real_escape_string($conexion, $_POST['fef']);
    $des = mysqli_real_escape_string($conexion, $_POST['des']);

    // Actualizar los datos en la base de datos
    $update_sql = "UPDATE remitos SET
        remito_numero = '$num',
        remito_orden = '$ord',
        remito_carrito = '$car',
        remito_personas = '$per',
        remito_horas = '$hor',
        remito_monto = '$mon',
        remito_encargado = '$usu',
        remito_fecha = '$fer',
        remito_fechai = '$fei',
        remito_fechaf = '$fef',
        remito_descripcion = '$des'
        WHERE remito_id = '$remito_id'";

    if ($conexion->query($update_sql) === TRUE) {
        echo "<p style='text-align:center; color: white; text-shadow: 1px 1px 4px green;'>Datos actualizados correctamente</p>";
    } else {
        echo "<p style='text-align:center; color: white; text-shadow: 1px 1px 4px red;'>Error al actualizar datos: " . $conexion->error . "</p>";
    }
}

?>

<script>
     document.addEventListener('DOMContentLoaded', function () {
    var buttons = document.querySelectorAll('.btn-warning');
    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            var row = button.closest('tr');
            var remito_id = row.querySelector('input[type="hidden"]').value;
            var num = row.querySelector('td:nth-child(1)').innerText;
            var ord = row.querySelector('td:nth-child(2)').innerText;
            var car = row.querySelector('td:nth-child(3)').innerText;
            var per = row.querySelector('td:nth-child(4)').innerText;
            var hor = row.querySelector('td:nth-child(5)').innerText;
            var mon = row.querySelector('td:nth-child(6)').innerText.replace('$', ''); // Eliminar el símbolo de dólar
            var usu = row.querySelector('td:nth-child(7)').innerText;
            var fer = row.querySelector('td:nth-child(8)').innerText;
            var fei = row.querySelector('td:nth-child(9)').innerText;
            var fef = row.querySelector('td:nth-child(10)').innerText;
            var des = row.querySelector('td:nth-child(11)').innerText;

            // Actualizar los campos del formulario de modificación
            document.getElementById('modificacion').elements['remito_id'].value = remito_id;
            document.getElementById('modificacion').elements['num'].value = num;
            document.getElementById('modificacion').elements['ord'].value = ord;
            document.getElementById('modificacion').elements['car'].value = car;
            document.getElementById('modificacion').elements['per'].value = per;
            document.getElementById('modificacion').elements['hor'].value = hor;
            document.getElementById('modificacion').elements['mon'].value = mon;
            document.getElementById('modificacion').elements['usu'].value = usu;
            document.getElementById('modificacion').elements['fer'].value = fer;
            document.getElementById('modificacion').elements['fei'].value = fei;
            document.getElementById('modificacion').elements['fef'].value = fef;
            document.getElementById('modificacion').elements['des'].value = des;
        });
    });

    // Función para eliminar un registro con confirmación y actualizar la tabla
    function eliminarRegistro(remito_id) {
        var confirmacion = confirm("¿Estás seguro de que quieres eliminar este registro?");
        if (confirmacion) {
            // Eliminar la fila de la tabla
            var fila = document.getElementById('remito_id_' + remito_id).closest('tr');
            fila.remove();
        }
    }

    // Asociar la función eliminarRegistro a los botones de eliminar
    var deleteButtons = document.querySelectorAll('.btn-danger');
    deleteButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var row = button.closest('tr');
            var remito_id = row.querySelector('input[type="hidden"]').value;
            eliminarRegistro(remito_id);
        });
    });
});
</script>

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bw1bxW8+8FhNG6tA1A4LxyjqFvt5UIuP5A45MV+h1Qe3IeTzVqiaa1DBNSKtqXSL" crossorigin="anonymous"></script>

</body>

</html>