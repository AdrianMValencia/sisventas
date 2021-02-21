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
    /*==========================================
        METODO PARA CREAR CATEGORIAS
    ==========================================*/
    public static function ctrCreateCategory()
    {
        if (isset($_POST["newCategory"])) {
            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["newCategory"])) {
                $table = "categorias";
                $data = $_POST["newCategory"];
                $response = ModelCategories::mdlCreateCategory($table, $data);
                if ($response == "ok") {
                    echo '<script>
                        Swal.fire({
                            icon: "success",
                            title: "¡La categoría ha sido guardada correctamente!",
                            showConfirmButton: true,
                            confirmButtonText: "Aceptar",
                            closeOnConfirm: true
                        }).then((result)=>{
                            if(result.value){
                            window.location = "categories";
                            }
                        });
                    </script>';
                }
            } else {
                echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "¡La categoría no puede ir vacía o llevar caracteres especiales!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: true
                        }).then((result)=>{
                            if(result.value){
                            window.location = "categories";
                            }
                        });
                    </script>';
            }
        }
    }
}
