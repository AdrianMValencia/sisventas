<?php

require_once "connection.php";

class ModelCategories
{
    /*==========================================
        METODO PARA MOSTRAR CATEGORIAS
    ==========================================*/
    public static function mdlShowCategories($table, $item, $value)
    {
        if ($item != null) {
            $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item ORDER BY id DESC");
            $stmt->bindParam(":" . $item, $value, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        } else {
            $stmt = Connection::connect()->prepare("SELECT * FROM $table ORDER BY id DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        }
        $stmt->close();
        $stmt = null;
    }
}