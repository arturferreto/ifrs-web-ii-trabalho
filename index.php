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
<form action="processar.php" method="POST">
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
    </div>

    <br>

    <div>
        <label for="salario">Salário</label>
        <input type="text" name="salario" id="salario">
    </div>

    <br>

    <button type="submit">ENVIAR</button>
    <button type="reset">LIMPAR</button>
</form>
</body>
</html>
