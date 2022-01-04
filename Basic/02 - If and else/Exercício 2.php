<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF=8">
        <title>
            Exercício 2
        </title>
        <style>
            h3{
                font: 15pt Arial;
                color:black;
            }
        </style>
    </head>
    <body>
        <div>
        <?php
        echo"<h2>AVISO:</h2><h3>Para você escolher o valor digite no endereço do site, após .php: <p>?a= <p>Para você escolhe os valores! </h3>";
        $n = $_GET["a"];
        echo"<br><h2> Valor recebido: $n";
        if ($n < 0){
        echo"<br><h2> Esse número é Negativo!!!";
        }
        else {
            echo"<br><h2> Esse número é Positivo!!!";
        }
        ?>
    </div>
    </body>
</html>