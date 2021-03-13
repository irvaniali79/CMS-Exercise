<?php
namespace DataBase;
use PDO;
use Exception;
use PDOException;

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
        catch(PDOException $e){
            echo "<div style='color:red;'> there is some problem in connection :". $e->getMessage();
            
        }
    }
    public function select($sql,$values=NULL)
    {
        try{
            if($values==NULL){
                return $this->connection->query($sql);
            }
            else{
                $stmt=$this->connection->prepare($sql);
                $stmt=$stmt->execute($values);
                $result=$stmt;
                return $result;

            }
        }catch(PDOException $e)
        {
            echo "<div style='color:red;'> there is some problem in connection :". $e->getMessage();
            return false;
        }
    }
    public function insert($tableName,$fields,$values)
    {
        try{
                $stmt=$this->connection->prepare('INSERT INTO'.$tableName.'('.implode(',',$fields).
                ',created_at) VALUES ( :'.implode(',:',$fields).',now() );');
                $stmt->execute(array_combine($fields,$values));
                return True;
        }catch(PDOException $e)
        {
            echo "<div style='color:red;'> there is some problem in connection :". $e->getMessage();
            return false;
        }
    }
    public function createTable($sql)
    {
        try{

            $this->connection->exec($sql);
            return true;
        }
        catch(PDOException $e)
        {
            echo "<div style='color:red;'> there is some problem in connection :". $e->getMessage();
            return false;
        }
    }
}