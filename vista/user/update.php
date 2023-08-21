<?php
    require_once("c://xampp/htdocs/proyectobd/controlador/usuarioControlador.php");
    $objController = new usernameController();
    $objController->update($_POST['id'], $_POST['nombre']);
?>