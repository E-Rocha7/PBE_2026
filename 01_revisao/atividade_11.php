<?php

$idades = [15, 18 ,22, 30 ,17 ,25 ,40 ,16];

$soma = 0;
$maiores18 = 0;

foreach ($idades as $idade) {
    $soma += $idade;

    if ($idade >= 18) {
        $maiores18++;
    }
}

$media = $soma / count($idades);

echo "media das idades: " . $media . "<br>";
echo "pessoas com 18 anos ou mais:" . $maiores18;
?>