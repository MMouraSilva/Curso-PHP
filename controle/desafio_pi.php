<div class="titulo">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;

if($pi === round(pi(), 2)) {
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}