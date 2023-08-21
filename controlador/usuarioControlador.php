<?php

require_once('c://xampp/htdocs/proyectobd/modelo/usernameModel.php');

class usernameController{
    private $userModel;

    public function __construct(){
        $this->userModel = new usernameModel();
    }
    
    // FUNCIONES PARA CONTROLAR EL MODELO Y LA VISTA

    /**
     * Función para contr
     *
     * @param [type] $nombreUsuario
     * @return void
     */
    public function guardar($nombreUsuario){
        $id = $this->userModel->insertar($nombreUsuario);
        return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
    }

    public function show($id){
        return($this->userModel->show($id) != false) ? $this->userModel->show($id) : header("Location:index.php");
    }

    public function index(){
        return($this->userModel->index()) ? $this->userModel->index(): false;
    }

    public function update($id, $nombre){
        $update = $this->userModel->update($id, $nombre);
        return($update != false) ? header("Location:show.php?id.$id") : header("Location:index.php");
    }

    public function delete($id){
        $delete = $this->userModel->delete($id);
        return($delete) ? header("Location:index.php") : header("Location:show.php?id.$id");
    }
}

?>