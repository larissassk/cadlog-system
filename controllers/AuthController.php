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
        }
    }
}
