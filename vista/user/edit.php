<?php
require_once('c://xampp/htdocs/proyectobd/vista/head/header.php');
require_once('c://xampp/htdocs/proyectobd/controlador/usuarioControlador.php');
$usernameController = new usernameController();
$date = ($usernameController->show($_GET['id']));
//print_r($date);
?>

    <form action="update.php" method="POST" autocomplete="off">
        <h2>Modificación de Registro</h2>
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $date['id'] ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" class="form-control" id="inputPassword" value="<?= $date['nombre'] ?>">
    </div>
  </div>
  <div>
    <input type="submit" class="btn btn-success" value="Actualizar">
    <a class="btn btn-danger" href="show.php?id:<?= $date['id'] ?>">Cancelar</a>
  </div>
    </form>

<?php
require_once('c://xampp/htdocs/proyectobd/vista/footer/footer.php');
?>