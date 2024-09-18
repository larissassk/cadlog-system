<?php
class Database
{
    // Utiliza padrão Singleton, cujo objetivo é garantir que apenas uma unica instancia de classe seja criada durante a execução do programa, e que essa instancia seja utilizada sempre que necessario

    private static $instance = null;

    //Método publico que retorna a conexão com BD
    public static function getConnection()
    {
        //Verifica se nao existe instancia de conexão 
        if (!self::$instance) {
            $host         = 'localhost';
            $db           = 'sistema_usuario';
            $user         = 'root';
            $password     = '';
            //A conexão usa o driver Mysql (mysql:) e as informações de host e DB
            self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $password);

            //Define o modo de erro para excessoes, facilitando a depuração e o tratamento de erro
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
