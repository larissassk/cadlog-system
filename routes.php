<?php
// Inclui arquivos de controlador para lidar com diferentes ações
require 'controllers/AuthController.php';
require 'controllers/UserController.php'; 
require 'controllers/DashboardController.php'; 

// Cria instâncias dos controladores para utilizar seus métodos
$authController = new AuthController(); 
$userController = new UserController(); 
$dashboardController = new DashboardController(); 

// Coleta a ação da URL, se não houver definida, usa 'login' por padrão
$action = $_GET['action'] ?? 'login'; // Usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente

// Verifica a ação solicitada e chama o método apropriado do controlador
switch ($action) {
    case 'login':
        $authController->login(); 
        break;
    case 'register':
        $userController->register(); 
        break;
    case 'dashboard':
        $dashboardController->index(); 
        break; 
    default:
        $authController->login(); 
        break;
}
?>
