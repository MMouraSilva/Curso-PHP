<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > KM</option>
        <option value="metros-km">Metros > Km</option>
        <option value="km-metros">Km > Metros</option>
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.62137;
const FATOR_METRO_KM = 1000;
const FORMULA_FAHRENHEIT_ARGUMENTO_1 = 9 / 5;
const FORMULA_FAHRENHEIT_ARGUMENTO_2 = 32;

$tipoConversao = $_POST['conversao'];
$param = $_POST['param'] ?? 0;

switch ($tipoConversao) {
    case 'km-milha':
        $paramConvertido = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = " . round($paramConvertido, 2) . " Milha(s)";
        break;

    case 'milha-km':
        $paramConvertido = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha(s) = " . round($paramConvertido, 2) . " Km";
        break;

    case 'metros-km':
        $paramConvertido = $param / FATOR_METRO_KM;
        $mensagem = "$param Metro(s) = $paramConvertido Km";
        break;

    case 'km-metros':
        $paramConvertido = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $paramConvertido Metro(s)";
        break;

    case 'celsius-fahrenheit':
        $paramConvertido = ($param * FORMULA_FAHRENHEIT_ARGUMENTO_1) + FORMULA_FAHRENHEIT_ARGUMENTO_2;
        $mensagem = "$param °C = $paramConvertido °F";
        break;

    case 'fahrenheit-celsius':
        $paramConvertido = ($param - FORMULA_FAHRENHEIT_ARGUMENTO_2) / FORMULA_FAHRENHEIT_ARGUMENTO_1;
        $mensagem = "$param °F = $paramConvertido °C";
        break;

    default:
        $mensagem = "Nenhum valor calculado!";
}

echo "<p>$mensagem</p>";