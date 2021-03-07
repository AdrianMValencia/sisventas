<?php

require_once "../controllers/categories.controller.php";

require_once "../models/categories.model.php";

class AjaxCategories
{
    /*==========================================
        EDITAR CATEGORIA
    ==========================================*/
    public $idCategory;
    public function ajaxEditCategory()
    {
        $item = "id";
        $value = $this->idCategory;
        $response = ControllerCategories::ctrShowCategories($item, $value);
        echo json_encode($response);
    }
}
/*==========================================
    OBJETO EDITAR CATEGORIA
==========================================*/
if (isset($_POST["idCategory"])) {
    $category = new AjaxCategories();
    $category->idCategory = $_POST["idCategory"];
    $category->ajaxEditCategory();
}