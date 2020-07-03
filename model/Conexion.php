<?php
class Conexion
{
    public static function Conectar()
    {
        $pdo = new PDO("mysql:host=localhost:3306;
        dbname=clothing_store_bd;charset=utf8", "root", "LOSPERICOS2018");
        $pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
        return $pdo;
    }
}
