<div class="titulo">Desafio Equação</div>

<?php
$primeiroDividendo = (6 * (3 + 2)) ** 2;
$segundoDividendo = (1 - 5) * (2 - 7);

$primeiroDivisor = 3 * 2;
$segundoDivisor = 2;
$divisorFinal = 10 ** 3;

$resultadoEquacao = ($primeiroDividendo / $primeiroDivisor - ($segundoDividendo / $segundoDivisor) ** 2) ** 3 / $divisorFinal;
echo "Resultado: " . $resultadoEquacao;