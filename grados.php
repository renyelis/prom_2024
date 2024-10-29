<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promoción 200 Años</title>
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
        }

        /* Contenedor de círculos */
        .circle-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        /* Estilos de cada círculo */
        .circle {
            width: 120px; /* Aumenta el tamaño del ancho */
            height: 120px; /* Aumenta el tamaño de la altura */
            border-radius: 80%;
            background-color: #D3D3D3;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
            font-size: 1em;
            color: #000;
            text-align: center;
        }

        .circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Estilo del texto debajo de cada círculo */
        .circle-label {
            margin-top: 5px; /* Reduce el margen superior */
            text-align: center;
            font-size: 1.1em; /* Aumenta ligeramente el tamaño de la fuente */
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
    <h1>ℙℝ𝕆𝕄𝕆ℂ𝕀Óℕ 𝟚𝟘𝟘 𝔸Ñ𝕆𝕊</h1>
    <div class="circle-container">
        <div class="circle">
            <img src="images/11-1.png" alt="II-1">
        </div>
        <p class="circle-label">II-1</p>

        <div class="circle">
            <img src="images/11-2.png" alt="II-2">
        </div>
        <p class="circle-label">II-2</p>

        <div class="circle">
            <img src="images/11-3.png" alt="II-3">
        </div>
        <p class="circle-label">II-3</p>

        <div class="circle">
            <img src="images/11-4.png" alt="II-4">
        </div>
        <p class="circle-label">II-4</p>

        <div class="circle">
            <img src="images/11-5.png" alt="II-5">
        </div>
        <p class="circle-label">II-5</p>
    </div>

    <!-- Botón de volver al inicio -->
    <button class="back-button" onclick="window.location.href='pagina_principal.php'">←</button>
</body>
</html>
