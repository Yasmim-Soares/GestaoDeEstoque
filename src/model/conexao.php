<?php

class Conexao {
    private const host = 'localhost';
    private const db_name = 'estoque';
    private const user = 'root';
    private const pass = '';

    private static $pdo = null;

    private function __construct(){     
    }

    public static function getConexao(){
        if(self::$pdo === null){
            try{
                $dsn = 'mysql:host' . self::host . ';dbname=' . self::db_name . ';charset=utf8';

                self::$pdo = new PDO($dsn, self::user, self::pass);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                die("Erro de conexão com o banco " . $e->getMessage());
            }
        }

        return self::$pdo;
    }

}