<?php

require_once "controllers/template.controller.php";
require_once "controllers/categories.controller.php";

require_once "models/categories.model.php";


/*==========================================
    OBJETO PARA TRAER PLANTILLA
==========================================*/
$template = new ControllerTemplate();
$template->ctrTemplate();