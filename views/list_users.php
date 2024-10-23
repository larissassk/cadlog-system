<?php
session_start();
if (isset($_SESSION['perfil'])):
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" type='text/css' media='screen' href="css/list.css">
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
    width: 100%;
    max-width: 600px;
    text-align: center;
    box-sizing: border-box;
    overflow: auto; /* Adiciona rolagem se necessário */
}

h2 {
    margin-bottom: 20px;
    color: #520E6B;
    font-size: 24px; 
    font-weight: 600;
}

.styled-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 18px;
    text-align: left;
}

.styled-table thead tr {
    background-color: #520E6B;
    color: #ffffff;
}

.styled-table th, .styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #ddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f2f2f2;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #520E6B;
}

a {
    color: #520E6B;
    text-decoration: none;
    font-size: 14px;
    margin: 0 5px;
}

a:hover {
    text-decoration: underline; 
}

.btn {
    display: inline-block;
    margin-top: 20px;
    padding: 12px 20px;
    background-color: #520E6B;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

.btn:hover {
    background-color: #E5D7F2;
    transform: scale(1.05);
}

@media (max-width: 600px) {
    .container {
        width: 90%;
    }

    h2 {
        font-size: 22px;
    }

    .styled-table {
        font-size: 16px;
    }
}

    </style>
</head>
<body class="<?= $_SESSION['perfil'] ?>">
    <div class="container">
        <h2>Lista de Usuários</h2>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['nome'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['perfil'] ?></td>
                        <td>
                            <?php if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                                <a href="">Editar</a>
                            <?php endif; ?>

                            <?php if ($_SESSION['perfil'] == 'admin'): ?>
                                <a href="">Excluir</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a>
    </div>
</body>
</html>
<?php else: ?>
    <p>Erro: Você não tem permissão para visualizar essa página</p>
<?php endif; ?>
