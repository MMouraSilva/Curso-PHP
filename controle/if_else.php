<div class="titulo">IF ELSE</div>

<?php
if(true) {
    echo "Serei impresso";
}

if(true) {
    echo "Verdadeiro<br>";
} else {
    echo "Falso<br>";
}

if(false) {
    echo "Passo A<br>";
} else if(true) {
    echo "Passo B<br>";
} else {
    echo "Ultimo Passo<br>";
}

echo "Fim<br>";