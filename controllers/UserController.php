<?php
//Definição da classe UserController, responsavel por gerenciar as ações relacionadas ao usuarios
class UserController
{
    //função que registra o usuario
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),//criptografa a senha
                'perfil' => $_POST['perfil']

            ];

            User::create($data);

        } else {
            //Se nao for post carrega a pagina de registro
            include 'views/register.php';
        }
    }
}
