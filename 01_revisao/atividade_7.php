<?php
$num1 = 10;
$num2 = 5;
$operacao = '+';

switch ($operacao){
    case '+':
        $resultado = $num1 + $num2;
        echo "resultado : $resultado";
        break;
    case '-':
        $resultado = $num1 - $num2;
        echo "resultado: $resultado";
        break;
    case '*':
        $resultadp = $num1 * $num2;
        echo "resultado : $resultado";
        break;
    case '/':
        if ($num2 == 0){
            echo "erro: divisão por zero é permitida.";
        } else {
            $resultado = $num1 / $num2;
            echo "Resultado: $resultado";
        }
        break;
    default:
        echo "operação invalida.";        
        }


?>