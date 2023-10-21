<?php

session_start();

if (!isset($_COOKIE['nome']) || !isset($_SESSION['salario'])) {
    header("Location: index.php");
    exit();
}

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
    <h1>Olá, <?= ucfirst(strtolower($_COOKIE['nome'])); ?>!</h1>
    <p>Você escolheu a opção: <strong><?= $_SESSION['opcao'] ?></strong></p>
    <p>Você acessou esta opção <strong><?= $_SESSION['opcao_contagem'] ?></strong> vezes</p>

    <br>

    <p>Valor do salário: <strong><?= $_SESSION['salario'] ?></strong></p>

    <?php if (isset($_SESSION['salario_antigo'])): ?>
        <p>Valor antigo do salário: <strong><?= $_SESSION['salario_antigo'] ?></strong></p>
    <?php endif; ?>

    <?php if (isset($_SESSION['ferias'])): ?>
        <p>Valor das férias: <strong><?= $_SESSION['ferias'] ?></strong></p>
    <?php endif; ?>

    <?php if (isset($_SESSION['ir'])): ?>
        <p>Valor do IR: <strong><?= $_SESSION['ir'] ?></strong></p>
    <?php endif; ?>

    <?php if (isset($_SESSION['aumento'])): ?>
        <p>Valor do aumento salarial: <strong><?= $_SESSION['aumento'] ?></strong></p>
    <?php endif; ?>

    <a href="opcoes.php">Voltar</a>
    <a href="sair.php">Sair</a>
</body>
</html>

