<?php
// Inclui arquivos de controlador para lidar com diferentes ações
require 'controllers/AuthController.php'; // inclui o controlador de autenticação
require 'controllers/UserController.php'; // inclui o controlador de usuário
require 'controllers/DashboardController.php'; // inclui o controlador de dashboard

// Cria instâncias dos controladores para utilizar seus métodos
$authController = new AuthController(); // Instancia o controlador de autenticação
$userController = new UserController();
$dashboardController = new DashboardController();


// Coleta a ação da URL, se não houver definida, usa 'login' por padrão
$action = $_GET['action'] ?? 'login'; // Usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente

// Verifica a ação solicitada e chama o método apropriado do controlador
switch ($action) {
    case 'login':
        $authController->login(); // chama o método login do controlador de autenticação
        break;
    case 'register':
        $userController->register();
        break;
    case 'dashboard':
        $dashboardController->index();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'list':
        $userController->list();
        break;
    case 'edit':
        $id = $_GET['id'];
        $userController->edit($id);
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $userController->delete($_GET['id']);
            header('Location: index.php?action=list');
            exit;
        }
        break;
    default:
        $authController->login();
        break;
}
