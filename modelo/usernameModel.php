<?php

require_once('c://xampp/htdocs/proyectobd/config/database.php');
class usernameModel{

    private $PDO;
    public function __construct(){
        $conexion = new Database();
        $this->PDO = $conexion->conexion();
    }

    // FUNCIONES 

    /**
     * Funcion para insertar SQL para inserción en la base de datos
     *
     * @param [type] $nombre
     * @return void
     */
    public function insertar($nombre){
        $statement = $this->PDO->prepare("INSERT INTO usuario VALUES(null, :nombre)");
        $statement->bindParam(":nombre", $nombre);
        return ($statement->execute()) ? $this->PDO->lastInsertId() : false;

    }

    /**
     * Función para leer un ID especifico
     *
     * @param [type] $id
     * @return void
     */
    public function show($id){
        $statement = $this->PDO->prepare("SELECT * FROM usuario WHERE id = :id limit 1");
        $statement->bindParam(":id", $id);
        return ($statement->execute()) ? $statement->fetch() : false;
    }

    /**
     * Función para listar datos de la tabla usuario de BD
     *
     * @return void
     */
    public function index(){
        $statement = $this->PDO->prepare("SELECT * FROM usuario");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }

    /**
     * Función para editar datos de la tabla usuario de BD
     *
     * @return void
     */
   public function update($id, $nombre){
    $statement = $this->PDO->prepare("UPDATE usuario SET nombre = :nombre WHERE id= :id");
    $statement->bindParam(":nombre", $nombre);
    $statement->bindParam(":id", $id);
    return ($statement->execute()) ? $id : false;
   }

   public function delete($id){
    $statement = $this->PDO->prepare("DELETE FROM usuario WHERE id= :id");
    $statement->bindParam(":id", $id);
    return ($statement->execute()) ? true : false;
   }
}

?>