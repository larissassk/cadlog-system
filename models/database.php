<?php
class Database {
    // Utiliza o padrão Singleton
    private static $instance = null;

    // Método público que retorna a conexão com o banco de dados
    public static function getConnection() {
        // Verifica se a instância de conexão ainda não foi criada
        if (!self::$instance) {
            $host     = 'localhost';
            $db       = 'sistema_usuarios';
            $user     = 'root';
            $password = ''; 

            try {
                // A conexão usa o driver Mysql (mysql:) e as informações de host e DB
                self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $password);
                // Define o modo de erro para exceções
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                // Em caso de erro na conexão, lança uma exceção
                die("Connection failed: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
?>
