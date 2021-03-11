<?php
namespace DataBase;
use PDO;
use Exception;

class DataBase
{
    private $connection;
    private $options=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC);
    private $dbHost;
    private $dbName;
    private $dbUsername;
    private $dbPassword;
    function __construct()
    {
        try{
            $this->connection = new PDO("mysql:host=".$this->dbHost.";dbname=".
            $this->dbName,$this->dbUsername,$this->dbPassword,$this->options);
        }
        catch(Exception $e){
            echo "<div style='color:red;'> there is some problem in connection :". $e->getMessage();
            
        }
    }
    public function createTable($sql)
    {
        try{

            $this->connection->exec($sql);
            return true;
        }
        catch(Exception $e)
        {
            echo "<div style='color:red;'> there is some problem in connection :". $e->getMessage();
            return false;
        }
    }
}