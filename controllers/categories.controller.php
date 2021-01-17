<?php

class ControllerCategories
{
    /*==========================================
        METODO PARA MOSTRAR CATEGORIAS
    ==========================================*/
    public static function ctrShowCategories($item, $value)
    {
        $table = "categorias";
        $response = ModelCategories::mdlShowCategories($table, $item, $value);
        return $response;
    }
}
