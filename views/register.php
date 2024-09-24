<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h2>Cadastro de usuário</h2>
        <form action="" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required><br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required><br>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required><br>

            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="">Voltar ao Login</a>
    </div>
</body>

</html>