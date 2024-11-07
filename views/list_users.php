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
        /* Base styles */
        body {
            background-color: #F4F6F9; /* Light background for better contrast */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            color: #333; /* Dark text for better readability */
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            box-sizing: border-box;
            overflow: auto;
            text-align: center;
        }

        h2 {
            margin-bottom: 25px;
            color: #4E2A84; /* A deeper purple shade */
            font-size: 28px;
            font-weight: bold;
        }

        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
            background-color: #ffffff;
            text-align: left;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .styled-table thead {
            background-color: #4E2A84; /* Purple header */
            color: white;
            font-size: 18px;
            font-weight: bold;
        }

        .styled-table th, .styled-table td {
            padding: 14px 18px;
            text-align: left;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #ddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f9f9f9;
        }

        .styled-table tbody tr:hover {
            background-color: #f1f1f1; /* Slight hover effect */
            cursor: pointer;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #4E2A84;
        }

        /* Button styles */
        a, .btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: #4E2A84;
            color: white;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            text-decoration: none;
            margin-top: 20px;
        }

        a:hover, .btn:hover {
            background-color: #7633A1; /* Slight darkening on hover */
            transform: scale(1.05);
        }

        a {
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
                width: 90%;
            }

            h2 {
                font-size: 24px;
            }

            .styled-table th, .styled-table td {
                font-size: 14px;
                padding: 10px;
            }

            .btn, a {
                padding: 10px 15px;
                font-size: 14px;
            }
        }

        /* Notification styles (Success/Error messages) */
        .alert {
            padding: 15px;
            margin-top: 20px;
            background-color: #D4EDDA;
            color: #155724;
            border-radius: 5px;
            font-size: 16px;
            border: 1px solid #C3E6CB;
        }
        .alert-error {
            background-color: #F8D7DA;
            color: #721C24;
            border: 1px solid #F5C6CB;
        }
    </style>
</head>
<body class="<?= htmlspecialchars($_SESSION['perfil']) ?>">
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
                        <td><?= htmlspecialchars($user['id']) ?></td>
                        <td><?= htmlspecialchars($user['nome']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['perfil']) ?></td>
                        <td>
                            <!-- Função de edição de usuario -->
                            <?php if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                                <a class="ed" href="index.php?action=edit&id=<?= htmlspecialchars($user['id']) ?>">Editar</a>
                            <?php endif; ?>
                            <!-- Função de excluir de usuario -->

                            <?php if ($_SESSION['perfil'] == 'admin'): ?>
                                
                                <a href="index.php?action=delete&id=<?= htmlspecialchars($user['id']) ?>" onclick="return confirm('Você tem certeza que deseja excluir este usuário?');">Excluir</a>
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