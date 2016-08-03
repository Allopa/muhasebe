<?php

class Model{
    
    protected $db = array();
    
    public function __construct() {
        $dsn = 'mysql:dbname=muhasebe;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        
        $this->db = new Database($dsn, $user, $password);
    }
}
