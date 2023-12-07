<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            background: #4f556b;
            color: #fff;
        }

        .navbar {
            background-color: #1E2749;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px; /* Ajustar la altura del navbar */
        }

        .navbar-nav .nav-link {
            color: #fff !important;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #c5c5c5 !important;
        }

        .navbar h4 {
            color: white;
            text-shadow: 1px 1px 10px white;
            margin: 20px auto !important;
            font-size: 1.5rem; /* Ajustar el tamaño de la fuente */
        }

        #additional-info {
            text-align: right;
            margin-right: 20px;
            background-color: #2c2f3b;
            padding: 10px;
            border-radius: 5px;
            font-size: 0.8rem; /* Ajustar el tamaño de la fuente */
        }

        #carouselExampleCaptions {
            max-width: 1200px;
            margin: 20px auto;
        }

        .carousel-inner {
            margin: 0 auto;
            width: 93%;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
        }

        .accordion-item,
        .card {
            background-color: #fff; /* Fondo claro */
            color: #000; /* Texto oscuro */
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
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

    <!-- Contenido principal -->
    <div class="row justify-content-center align-items-center g-2">

        <!-- Sección de Bienvenida -->
        <div class="card m-5 border border-success p-2 mb-2 border-opacity-75" style="max-width: 90%; margin-top: 80px !important;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://www.masterlogistica.es/wp-content/uploads/2020/02/seguridad-e-higiene.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido/a</h5>
                        <p class="card-text">Carga de Remitos Simple: Olvidate de los formularios enredados. Nuestra plataforma para cargar remitos te deja ingresar la data de manera rápida y fácil. En solo unos clics, vas a estar manejando tus envíos de forma eficiente. <br><br>Consulta al Toque: Chequeá tus remitos cuando quieras y donde quieras. Nuestra plataforma te facilita buscar y filtrar remitos, dándote la info que necesitás al toque. <br><br>Historial Completo: Tené un historial completo de todos tus remitos. Revisá fechas, números de remito, detalles de la orden y más, todo en un mismo lugar.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfico de Pronóstico del Tiempo -->
        <div class="container mt-5">
            <canvas id="weatherChart" width="400" height="200"></canvas>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        // Obtener el clima actual en Santa Fe
        fetch("https://api.open-meteo.com/v1/forecast?latitude=-31.6333&longitude=-60.7&current=temperature_2m,wind_speed_10m")
            .then(response => response.json())
            .then(data => {
                // Mostrar la temperatura actual en Santa Fe
                const currentTemperature = data.current.temperature_2m;
                console.log(`Temperatura actual en Santa Fe: ${currentTemperature} °C`);
            })
            .catch(error => console.error("Error fetching weather data:", error));

        // Obtener el pronóstico del tiempo para los próximos días
        fetch("https://api.open-meteo.com/v1/forecast?latitude=-31.6333&longitude=-60.7&daily=temperature_2m_3d,precipitation_sum_3d")
            .then(response => response.json())
            .then(data => {
                // Obtener las temperaturas y precipitaciones diarias
                const temperatures = data.daily.temperature_2m_3d;
                const precipitation = data.daily.precipitation_sum_3d;

                // Crear un gráfico de línea
                const ctx = document.getElementById('weatherChart').getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Día 1', 'Día 2', 'Día 3'],
                        datasets: [
                            {
                                label: 'Temperatura (°C)',
                                data: temperatures,
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 2,
                                fill: false
                            },
                            {
                                label: 'Precipitación (mm)',
                                data: precipitation,
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 2,
                                fill: false
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            x: {
                                grid: {
                                    display: false
                                }
                            },
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
            .catch(error => console.error("Error fetching weather data:", error));
    </script>

</body>

</html>
