<?php

$inteiro = 123;
$flutuante = 123.45;
$string = "123";
switch (gettype($variavel)) {
    case "integer":
        echo "A variável $variavel é do tipo inteiro.";
        break;
    default:
        echo "A variável $variavel não é do tipo inteiro.";
}

?>
