<?php
class Calisanlar extends Controller{
    public function __construct() {
        parent::__construct();        
        // Oturum Kontrolü
        Session::checkSession();
    }
    public function liste() {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $model = $this->load->model("Calisan_Model");
        $data["calisanList"] = $model->liste();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/calisanlar/liste", $data);
        $this->load->view("panel/footer");
    }
    
    
    public function ekle() {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/calisanlar/ekle");
        $this->load->view("panel/footer");
    }
    
    public function ekleRun(){ 
        $form = $this->load->otherClasses('Form');        
        $form   ->post('adi');          
        $form   ->post('email');     
        $form   ->post('kategori');
        
        if($form->submit()){                  
            $model = $this->load->model("Calisan_Model");
            
            $data= array(
                "adi" => $form->values['adi'],                
                "email" => $form->values['email'],
                "kategori" => $form->values['kategori'],
                "giris_tarihi" => date("d-m-y H:i:s")               
                
            );
            $result = $model->ekleRun($data);          
            
            if($result == true){
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi başarıyla Gerçekleşti. ",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/calisanlar/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/calisanlar/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/calisanlar/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/calisanlar/liste", $data);
    }
    
   public function duzenle($id){
       $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList(); 
       
        $model = $this->load->model("Calisan_Model");
        $data["calisanlar"] = $model->listSingle($id);
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/calisanlar/duzenle",$data);
        $this->load->view("panel/footer");
    }
    
    //Makale Düzenle Run
    public function duzenleRun($id) {
        $model = $this->load->model("Calisan_Model");
        $form = $this->load->otherClasses('Form');        
        $form   ->post('adi')
                ->isEmpty();         
        $form   ->post('email')
                ->isEmpty();
        $form   ->post('kategori')
                ->isEmpty();
        
        if($form->submit()){
            $data = array();
            $data['calisanid'] = $id;
            $data['adi'] = $model->yazi($form->values['adi']);
            $data['email'] = $model->yazi($form->values['email']);
            $data['kategori'] = $model->yazi($form->values['kategori']);                        
            
            $result = $model->duzenleRun($data);
            if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi başarıyla Gerçekleşti.",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/calisanlar/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/calisanlar/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/calisanlar/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/calisanlar/liste", $data);
    }
    
    public function detay($id) {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $model = $this->load->model("Calisan_Model");
        $this->load->calisan = $model->listSingle($id);
        $data["detay"] = $model->detay($id);
                
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/calisanlar/detay",$data);
        $this->load->view("panel/footer");
    }
    
    public function sil($id)
    {
        $model = $this->load->model("Calisan_Model");
        $result = $model->sil($id);

        if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "Silme İşlemi başarıyla Gerçekleşti.",
                );
                $this->load->view("panel/header");
                $this->load->view("panel/calisanlar/liste",$data);
                $this->load->view("panel/footer");
                
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Silme İşlemi Yapılırken Sorun Oluştu.",
                );
                $this->load->view("panel/header");
                $this->load->view("panel/calisanlar/liste",$data);
                $this->load->view("panel/footer");
                            
        }
         
    }
    
}
