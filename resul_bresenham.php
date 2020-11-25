<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Computação Gráfica</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <div id="a">
        <img src="images/logo-unip-home.png">
        <h1>Resultado Bresenham</h1>
        <h2>
            <?php
            require_once 'class/Bresenham.php';

            $x[0] = isset($_POST["x1"]) ? $_POST["x1"] : 0;
            $y[0] = isset($_POST["y1"]) ? $_POST["y1"] : 0;
            $x[1] = isset($_POST["x2"]) ? $_POST["x2"] : 0;
            $y[1] = isset($_POST["y2"]) ? $_POST["y2"] : 0;

            $coordenadas = new Bresenham();
            $coordenadas->rasteriza($x, $y);
            ?>
            <a href="index.html">Voltar ao Inicio</a><br>
            <a href="formulario_bresenham.html">Calcular Novamente</a>
        </h2>
    </div>
</body>

</html>