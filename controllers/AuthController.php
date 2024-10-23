<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            font-size: 18px;
            text-align: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .error-message:before {
            content: '⚠️';
            font-size: 24px;
            margin-right: 10px;
        }

        .error-message a {
            color: #721c24;
            text-decoration: underline;
            margin-left: 10px;
        }

        .error-message a:hover {
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    require_once 'models/user.php';

    class AuthController
    {
        public function login()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                $user = User::findByEmail($email);

                if ($user && password_verify($senha, $user['senha'])) {
                    session_start();
                    $_SESSION['usuario_id'] = $user['id'];
                    $_SESSION['perfil'] = $user['perfil'];

                    header('Location: index.php?action=dashboard');
                } else {
                    echo "<div class='error-message'>Email ou senha incorretos</div>";
                }
            } else {
                include 'views/login.php';
            }
        }

        public function logout()
        {
            session_start();
            session_destroy();
            header('Location: index.php');
        }
    }
    ?>
</body>

</html>
