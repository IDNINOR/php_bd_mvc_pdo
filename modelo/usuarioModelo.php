<?php

class Usuario
{

    //atributos de la clase Usuario

    /**
     * @var int ID usuario
     */
    private $dni = "";
    /**
     * @var string NOMBRE usuario
     */
    private $nameUser = "";
    /**
     * @var string EMAIL usuario
     */
    private $email = "";
    /**
     * @var int TELEFONO usuario
     */
    private $telefono = "";

    /**
     * @param int $dni El ID de usuario
     * @param string $nameUser El nombre de usuario
     * @param string $email El correo de usuario
     * @param int $telefono El telefono de usuario
     */

    public function __construct($dni, $nameUser, $email, $telefono)
    {
        $this->dni = $dni;
        $this->nameUser = $nameUser;
        $this->email = $email;
        $this->telefono = $telefono;

    }

    /**
     * Funciones para Capturar (GET) y Modificar (SET)
     */

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    public function getNameUser()
    {
        return $this->nameUser;
    }

    public function setNameUser($nameUser)
    {
        $this->nameUser = $nameUser;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function __toString()
    {
        return (" DNI: " . $this->dni .
            "\n NOMBRE: " . $this->nameUser .
            "\n CORREO: " . $this->email .
            "\n TELEFONO: ". $this->telefono);
    }

}

$objeto = new Usuario(123, "daniel", "idninor4@gmail.com", 31022071689);
echo $objeto;

?>