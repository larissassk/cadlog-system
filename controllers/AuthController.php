<?php
// Requer arquivo 'user.php' que contem o model user com as funções para manupulação de dados de usuário.
require_once 'models/user.php';

class  AuthController
{

    // Cria função responsável pelo processo de login
    public function login()
    {
        //Verifica se a requisição HTTP é do tipo post, ou seja se o formulario foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $user = User::findByEmail($email);

            if ($user && password_verify($senha, $user['senha'])) { //Verifica se a senha corresponde a um hash

                session_start();

                //Armazena na sessão o ID do usuario e seu perfil
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['perfil'] = $user['perfil'];

                header('Location: index.php?action=dashboard');
            }else{
                echo"Email ou senha incorretos";
            }

            }else{
                // Se nao for POST carrega a pagina de registro
                include 'views/login.php';
            }
        }
    }
?>
