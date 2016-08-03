<?php
class Panel extends Controller{
    public function __construct() {
        parent::__construct();        
        // Oturum Kontrolü
        Session::checkSession();
        
        
    }
    // Anasayfa
    public function index(){
        $this->anasayfa();
        
    }
    
    public function anasayfa(){       
        $data["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $model = $this->load->model("Kullanici_Model");
        $data2["giren"] = $model->kullaniciList();
        
        $model4 = $this->load->model("Gider_Model");
        
        $this->load->cari = $model4->listSingle($id);
        
        $this->load->view("panel/header", $data2);
        $this->load->view("panel/anasayfa",$data);
        $this->load->view("panel/footer");
    }
    
}
