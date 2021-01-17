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
                                        <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
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