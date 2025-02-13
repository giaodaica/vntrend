<?php
namespace App\Models;

use PDO;
use PDOException;

class Database{
    protected $table = null;
    protected $sql;
    protected $primaryKey;
    protected $conn = null;
    public function __construct(){
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=db_vntrend","root","");
        } catch (PDOException $e) {
          echo "Lỗi kết nối".$e->getMessage();
        }
    }
    public static function select(){
        $models = new static;
        $sql = "SELECT * from $models->table";
        $stmt = $models->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public static function where($col,$opr,$val){
        $models = new static;
        $models->sql = "SELECT * FROM $models->table where $col $opr '$val'";
        return $models;
    }
    public function andwhere($col,$opr,$val){
        $this->sql .= " AND $col $opr '$val'";
        // db($this->sql);
        return $this;
    }
    public function get(){
        $stmt = $this->conn->prepare($this->sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}