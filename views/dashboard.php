
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type='text/css' media='screen' href="">

    <style>
        body {
    background-color: #E5D7F2;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    font-family: 'Arial', sans-serif;
}

.container {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    width: 80%;
    max-width: 600px;
    text-align: center;
    box-sizing: border-box;
}

h1 {
    color: #520E6B;
    font-size: 28px;
    margin-bottom: 20px;
}

p {
    color: #333333;
    font-size: 18px;
}

.btn-gerenciar {
    display: inline-block;
    padding: 12px 20px;
    background-color: #520E6B;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    text-decoration: none;
    margin-top: 20px;
    transition: background-color 0.3s, transform 0.2s;
}

.btn-gerenciar:hover {
    background-color: #E5D7F2;
    transform: scale(1.05);
}

.btn-logout {
    display: inline-block;
    padding: 12px 20px;
    background-color: #ff4d4d;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    text-decoration: none;
    margin-top: 20px;
    transition: background-color 0.3s, transform 0.2s;
}

.btn-logout:hover {
    background-color: #e63946;
    transform: scale(1.05);
}

@media (max-width: 600px) {
    .container {
        width: 90%;
    }

    h1 {
        font-size: 24px;
    }

    p {
        font-size: 16px;
    }
}

    </style>

</head>

<body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, <?= $_SESSION['perfil'] ?>!</h1>
        <p>Esta é a visão do perfil <?= $_SESSION['perfil'] ?>.</p>

        <?php if($_SESSION['perfil'] == 'admin'): ?>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn-gerenciar">Gerenciar Usuários (Admin)</a>

        <?php elseif($_SESSION['perfil'] == 'gestor'): ?>
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn-gerenciar">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>

        <?php else: ?>
            <p>Área exclusiva do Colaborador.</p>
        <?php endif; ?>

        <br><br><br><br>
        <!-- Link para logout com estilo diferente -->
        <a href="index.php?action=logout" class="btn-logout">Logout</a>
    </div>
</body>

</html>
