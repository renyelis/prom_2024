<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes Destacados</title>
    <style>
        /* Estilos generales */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #5E5E5E;
            color: #000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Título */
        h1 {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        /* Contenedor de cuadros */
        .highlight-container {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        /* Contenedor individual para cada cuadro y su etiqueta */
        .highlight-item {
            text-align: center;
        }

        /* Estilos de cada cuadro */
        .highlight-box {
            width: 150px;
            height: 150px;
            background-color: #D3D3D3;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .highlight-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Estilo del texto debajo de cada cuadro */
        .highlight-label {
            margin-top: 10px;
            font-size: 1em;
            font-weight: bold;
        }

        /* Estilos del botón */
        .back-button {
            margin-top: 30px;
            padding: 10px 20px;
            font-size: 1em;
            font-weight: bold;
            color: #fff;
            background-color: #333;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>MEJORES ICFES</h1>
    <div class="highlight-container">
        <div class="highlight-item">
            <div class="highlight-box">
                <img src="imagen1.jpg" alt="Primer Puesto">
            </div>
            <p class="highlight-label">PRIMER PUESTO</p>
        </div>

        <div class="highlight-item">
            <div class="highlight-box">
                <img src="imagen2.jpg" alt="Segundo Puesto">
            </div>
            <p class="highlight-label">SEGUNDO PUESTO</p>
        </div>

        <div class="highlight-item">
            <div class="highlight-box">
                <img src="imagen3.jpg" alt="Tercer Puesto">
            </div>
            <p class="highlight-label">TERCER PUESTO</p>
        </div>
    </div>
    <!-- Botón de volver al inicio -->
    <button class="back-button" onclick="window.location.href='pagina_principal.php'">←</button>
</body>
</html>