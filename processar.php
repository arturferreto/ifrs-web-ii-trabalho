<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $salario = $_POST['salario'];

    setcookie("nome", $nome, time() + 3600);
    $_SESSION['salario'] = $salario;

    header("Location: opcoes.php");
    exit();
}
