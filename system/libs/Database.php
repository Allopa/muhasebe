<?php

class Database extends PDO{
    
    public function __construct($dsn, $user, $password) {
        parent::__construct($dsn, $user, $password);
        $this->query("SET NAMES ´utf8´");
        $this->query("SET CHARACTER SET utf8");
    }
    
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC){
        $this->query("SET NAMES ´utf8´");
        $this->query("SET CHARACTER SET utf8");
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue($key, $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }
    
    public function selectSum($sql, $array = array(), $fetchMode = PDO::FETCH_OBJ){
        $this->query("SET NAMES ´utf8´");
        $this->query("SET CHARACTER SET utf8");
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue($key, $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }
    
    public function affectedRows($sql, $array = array()){
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue($key, $value);
        }
        $sth->execute();
        return $sth->rowCount();
    }
    
    public function insert($tableName, $data){
        $fieldKeys = implode(",", array_keys($data));
        $fieldValues = ":" . implode(", :", array_keys($data));

        $sql = "INSERT INTO $tableName($fieldKeys) VALUES($fieldValues)";
        $sth = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        return $sth->execute();
        
    }
        
    public function update($tableName, $data, $where){
        $updateKeys = null;
        foreach ($data as $key => $value) {
            $updateKeys .= "$key=:$key,";
        }
        $updateKeys = rtrim($updateKeys, ",");
        $sql = "UPDATE $tableName SET $updateKeys WHERE $where";
        
        $sth = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        return $sth->execute();
    }
    
    
    /**
     * delete
     * 
     * @param string $tableName
     * @param string $where
     * @param integer $limit
     * @return integer Affected Rows
     */
    public function delete($table, $where)
    {
        return $this->exec("DELETE FROM $table WHERE $where");
    }
    
    public function aktif($table, $where)
    {        
        $sql = "UPDATE $table SET goster = :goster WHERE $where";        
        $sth = $this->prepare($sql);
        $sth->bindValue(":goster", 1);
        return $sth->execute();  
    }
    
    public function pasif($table, $where)
    {        
        $sql = "UPDATE $table SET goster = :goster WHERE $where";        
        $sth = $this->prepare($sql);
        $sth->bindValue(":goster", 0);
        return $sth->execute();  
    }
    
    
    
}
