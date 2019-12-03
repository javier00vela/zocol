<?php
class Conectar{
    private   $driver;
    private  $host, $user, $pass, $database, $charset;
  
    public function __construct() {
        $db_cfg = require_once 'config/database.php';
        $this->driver="mysql";
        $this->host="localhost";
        $this->user="root";
        $this->pass="";
        $this->database="zocol";
        $this->charset=$db_cfg["charset"];
    }
    
    public function conexion(){
         $db_cfg = require_once 'config/database.php';
        if($this->driver=="mysql" || $this->driver==null){
            $con = new PDO("$this->driver:host=$this->host;dbname=$this->database",$this->user, $this->pass);
            $con->query("SET NAMES '".$this->charset."'");
            
        }
        
        return $con;
    }
}
?>