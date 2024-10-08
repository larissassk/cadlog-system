<?php
class DashboardController
{
    public function index()
    {
        //inicia a sessao para verificar se o usuario esta autenticado
        session_start();

        //verifica se a variavel de sessão "usuario_id" esta definida 
        //se nao estiver significa que o usuario nao esta autenticado
        if (!isset($_SESSION['usuario_id'])) {
            header('Location: index.php');
            exit; //garante que o script sera interrompido após o redirecionamento
        }
        include 'views/dashboard.php';
    }
}
