<?php
require_once 'models/user.php';

class UserController
{
    // Função que registra o usuário
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), // Criptografa a senha
                'perfil' => $_POST['perfil']
            ];

            User::create($data);
            header('Location: index.php');
        } else {
            // Se não for POST, carrega a página de registro
            include 'views/register.php';
        }
    }

    public function list()
    {
        $users = User::all();
        include 'views/list_users.php';
    }
}
?>
