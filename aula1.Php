<?php
echo "Olá mundo!";

echo "Atualização dev";

echo "Atualização master";


echo "Olá, estou no branch dev";
/*
O comando abaixo imprime a data atual
echo - imprimir
date - data atual
"d/m/Y" - formato da data
*/
echo date("d/m/Y");//13/04/2021

function obterDataAtual($dataOntem = "") { //$dataOntem - "12/04/2021"
    if ($dataOntem == ""){
        throw Exception ("voce nao informou a data, a data esta em branco");
    if ()
    }
    return date("d/m/Y");
}
function exibirDataAtual() {
    obterDataAtual("12/04/2021")
}

echo "Olá, estou no branch dev!";

phpinfo();

echo "Nosso teste de conflito!";
echo "Nosso teste de conflito!";
echo "Nosso teste de conflito!";



