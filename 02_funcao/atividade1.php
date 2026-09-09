<?php
$idade = 19;
function MaiorIdade($idade){
    if ($idade >=18){
        return "maior de idade";
    } else {
        return "menor idade";
    }
}
echo MaiorIdade(16) . "<br>";
echo MaiorIdade(19) . "<br>";
echo MaiorIdade(33) . "<br>";
?>