<?php
$resultado = "";
$classificacao = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    if (!empty($peso) && !empty($altura)) {

        $imc = $peso / ($altura * $altura);

        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($imc < 24.9) {
            $classificacao = "Peso normal";
        } elseif ($imc < 29.9) {
            $classificacao = "Sobrepeso";
        } else {
            $classificacao = "Obesidade";
        }

        $resultado = "Seu IMC é: " . number_format($imc, 2) . "<br>Classificação: " . $classificacao;
    } else {
        $resultado = "Preencha todos os campos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de IMC</title>

    <link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

    <h1>Cálculo de IMC</h1>
    <h3>Índice de Massa Corporal</h3>

    <form method="POST" class="form-imc">
        <label>Peso (kg):</label><br>
        <input type="number" name="peso" step="0.1"><br><br>

        <label>Altura (m):</label><br>
        <input type="number" name="altura" step="0.01"><br><br>

        <button type="submit">Calcular</button>
    </form>

    <div id="resultado">
        <?php echo $resultado; ?>
    </div>

    <a class="botao-voltar" href="index.html">⬅ Voltar</a>

</div>

</body>
</html>