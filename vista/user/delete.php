<?php
    require_once("c://xampp/htdocs/proyectobd/controlador/usuarioControlador.php");
    $objController = new usernameController();
    $objController->delete($_GET['id']);
    
?>