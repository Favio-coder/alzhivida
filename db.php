<?php


class conexion {
    private $server = "localhost";
    private $password = "";
    private $user = "root";
    private $conexion;

    public function __construct()
    
    {
        try{
            $this->conexion=new PDO("mysql:host=$this->server;dbname=nombres", $this->user, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            throw new Exception("Error en la conexión: " . $e->getMessage());
        }
    }

    public function ejecutar($sql){
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }

    public function consultar($sql){
        $sentencia=$this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
}

?>