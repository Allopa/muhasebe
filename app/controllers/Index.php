<?php

class Index extends Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function Index(){
        $this->anasayfa();
    }
    
    public function anasayfa(){
        $this->load->view("site/anasayfa");
    }
        
}
