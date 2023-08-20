<?php
 
require_once('./server.php');

class Database{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "usuario";

    public function __construct(){
        $this->server = constant('SERVER');
        $this->username = constant('USER');
        $this->password = constant('PASSWORD');
        $this->dbname = constant('DBNAME');
    
    }

    public function conexion(){
        try{
            $PDO = new PDO("mysql:host=".$this->server.";dbname=".$this->dbname,$this->username,$this->password);
            if($PDO != null){
                echo "Existe Conexión";
                echo "\n";
                return $PDO; 
            }
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

}

$objDB = new Database();
print_r($objDB->conexion());





