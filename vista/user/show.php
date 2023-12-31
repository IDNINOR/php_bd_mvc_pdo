<?php
require_once('c://xampp/htdocs/proyectobd/vista/head/header.php');
require_once('c://xampp/htdocs/proyectobd/controlador/usuarioControlador.php');
$usernameController = new usernameController();
$date = ($usernameController->show($_GET['id']));
?>

<h2 class="text-center">Información de Registro</h2>
<div class="pb-3">
    <a class="btn btn-primary" href="index.php">Regresar</a>
    <a href="edit.php?id=<?= $date["id"] ?>" class="btn btn-success">Actualizar</a>
    
    <!-- Button <a> modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el Registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado no se podrá recuperar el registro
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $date["id"] ?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col">
                <?= $date["id"] ?>
            </td>
            <td scope="col">
                <?= $date["nombre"] ?>
            </td>
        </tr>
    </tbody>
</table>

<?php
require_once('c://xampp/htdocs/proyectobd/vista/footer/footer.php');
?>