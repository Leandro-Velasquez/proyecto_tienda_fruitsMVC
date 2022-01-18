<?php

class Conexion{

    private static $instancia;

    private function __construct(){}

    public static function getConexion()
    {
        if(!isset(self::$instancia))
        {
            $host = 'localhost';
            $dbname = 'tienda';
            $user = 'root';
            $password = '';
            try{
                self::$instancia = new PDO('mysql:dbname=' . $dbname . ';host=' . $host, $user, $password);
            }catch(PDOException $e)
            {
                echo 'Error al intentar conectarse a la base de datos: ' . $e->getMessage();
            }catch(Exception $e)
            {
                echo 'Error generico: '. $e->getMessage();
            }
        }

        return self::$instancia;
    }
}

?>