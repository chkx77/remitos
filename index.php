<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el formulario ha sido enviado
    if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
        // Obtener el usuario y contraseña del formulario
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

        // Consulta SQL utilizando consultas preparadas
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ? AND clave = ?");
        $stmt->bind_param("ss", $usuario, $contraseña);
        $stmt->execute();
        $resultado = $stmt->get_result();

        // Verificar si el usuario y contraseña son correctos
        if ($resultado->num_rows == 1) {
            // Inicio de sesión exitoso
            header('Location: main.php');
        } else {
            // Nombre de usuario o contraseña incorrectos
            echo "<p style='color: white; text-align:center; margin-top: -70px; text-shadow: 2px 2px 10px red;'>Nombre de usuario o contraseña incorrectos</p>";
        }
    } else {
        echo "Por favor, complete el formulario.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-o4oXEAgYxd17cKOMZS4LckUsP6Or2xhq1zA6VVCq3NIvHJIz1mbl5z2+iPV7ssWJ" crossorigin="anonymous">
    <style>
        body {
            background: rgb(48, 48, 73);
        }

        .container {
            margin: 140px auto;
            border-radius: 30px;
            text-align: center;
            box-shadow: 1px 1px 10px black;
            padding: 40px;
            background-color: #2c3e50; /* Color de fondo */
            color: white; /* Color del texto */
        }

        h2 {
            color: white;
            text-shadow: 2px 2px 10px black;
        }

        hr {
            border: 1px solid white;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #3498db;
            border-radius: 4px;
        }

        input[type="submit"],
        input[type="reset"] {
            width: 45%;
            padding: 10px;
            box-sizing: border-box;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #3498db;
        }
    </style>
</head>
<body>

    <div class="container col-lg-4 col-md-6 col-sm-8">
        <h2>Iniciar Sesión</h2>
        <hr>
        <form method="post" action="index.php">
            <!-- Etiqueta de usuario -->
            <label for="exampleInputEmail1">
                <i class="fas fa-user"></i> Usuario
            </label>
            <input type="text" name="usuario" required>

            <!-- Etiqueta de clave -->
            <label for="exampleInputPassword1">
                <i class="fas fa-lock"></i> Clave
            </label>
            <input type="password" name="contraseña" required>

            <div>
                <input type="submit" class="btn btn-primary" value="Ingresar">
                <input type="reset" class="btn btn-danger" value="Borrar">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

