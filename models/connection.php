<?php

class Connection
{
    /*==========================================
        CONECTARSE A BASE DE DATOS - MySQL
    ==========================================*/
    static public function connect()
    {
        $link = new PDO("mysql:host=localhost;dbname=pos", "root", "");
        $link->exec("set names utf8");
        return $link;
    }
}
