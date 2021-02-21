<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6">
                    <h1>Administrar categorías</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="start">Inicio</a></li>
                        <li class="breadcrumb-item active">Administrar categorías</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddCategory">
                    <i class="fas fa-plus"></i>
                    Agregar categoría
                </button>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered dt-responsive tables" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>CATEGORIA</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $item = null;
                        $value = null;
                        $categories = ControllerCategories::ctrShowCategories($item, $value);
                        ?>
                        <?php foreach ($categories as $key => $value) : ?>
                            <tr>
                                <td><?php echo ($key + 1); ?></td>
                                <td><?php echo $value["categoria"]; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-warning btnEditCategory" idCategory="<?php echo $value["id"]; ?>" data-toggle="modal" data-target="#modalEditCategory"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-danger btnDeleteCategory" idCategory="<?php echo $value["id"]; ?>"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<!--========================================
    MODAL PARA AGREGAR CATEGORIA
=========================================-->
<div class="modal fade" id="modalAddCategory" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="POST">
                <!-- CABECERAR DEL MODAL -->
                <div class="modal-header bg-primary">
                    <h4 class="modal-title">Agregar Categoría</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- CUERPO DEL MODAL -->
                <div class="modal-body">
                    <!-- CAMPO PARA EL NOMBRE DE LA CATEGORIA -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-th"></i></span>
                        </div>
                        <input type="text" class="form-control" name="newCategory" id="newCategory" placeholder="Ingresar categoría" style="color: black;">
                    </div>
                </div>
                <!-- PIE DEL MODAL -->
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-success">Guardar categoría</button>
                </div>
                <?php
                $createCategory = new ControllerCategories();
                $createCategory->ctrCreateCategory();
                ?>
            </form>
        </div>
    </div>
</div>