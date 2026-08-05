<?php
$a = 1;
$b = -5;
$c = 6;
$delta = ($b * $b) - (4 * $a * $c);

echo "Valor de a: $a <br>";
echo "Valor de b: $b <br>";
echo "Valor de c: $c <br>";
echo "Delta: $delta <br><br>";

if ($delta < 0) {
    echo "Não existem raízes reais.";
} elseif ($delta == 0) {
    $x = (-$b) / (2 * $a);
    echo "Existe apenas uma raiz real.<br>";
    echo "x = $x";
} else {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);

    echo "As raízes da equação são:<br>";
    echo "x1 = $x1 <br>";
    echo "x2 = $x2";
}

?>
a = 1
b = -5
c = 6

x² − 5x + 6 = 0
x1 = 3
x2 = 2