<!DOCTYPE html>
<!--Resultado SRU para SRD-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Computação Gráfica</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <div id="a">
            <img src="images/logo-unip-home.png">
            <h2>
                <?php
                    require_once 'class/SRU_SRD.php';

                    $xu = isset($_POST["xu"])? $_POST["xu"]: 0;
                    $yu = isset($_POST["yu"])? $_POST["yu"]: 0;
                    echo "Coordenadas em SRU: ($xu,$yu)<br>";

                    $x = new SRU_SRD();
                    echo "Coordenadas em SRD: (";
                    $x->conver_x($xu);
                    echo ",";
                    $y = new SRU_SRD();
                    $y->conver_y($yu);
                    echo ")";
                ?>
            </h2>
            <h2>
                <a href="index.html">Voltar</a>
            </h2>
            <h2>
                <a href="formulario_sru_srd.html">Converter Novamente</a>
            </h2>
        </div>
    </body>
</html>
