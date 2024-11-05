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
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), //criptografa a senha
                'perfil' => $_POST['perfil']

            ];

            User::create($data);
            header('Location: index.php');
        } else {
            //Se nao for post carrega a pagina de registro
            include 'views/register.php';
        }
    }
    public function list()
    {
        $users = User::all();
        include 'views/list_users.php';
    }

    public function edit($id)
    {
        session_start();
        // permitir que o admin e gestor edite 
        if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor') {
            $user = User::find($id);

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [
                    'nome' => $_POST['nome'],
                    'email' => $_POST['email'],
                    'perfil' => $_POST['perfil']

                ];


                User::update($id, $data);
                header('Location: index.php?action=list');
            } else {
                include 'views/edit_user.php';
            }
        } else {
            echo 'Você nao tem permissão para editar usuarios';
        }
    }
}
