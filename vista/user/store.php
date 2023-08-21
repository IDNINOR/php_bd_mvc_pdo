<?php
    require_once('c://xampp/htdocs/proyectobd/controlador/usuarioControlador.php');
    $userController = new usernameController();
    $userController->guardar($_POST['nombre']);
   
?>