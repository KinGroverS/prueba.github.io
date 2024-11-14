<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joyería Luz y Brillo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous">
    <style>
        /* Estilos generales */
        body {
            font-family: 'Roboto Slab', serif;
            color: #333;
            background-image: url('tus-imagenes/fondo-joyeria.jpg'); /* Reemplaza con tu imagen de fondo */
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        /* Navbar elegante */
        .navbar {
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        .navbar a {
            color: #FFD700;
            font-size: 18px;
            padding: 8px 15px;
            text-decoration: none;
            transition: color 0.3s;
        }
        .navbar a:hover {
            color: #fff;
        }
        .navbar-brand {
            color: #FFD700;
            font-size: 22px;
            font-weight: bold;
        }

        .menu-icons i {
            color: #FFD700;
            margin: 0 10px;
            font-size: 22px;
            cursor: pointer;
        }
        .menu-icons i:hover {
            color: #fff;
        }

        /* Espacio superior para el contenido reducido */
        .content-wrapper {
            padding-top: 60px; /* Ajusta este valor para reducir el espacio */
        }

        /* Hero Section */
        .hero-section {
            padding: 0;
        }
        .hero-section h1 {
            font-size: 3em;
            font-weight: bold;
            color: #fff;
            margin-bottom: 20px;
        }
        .hero-section p {
            font-size: 1.5em;
            color: #fff;
            margin-bottom: 20px;
        }

        /* Sección de Productos */
        .productos-section {
            margin-top: 50px;
            padding: 50px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
        }
        .productos-section img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .productos-section img:hover {
            transform: scale(1.05);
        }

        /* Sección de Video */
        .video-section {
            margin-top: 50px;
            text-align: center;
            padding: 50px;
            background-color: rgba(247, 247, 247, 0.8);
            border-radius: 15px;
        }
        .video-section iframe {
            border-radius: 15px;
            width: 100%;
            max-width: 800px;
            height: 450px;
        }

        /* Sección de Mapa */
        #map {
            height: 400px;
            width: 100%;
        }
        .geo-section {
            margin-top: 50px;
            text-align: center;
            padding: 50px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
        }

        /* Footer */
        .footer {
            background-color: #000;
            color: #FFD700;
            padding: 30px 0;
            text-align: center;
        }
        .footer a {
            color: #FFD700;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="#" class="navbar-brand">Joyería Luz y Brillo</a>
            <div class="d-flex align-items-center">
                <a href="#inicio">Inicio</a>
                <a href="#productos">Productos</a>
                <a href="#videos">Proceso</a>
                <a href="#relojes">Relojes de lujo</a>
                <a href="#geolocation">Visítanos</a>
                <a href="asistencia.php">Login</a>
                <div class="menu-icons">
                    <i class="fas fa-search"></i>
                    <i class="fas fa-user"></i>
                    <i class="fas fa-heart"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenedor principal para evitar que el contenido quede oculto bajo la barra fija -->
    <div class="content-wrapper" id="inicio">

        <!-- Hero Section con carrusel -->
        <div id="carouselExampleIndicators" class="carousel slide mt-0" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="JOYA1.jpg" class="d-block w-100" alt="Joya 1">
                </div>
                <div class="carousel-item">
                    <img src="JOYA2.JPG" class="d-block w-100" alt="Joya 2">
                </div>
                <div class="carousel-item">
                    <img src="MODERNO.JPG" class="d-block w-100" alt="Joya 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Sección de Productos -->
        <div class="container productos-section" id="productos">
            <h2 class="text-dark">Nuestros Productos</h2>
            <p>Descubre una selección de joyas diseñadas para cada ocasión especial.</p>
            <div class="row">
                <div class="col-md-4">
                    <img src="DIAMANTES.JPEG" alt="Collar de diamantes">
                    <h5 class="text-center">Collar de Diamantes</h5>
                </div>
                <div class="col-md-4">
                    <img src="ANILLODECOMPRO.JPG" alt="Anillo de compromiso">
                    <h5 class="text-center">Anillo de Compromiso</h5>
                </div>
                <div class="col-md-4">
                    <img src="PULSERADEORO.JPEG" alt="Pulsera de oro">
                    <h5 class="text-center">Pulsera de Oro</h5>
                </div>
            </div>
        </div>

        <!-- Sección de Video -->
        <div class="container video-section" id="videos">
            <h2 class="text-dark">Conoce Nuestro Proceso</h2>
            <p>Descubre cómo creamos piezas únicas con los mejores materiales y técnicas.</p>
            <iframe src="ANILLOS.MP4" title="Video de joyería" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>

        <!-- Sección de Relojes de Lujo -->
        <div class="container productos-section" id="relojes">
            <h2 class="text-dark">Relojes de Lujo</h2>
            <p>Descubre nuestra exclusiva colección de relojes de lujo.</p>
            <div class="row">
                <div class="col-md-4">
                    <img src="CLASICO.JPEG" alt="Reloj de lujo 1" data-bs-toggle="modal" data-bs-target="#modalReloj1">
                    <h5 class="text-center">Reloj Clásico</h5>
                </div>
                <div class="col-md-4">
                    <img src="MODERNO.JPG" alt="Reloj de lujo 2" data-bs-toggle="modal" data-bs-target="#modalReloj2">
                    <h5 class="text-center">Reloj Moderno</h5>
                </div>
                <div class="col-md-4">
                    <img src="EXCLUSIVO.JPG" alt="Reloj de lujo 3" data-bs-toggle="modal" data-bs-target="#modalReloj3">
                    <h5 class="text-center">Reloj Exclusivo</h5>
                </div>
            </div>
        </div>

        <!-- Modales de Relojes -->
        <!-- Modales aquí -->

        <!-- Sección de Georreferenciación -->
        <div class="container geo-section" id="geolocation">
            <h2 class="text-dark">Visítanos</h2>
            <p>Haz clic en el botón para mostrar tu ubicación en el mapa y encontrar la sucursal más cercana.</p>
            <button id="getLocationBtn" class="btn btn-dark">Obtener Ubicación</button>
            <div id="spinnerContainer" class="spinner-border mt-3" role="status" style="display: none;">
                <span class="visually-hidden">Loading...</span>
            </div>
            <p id="status" class="text-muted mt-3"></p>
            <div id="map" class="mt-4"></div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Joyería Luz Y Brillo. Todos los derechos reservados.</p>
        <p><a href="#">Aviso de privacidad</a> | <a href="#">Términos y condiciones</a></p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAt2JfTYSfDZuHmx24ccq_yPQ8sgDOeR4c&callback=initMap"
        async defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        let map;
        let userMarker;

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 10,
                center: { lat: 0, lng: 0 },
            });
        }

        document.getElementById("getLocationBtn").addEventListener("click", function () {
            $('#spinnerContainer').show();
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(success, error);
            } else {
                document.getElementById("status").textContent = "La geolocalización no es soportada por tu navegador.";
            }
        });

        function success(position) {
            $('#spinnerContainer').hide();
            const lat = position.coords.latitude;
            const lng = position.coords.longitude;
            document.getElementById("status").textContent = `Latitud: ${lat}, Longitud: ${lng}`;
            const userLocation = new google.maps.LatLng(lat, lng);
            if (!userMarker) {
                userMarker = new google.maps.Marker({
                    position: userLocation,
                    map: map,
                    title: "Tu ubicación",
                    animation: google.maps.Animation.DROP
                });
            } else {
                userMarker.setPosition(userLocation);
            }
            map.setCenter(userLocation);
        }

        function error() {
            $('#spinnerContainer').hide();
            document.getElementById("status").textContent = "No se pudo obtener tu ubicación.";
        }
    </script>
</body>
</html>
