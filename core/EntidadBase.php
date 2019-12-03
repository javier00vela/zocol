<?php
class EntidadBase{
    private $table;
    private $db;
    private $atribute;
    private $order;
    private $limit;
    private $conectar;
    private $whereAnd;

    public function __construct($table, $adapter) {
        $this->table= $table;
        $this->order="desc";
        $this->limit="";
        require_once 'core/Conectar.php';
        $this->conectar=new Conectar();
        $this->db=$this->conectar->conexion();
    }
    
    public function getConectar(){
        return $this->conectar;
    }
    
    public function db(){
        return $this->db;
    }
    

    public function setAtribute($atribute){
         $this->atribute=$atribute;
    }

    public function setLimit($limit){
         $this->limit="LIMIT ".$limit;
    }

    public function setWhereAnd($where){
         $this->whereAnd="AND ".$where;
    }

    public function setOrder($order){
         $this->order=$order;
    }


    public function getAll(){
        
        $query=$this->db->prepare("SELECT * FROM $this->table ORDER BY id_$this->table  $this->order  $this->limit ");
        $query->execute();
        $row= $query->fetchAll(PDO::FETCH_ASSOC);
           return $row;
        
        
    }

    
     public function getAllAtribute($value){
        $query=$this->db->prepare("SELECT * FROM $this->table  ORDER BY :value $this->order $this->limit ") ;
        $query->execute(array(":value"=>$value ));
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
           return $row;
        
        
        
    }

    public function getById($id){
        $query=$this->db->prepare("SELECT * FROM $this->table WHERE id_$this->table=? $this->whereAnd ORDER BY id_$this->table  $this->order $this->limit  ");
        $query->bindparam(1,$id);
        $query->execute();
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    
    public function getAtributeId($value){
        $query=$this->db->prepare("SELECT * FROM $this->table  WHERE $this->atribute=?  $this->whereAnd  ORDER BY id_$this->table  $this->order $this->limit ");
        $query->bindparam(1,$value);
        $query->execute();
        $row = $query->fetchAll(PDO::FETCH_ASSOC) ;
        return $row;
    }
    
    public function deleteById($id){
        $query=$this->db->prepare("DELETE FROM $this->table WHERE id_$this->table=? "); 
        $query->bindparam(1,$id);
        $query->execute();
        return $query;
    }
    
    public function deleteBy($value){
        $query=$this->db->prepare("DELETE FROM  $this->table  WHERE $this->atribute=?");
        $query->bindparam(1,$value);
        $query->execute();
        return $query;
    }

     public function UpdateByAtribute($value,$value2){
        $query=$this->db->prepare("UPDATE $this->table SET $this->atribute=:value WHERE id_$this->table=:value2");
        $query->execute(array(":value"=>$value,":value2"=>$value2)); 
        return $query;
    }

}
?>
