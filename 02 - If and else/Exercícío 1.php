<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF=8">
        <title>
        Exercício 1
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
        echo"<h2>AVISO:</h2><h3>Para você escolher o valor digite no endereço do site, após .php: <p>?a= &b= <p>Para você escolhe os valores! </h3>";
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $r = ($n1+$n2);
        echo"<br><h2> Valores recebidos: $n1 e $n2";
        if ($r > 10){
        echo"<br> Resultado da conta foi: $r";
        }
        else {
            echo"<br> O resultado dessa conta foio menor que 10!";
        }
        ?>
    </div>
    </body>
</html>