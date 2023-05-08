<?php


class Conexion

{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $database = "pokemon88";
    private $con; // Objeto de la clase PDO

    public function __construct()
    {
        try{
            PDO::ERRMODE_EXCEPTION;
        }
        catch (PDOException $e)
        {
            echo "Error" . $e->getCode(); 
        }
    }

    /**
     * Get the value of con
     */
    public function getCon()
    {
        return $this->con;
    }
}