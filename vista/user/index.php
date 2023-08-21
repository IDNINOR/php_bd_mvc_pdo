<?php
require_once("c://xampp/htdocs/proyectobd/vista/head/header.php");
require_once("c://xampp/htdocs/proyectobd/controlador/usuarioControlador.php");

$userController = new usernameController();
$rowsdatos = $userController->index();
?>

<div class="mb3">
    <a href="/proyectobd/vista/user/create.php" class="btn btn-primary">Agregar nuevo usuario</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th class="col">Id</th>
            <th class="col">Nombre</th>
            <th class="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($rowsdatos): ?>
            <?php foreach ($rowsdatos as $row): ?>
                <tr>
                    <th>
                        <?= $row['id'] ?>
                    </th>
                    <th>
                        <?= $row['nombre'] ?>
                    </th>
                    <th>
                        <a href="show.php?id=<?= $row['id'] ?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-success">Modificar</a>
                        <!-- Button <a> modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el Registro?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Una vez eliminado no se podrá recuperar el registro
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <a href="delete.php?id=<?= $row["id"] ?>" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>

    </tbody>
</table>
<?php require_once("c://xampp/htdocs/proyectobd/vista/footer/footer.php"); ?>