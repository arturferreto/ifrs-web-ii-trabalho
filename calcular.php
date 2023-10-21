<?php

function ir($salario) {
    switch($salario) {
        case($salario <= 2112):
            return 0;
        case($salario <= 2826.65):
            $calculado = $salario - 1903.98;
            return $calculado * 0.075;
        case($salario <= 3751.05):
            $calculado = $salario - 2826.65;
            return (922.67 * 0.075) + ($calculado * 0.15);
        case($salario <= 4664.68):
            $calculado = $salario - 3751.05;
            return (922.67 * 0.075) + (924.40 * 0.15) + ($calculado * 0.225);
        case($salario > 4664.68):
            $calculado = $salario - 4664.68;
            return (922.67 * 0.075) + (924.40 * 0.15) + (913.63 * 0.225) + ($calculado * 0.275);
        default:
            return 0;
    }
}

session_start();

if (!isset($_COOKIE['nome']) || !isset($_SESSION['salario'])) {
    header("Location: index.php");
    exit();
}

$nome = $_COOKIE['nome'];
$salario = $_SESSION['salario'];

if (!isset($_GET['opcao'])) {
    header("Location: opcoes.php");
    exit();
}

$_SESSION['opcao'] = $_GET['opcao'];

if (!isset($_SESSION[$_GET['opcao'] . '_contagem'])) {
    $_SESSION[$_GET['opcao'] . '_contagem'] = 1;
} else {
    $_SESSION[$_GET['opcao'] . '_contagem']++;
}

$_SESSION['opcao_contagem'] = $_SESSION[$_GET['opcao'] . '_contagem'];

switch ($_GET['opcao']) {
    case 'ferias':
        $_SESSION['ferias'] = ceil($salario * 0.33);
        break;
    case 'ir':
        $_SESSION['ir'] = ir($salario);
        break;
    case 'aumento':
        $_SESSION['aumento'] = ceil($salario * 0.1);
        $_SESSION['salario_antigo'] = $_SESSION['salario'];
        $_SESSION['salario'] += $_SESSION['aumento'];
        $_SESSION['ferias'] = $_SESSION['ir'] = null;
        
        break;
    default:
        break;
}

header("Location: resultados.php");
exit();
