<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Bienvenida</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        /* Estilos generales */
        body {
            font-family: 'Roboto Slab', serif;
            background: rgb(217, 226, 236);
        }

        h1 {
            text-align: center;
            padding: 28px;
            font-size: 40px;
            color: black;
        }

        #fecha {
            text-align: center;
            color: rgb(148, 148, 148);
            font-weight: normal;
            font-size: 30px;
        }

        .container {
            width: 500px;
            background: white;
            padding: 28px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .acceso {
            display: block;
            text-align: right;
            color: rgb(8, 89, 255);
            margin-bottom: 15px;
        }

        .dni {
            text-align: center;
            font-size: 25px;
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
        }

        .botones {
            display: flex;
            justify-content: space-between;
        }

        .entrada, .salida {
            width: 48%;
            padding: 15px;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            color: white;
        }

        .entrada {
            background-color: green;
        }

        .salida {
            background-color: red;
        }

        #mensaje {
            margin-top: 20px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>BIENVENIDOS, REGISTRA TU ASISTENCIA</h1>
    <h2 id="fecha"></h2>
    <div class="container">
        <a class="acceso" href="vista/login/login.php">Ingresar al sistema</a>
        <p class="dni">Ingrese su CI</p>
        <form action="#">
            <input type="text" placeholder="DNI del empleado" name="txtdni" id="">
            <div class="botones">
                <button type="button" class="entrada" id="btnEntrada">ACEPTAR</button>
                <button type="button" class="salida" id="btnSalida">BORRAR</button>
            </div>
        </form>
        <p id="mensaje"></p>
    </div>

    <script>
        // Mostrar la fecha y hora actual en tiempo real
        setInterval(() => {
            let fecha = new Date();
            let fechaHora = fecha.toLocaleString();
            document.getElementById("fecha").textContent = fechaHora;
        }, 1000);

        // Mostrar mensaje al hacer clic en los botones
        document.getElementById('btnEntrada').addEventListener('click', function() {
            document.getElementById('mensaje').textContent = 'Registrado';
            document.getElementById('mensaje').style.color = 'green';
        });

        document.getElementById('btnSalida').addEventListener('click', function() {
            document.getElementById('mensaje').textContent = 'Usuario eliminado';
            document.getElementById('mensaje').style.color = 'red';
        });
    </script>
</body>
</html>
