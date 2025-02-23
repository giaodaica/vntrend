<?php
namespace Admin\App\Models;

use PDO;
use PDOException;

class Database{
    protected $table = null;
    protected $sql;
    protected $prmkey;
    protected $conn = null;
    
    public function __construct(){

        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=".BASE_NAME,BASE_USERNAME,BASE_PASSWORD);
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
    public static function create($data){
        $model = new static;
        $sql = "INSERT INTO $model->table (";
        $value = "VALUES (";
        foreach($data as $col => $val){
            $sql .= "`$col`, ";
            $value .= ":$col, ";
        }
        $sql = rtrim($sql,', '). ") " . rtrim($value,', '). ")";
        // db($sql);
        $stmt = $model->conn->prepare($sql);
        $stmt->execute($data);
        return $model->conn->lastInsertId();
    }
    public static function update($data,$id){
        $model = new static;
        $sql = "UPDATE $model->table set ";
        foreach($data as $col => $val){
            $sql .= "`$col` = :$col, ";
        }
        $sql = rtrim($sql,', '). " WHERE $model->prmkey = :id";
        // dd($sql);
        $data[$model->prmkey] = $id;
        $stmt = $model->conn->prepare($sql);
        
        $stmt->execute($data);
    }
    public static function delete($id){
        $model = new static;
        $sql = "DELETE FROM $model->table WHERE $model->prmkey = :$model->prmkey";
        // dd($sql);
        $stmt = $model->conn->prepare($sql);
        $stmt->execute(["$model->prmkey" => $id]);
    }
    public static function find($id) {
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE $model->prmkey = :$model->prmkey";
        // db($sql);
        $stmt = $model->conn->prepare($sql);
        $stmt->execute(["$model->prmkey" => $id]);
        $data = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $data[0] ?? [];
    }
    public static function where($col,$opr,$val){
        $model = new static;
        $model->sql = "SELECT * FROM $model->table WHERE $col $opr '$val'";
        // db($model->sql);
        return $model;
    }
    public function get(){
        $stmt = $this->conn->prepare($this->sql);
        // db($stmt);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function first(){
        $stmt = $this->conn->prepare($this->sql);
        // db($stmt);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $data[0] ?? [];
    }
    public function orWhere($col,$opr,$val){
        $this->sql .= " OR $col $opr '$val'";
        // db($this->sql);
        return $this;
    }
    public function andWhere($col,$opr,$val){
        $this->sql .= " AND $col $opr '$val'";
        // db($this->sql);
        return $this;
    }
    public static function getTable($cols = ['*']){
        $model = new static;
        $model->sql = "SELECT ";
        foreach($cols as $col){
            $model->sql .= "$col, ";
        }
        $model->sql = rtrim($model->sql,', '). " FROM $model->table";
        
        // db($model->sql);
        return $model;

    }
    public function joinTable($table,$prmkey,$childKey){
        $this->sql .= " JOIN $table ON $this->table.$prmkey = $table.$childKey";
        // db($this->sql);
        return $this;
    }
}