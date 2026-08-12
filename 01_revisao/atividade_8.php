<?php
$idade = 15;
$acompanhado = true;

if ($idade >= 18) {
    echo "Entrada liberada! a pessoa é maior de idade e pode entrar sozinha.";
} else if ($idade >= 14 && $idade <=17) {
    if ($acompanhado) {
        echo "Entrada liberada! A pessoa tem entre 14 e 17 anos e esta acompanhada."; 
    } else{
        echo "Entrada negada! menores de 18 e maiores de 13 precisam ser acompanhados.";
    }
} else {
    echo "Entrada negada! menores de 14 anos não podem entrar, mesmo acompanhados.";
}




?>