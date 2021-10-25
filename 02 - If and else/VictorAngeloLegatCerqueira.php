<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF=8">
        <title>
                Atividade2
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
            h3 {
                font: 13pt Arial;
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
                $n3 = rand(1, 9);
        //* A soma dos valores recebidos elevado ao valor gerado.
        // Nota: "pow" é para elevar um numero a outro
        
            echo"<hr>"; 
            $r1 = ($n1+$n2);
            $p = pow($r1, $n3); 
                echo"<h1> Todos os Valores reunidos: $n1, $n2 e $n3";
                echo"<h2>Valores recebidos elevado ao Valor Gerado!";
                echo"<h2><p> ($n1+$n2)^$n3 = $p";
        
        //* A subtração dos valores ($num1 - $num2 - $num3) e se o resultado é positivo ou negativo, par ou ímpar.
            
            echo"<hr>";
            echo"<h2>Subtração de todos os Valores!"; 
            $r2 = ($n1 - $n2 - $n3);
                echo"<h2><p> ($n1-$n2-$n3) = $r2";
                if ($r2 > -1){
                        echo"<h3><p> Esse $r2 é Positivo!";
                }
                else {
                        echo"<h3><p> Esse $r2 é Negativo!";
                }
                if ($r2 % 2 == 1) {
                    echo"<h3><p>$r2 é ímpar";
                }
                else {
                    echo"<h3><p>$r2 é par";
                }
        //* A média entre os valores e se o resultado é par ou ímpar.
                $r3 = (($n1+$n2+$n3)/3);
                echo"<hr>";
                echo "<h2>Média entre os Valores!";
                echo"<h2><p>($n1+$n2+$n3)/3 = $r3";
                if ($r3 % 2 == 1) {
                    echo"<h3><p>$r3 é ímpar";
                }
                else {
                    echo"<h3><p>$r3 é par";
                }
        //* Os valores em ordem decrescente.
            
            echo"<hr>"; 
            echo "<h2>Ordem Decrescente de todos os Valores! Recebidos e resultados!";  
            $Decrescente = array($n1, $n2, $n3, $r1, $r2, $r3,$p);
            rsort($Decrescente);
            foreach( $Decrescente as $chave => $valor) {
            echo "<h3><p>$chave = $valor\n";
        }        
        ?>
    </div>
    </body>
</html>