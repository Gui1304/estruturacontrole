<?php

if ($velocidade >= 41 && $velocidade <= 50) {
    echo "O motorista está na velocidade correta.";
} elseif ($velocidade == 40) {
    echo "Atenção: Você está na velocidade limite.";
} elseif ($velocidade > 50) {
    echo "Multa: Velocidade acima do limite permitido.";
}
?>
