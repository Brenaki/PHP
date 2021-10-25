<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF=8">
        <title>
            Exercício 3
        </title>
        <style>
            h1{
                font: 18pt Arial;
                color:black;
            }
            h2{
                font: 15pt Arial;
                color:black;
            }
        </style>
    </head>
    <body>
        <div>
        <?php
        $n = rand(1, 10);
        echo"<h1>O número gerado foi: $n";
        if($n % 2 == 1) {
            echo "<h2><p>$n é ímpar";
        }
        else {
            echo"<h2><p>$n é par";
        }

        ?>
    </div>
    </body>
</html>
