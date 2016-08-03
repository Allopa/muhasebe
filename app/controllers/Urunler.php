<?php
class Urunler extends Controller{
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
        
        $model = $this->load->model("Urun_Model");
        $data["urunList"] = $model->liste();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/urunler/liste", $data);
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
        $this->load->view("panel/urunler/ekle");
        $this->load->view("panel/footer");
    }
    
    public function ekleRun(){ 
        $form = $this->load->otherClasses('Form');        
        $form   ->post('adi');  
        $form   ->post('kodu');  
        $form   ->post('kategori');  
        $form   ->post('asbirimi');  
        $form   ->post('alisfiyati');  
        $form   ->post('satisfiyati');  
        $form   ->post('kdv');  
        $form   ->post('oiv');           
        $form   ->post('alisotv'); 
        $form   ->post('satisotv'); 
        
        
        if($form->submit()){                  
            $model = $this->load->model("Urun_Model");
            
            $data= array(
                "adi" => $model->yazi($form->values['adi']),
                "kodu" => $model->yazi($form->values['kodu']),
                "kategori" => $model->yazi($form->values['kategori']),
                "asbirimi" => $model->yazi($form->values['asbirimi']),
                "alisfiyati" => $model->yazi($form->values['alisfiyati']),
                "satisfiyati" => $model->yazi($form->values['satisfiyati']),
                "kdv" => $model->yazi($form->values['kdv']),
                "oiv" => $model->yazi($form->values['oiv']),
                "alisotv" => $model->yazi($form->values['alisotv']),
                "satisotv" => $model->yazi($form->values['satisotv']),
                "tarih" => date("d-m-y H:i:s")
                
                
            );
            $result = $model->ekleRun($data);          
            
            if($result == true){
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi başarıyla Gerçekleşti. ",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/urunler/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/urunler/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/urunler/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/urunler/liste", $data);
    }
    
    
    public function duzenle($id){
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $model = $this->load->model("Urun_Model");
        $data["urunler"] = $model->listSingle($id);
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/urunler/duzenle",$data);
        $this->load->view("panel/footer");
    }
    
    //Makale Düzenle Run
    public function duzenleRun($id) {
        $model = $this->load->model("Urun_Model");
        $form = $this->load->otherClasses('Form');        
        $form   ->post('adi');  
        $form   ->post('kodu');  
        $form   ->post('kategori');  
        $form   ->post('asbirimi');  
        $form   ->post('alisfiyati');  
        $form   ->post('satisfiyati');  
        $form   ->post('kdv');  
        $form   ->post('oiv');           
        $form   ->post('alisotv'); 
        $form   ->post('satisotv');        
        
        if($form->submit()){
            $data = array();
            $data['urunid'] = $id;
            $data['adi'] = $model->yazi($form->values['adi']);
            $data['kodu'] = $model->yazi($form->values['kodu']);
            $data['kategori'] = $model->yazi($form->values['kategori']);
            $data['asbirimi'] = $model->yazi($form->values['asbirimi']);
            $data['alisfiyati'] = $model->yazi($form->values['alisfiyati']);
            $data['satisfiyati'] = $model->yazi($form->values['satisfiyati']);
            $data['kdv'] = $model->yazi($form->values['kdv']);
            $data['oiv'] = $model->yazi($form->values['oiv']);
            $data['alisotv'] = $model->yazi($form->values['alisotv']);
            $data['satisotv'] = $model->yazi($form->values['satisotv']);           
                        
            $result = $model->duzenleRun($data);
            if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi başarıyla Gerçekleşti.",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/urunler/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/urunler/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/urunler/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/urunler/liste", $data);
    }
    
    public function detay($id) {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
                
        $model3 = $this->load->model("Urun_Model");
        $this->load->urun = $model3->listSingle($id);
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/urunler/detay",$data);
        $this->load->view("panel/footer");
    }
    
    public function sil($id)
    {
        $model = $this->load->model("urun_Model");
        $result = $model->sil($id);

        if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "Silme İşlemi başarıyla Gerçekleşti.",
                );
                $this->load->view("panel/header");
                $this->load->view("panel/urunler/liste",$data);
                $this->load->view("panel/footer");
                
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Silme İşlemi Yapılırken Sorun Oluştu.",
                );
                $this->load->view("panel/header");
                $this->load->view("panel/urunler/liste",$data);
                $this->load->view("panel/footer");
                            
        }
         
    }
    
}
