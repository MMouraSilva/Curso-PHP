<div class="titulo">Desafio Precedência</div>

<?php
echo '<p>1. Qual o valor será impresso?</p>';
echo '2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3) <br>';
echo 'R.: ERRO, pois divide por 0.';
// = 2 + 5 * 3 + 2 / (-8 + 8) =
// = 2 + 5 * 3 + 2 / 0 =
// = 2 + 15 + [INF ou ERRO] =
// = 17 + [INF ou ERRO] =
// = ERRO


echo '<p>2. Qual expressão imprime o valor 100?</p>';
echo 'a)', (1 + 2) * 20 - 15, '<br>'; // = 45 -> Errada
echo 'b)', 4 * 5 ** 2, '<br>'; // = 100 -> Correta
echo 'c)', 2 ** 3 ** 4 / 1e25, '<br>'; // 0,0000000000000000000004096 - Errada
echo 'd)', 3 + (3 * 8) / 2 - 3, '<br>'; // 12 -> Errada