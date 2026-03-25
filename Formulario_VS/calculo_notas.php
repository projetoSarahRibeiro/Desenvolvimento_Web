<?php

echo "<link rel='stylesheet' href='estilo.css'>";
echo "<div class='container'>";
echo "<h1>Resultado das Médias</h1>";

for ($i = 1; $i <= 10; $i++) {

    $p1 = $_POST["p1_$i"];
    $p2 = $_POST["p2_$i"];

    if ($p1 != "" && $p2 != "") {

        $media = ($p1 + $p2) / 2;

        echo "<p><strong>Matéria $i:</strong> Média = " . number_format($media, 2) . "</p>";

    } else {
        echo "<p><strong>Matéria $i:</strong> Dados incompletos</p>";
    }
}

echo "<br><a class='botao-voltar' href='notas.html'>⬅ Voltar</a>";
echo "</div>";

?>