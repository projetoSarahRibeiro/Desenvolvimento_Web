<?php

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

echo "<link rel='stylesheet' href='estilo.css'>";

echo "<div class='container'>";
echo "<h1>Resultado</h1>";

if ($a == 0) {
    echo "Não é uma equação do 2º grau (A ≠ 0)";
} else {

    $delta = ($b * $b) - (4 * $a * $c);

    echo "Delta (Δ) = " . $delta . "<br><br>";

    if ($delta < 0) {
        echo "Não existem raízes reais.";
    } else if ($delta == 0) {

        $x = -$b / (2 * $a);
        echo "Raiz única: x = " . number_format($x, 2);

    } else {

        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);

        echo "x1 = " . number_format($x1, 2) . "<br>";
        echo "x2 = " . number_format($x2, 2);
    }
}

echo "<br><br><a class='botao-voltar' href='equacao.html'>⬅ Voltar</a>";
echo "</div>";

?>