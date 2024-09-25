<?php
require_once 'model/database.php';

class User
{
    //Função para localizar usuário pelo email 
    public static function findByEmail($email)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    //Função para encontrar usuario pelo id
    public static function find($id)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //Função para criar um novo usuario no banco de dados
    public static function create($data)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO usuarios(nome, email senha, perfil)");
    }
}
?>