<!DOCTYPE html>
<!--Resultado DDA-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Computação Gráfica</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <div id="a">
            <img src="images/logo-unip-home.png">
            <h1>Resultado DDA</h1>
            <h2>
                <?php
                    require_once 'class/DDA.php';

                    $x1 = isset($_POST["x1"])? $_POST["x1"] : 0;
                    $y1 = isset($_POST["y1"])? $_POST["y1"] : 0;
                    $x2 = isset($_POST["x2"])? $_POST["x2"] : 0;
                    $y2 = isset($_POST["y2"])? $_POST["y2"] : 0;

                    $ponto = DDA::rasteriza(new Pontos($x1, $y1), new Pontos($x2, $y2));
                    echo "Coordenadas da linha:<br>";
                    foreach ($ponto as $pontos)
                    {
                        echo "($pontos->x, $pontos->y)<br/>";
                    }
                ?>
                <a href="index.html">Voltar ao Inicio</a><br>
                <a href="formulario_dda.html">Calcular Novamente</a>
            </h2>
        </div>
    </body>
</html>
