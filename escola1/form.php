<?php //require 'aluno.php' ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inclusão de Alunos</title>
</head>
<body>
    <form method="post" action="gravar.php">
        <label name="nome">Nome: </label>
        <input type="text" name="nome" value="<?=nome?>" autofocus="autofocus">
        
<!--        <label name="matricula">Matrícula </label>-->
        <input type="hidden" name="matricula" value="<?=matricula?>">

        <input type="submit" value="Gravar">
    </form>
</body>
</html>
