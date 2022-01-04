<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF=8">
        <title>
            Atividade1
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
        echo"<br><h2> Valores recebidos: $n1 e $n2";
        echo"<br><h3> A soma dos valores: ". ($n1+$n2);
        echo"<br> A subtração dos valores: ". ($n1-$n2);
        echo"<br> A multiplicação dos valores: ". ($n1*$n2);
        echo"<br> A divisão dos valores: ". ($n1/$n2);
        echo"<br> A o resto da divisão dos valores: ". ($n1%$n2);
        echo"<br> A média dos valores: ". (($n1+$n2)/2);
        ?>
    </div>
    </body>
</html>