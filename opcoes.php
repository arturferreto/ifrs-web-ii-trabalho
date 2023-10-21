<?php

session_start();

if (!isset($_COOKIE['nome']) || !isset($_SESSION['salario'])) {
    header("Location: index.php");
    exit();
}

$_COOKIE['nome'] = ucfirst(strtolower($_COOKIE['nome']));

?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desenvolvimento Web II</title>
</head>
<body>
    <h1>Olá, <?= $_COOKIE['nome'] ?>!</h1>
    <h3>Informe o que deseja fazer.</h3>

    <ul>
        <li><a href="calcular.php?opcao=ferias">Calcular suas férias</a></li>
        <li><a href="calcular.php?opcao=ir">Calcular seu imposto de renda, conforme a faixa salarial</a></li>
        <li><a href="calcular.php?opcao=aumento">Calcular o aumento de salário em 10%</a></li>
    </ul>
</body>
</html>
