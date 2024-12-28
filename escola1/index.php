<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro De Alunos</title>
</head>
<body>
    <h1>Cadastro de Alunos</h1>
    <a href="form.php">Incluir Aluno</a>
    <table>
        <thead>
        <tr>
            <th>Matrícula: </th>
            <th>Nome: </th>
        </tr>
        </thead>
        <tbody>
        <?php require 'listar.php' ?>
        </tbody>
    </table>
</body>
</html>
