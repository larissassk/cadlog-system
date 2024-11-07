<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="">
</head>
<style>

    .edit-container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        width: 100%;
        max-width: 800px;
        box-sizing: border-box;
        overflow: auto; /* Adiciona rolagem se necessário */
    }

    h1 {
        margin-bottom: 20px;
        color: #520E6B;
        font-size: 24px;
        font-weight: 600;
    }

    .edit-form label {
        display: block;
        margin-bottom: 8px;
        font-size: 16px;
        color: #333;
    }


    .edit-form input:focus, .edit-form select:focus {
        border-color: #520E6B;
        outline: none;
    }

    .btn {
        display: inline-block;
        padding: 12px 20px;
        background-color: #520E6B;
        color: white;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
    }

    body {
    background-color: #E5D7F2;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    font-family: 'Arial', sans-serif;
    overflow-x: hidden; /* Adiciona essa linha para garantir que não há rolagem horizontal */
}

.edit-form input, .edit-form select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 1px solid #ddd;
    font-size: 16px;
    line-height: 1.5; /* Aumenta o espaçamento entre as linhas */
}

.btn:hover {
    background-color: #E5D7F2;
    transform: scale(1.05);
    background-color: #6A1B9A; /* Novo tom de hover mais chamativo */
}


    .btn:active {
        transform: scale(1);
    }

    .back-link {
        display: inline-block;
        margin-top: 20px;
        font-size: 14px;
        color: #520E6B;
        text-decoration: none;
    }

    .back-link:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .edit-container {
            width: 90%;
        }

        h1   {
            font-size: 22px;
        }

        .edit-form input, .edit-form select {
            font-size: 14px;
        }
    }

    /* Responsividade extra para telas menores */
    @media (max-width: 480px) {
        .edit-container {
            padding: 20px;
        }

        h1 {
            font-size: 40px;
        }

        .edit-form input, .edit-form select {
            padding: 8px;
        }

        .btn {
            padding: 10px 18px;
            font-size: 14px;
        }
    }
</style>

<body class="edit-body">
    <div class="edit-container">
        <h1>Editar Usuário</h1>
        <form method="post" action="index.php?action=edit&id=<?= $user['id']?>" class="edit-form">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $user['nome']?>" required>
 
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= $user['email']?>" required>
 
            <label for="perfil">Perfil:</label><br>
            <select name="perfil" id="perfil">
                <option value="admin"<?= $user['perfil'] == 'admin' ? 'selected' : '' ?> >Admin</option>  
                <option value="gestor" <?= $user['perfil'] == 'gestor' ? 'selected' : '' ?> >Gestor</option>
                <option value="colaborador" <?= $user['perfil'] == 'colaborador' ? 'selected' : '' ?> >Colaborador</option>
            </select><br><br>
 
            <button type="submit" class="btn">Salvar</button>
        </form>
        <a href="index.php?action=list" class="back-link">Voltar para Lista de Usuários</a>
    </div>
</body>
 
</html>