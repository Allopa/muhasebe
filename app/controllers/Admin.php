<?php

class Admin extends Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->giris();
    }
    
    public function giris(){
        // Oturum Kontrolü
        Session::init();
        if(Session::get("giris") == true){
            header("Location: ". SITE_URL ."panel/anasayfa");
        }
        $this->load->view("admin/giris");
    }
    
    public function runLogin(){
        $data = array(
            ":k_adi" => $_POST["username"],
            ":parola" => md5($_POST["password"]),
        );
        // Veri tabanı işlemleri
        $admin_model = $this->load->model("admin_model");
        $result = $admin_model->userControl($data);
        if($result == false){
            // Yanlış bilgiler girildi.
            header("Location:". SITE_URL ."admin/giris");
        }else{
            Session::init();
            Session::set("giris", true);
            Session::set("username", $result[0]["k_adi"]);
            Session::set("userId", $result[0]["id"]);
        
            header("Location:". SITE_URL ."panel/anasayfa");
        }
    }
       
    public function cikis(){
        Session::init();
        Session::destroy();
        header("Location:". SITE_URL ."admin/giris");
    }
}
