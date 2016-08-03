<?php
class Musteriler extends Controller{
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
        
        $model = $this->load->model("Musteri_Model");
        $data["musteriList"] = $model->liste();
        
        $model2 = $this->load->model("Satis_Model");
        $data["projeList"] = $model2->liste();
        $data["borctoplam"] = $model2->borcToplam();
        
        $model4 = $this->load->model("Odeme_Model");
        $data["odemetoplam"] = $model4->toplamCari();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/musteriler/liste", $data);
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
        $this->load->view("panel/musteriler/ekle");
        $this->load->view("panel/footer");
    }
    
    public function ekleRun(){ 
        $form = $this->load->otherClasses('Form');        
        $form   ->post('firmaunvani');        
        $form   ->post('kisaismi');
        $form   ->post('kategori');        
        $form   ->post('email');
        $form   ->post('telefon');
        $form   ->post('fax');
        $form   ->post('acikadres');
        $form   ->post('il');
        $form   ->post('turu');
        $form   ->post('vergino');
        $form   ->post('vergidairesi');
        $form   ->post('yetkiliadi');
        $form   ->post('yetkiliemail');
        $form   ->post('yetkilitelefon');
        $form   ->post('yetkilinot');
        $form   ->post('tckimlik');
        
        if($form->submit()){                  
            $model = $this->load->model("Musteri_Model");
            
            $data= array(
                "firmaunvani" => $form->values['firmaunvani'],
                "kisaismi" => $form->values['kisaismi'],
                "kategori" => $form->values['kategori'],
                "email" => $form->values['email'],
                "telefon" => $form->values['telefon'],
                "fax" => $form->values['fax'],
                "acikadres" => $form->values['acikadres'],
                "il" => $form->values['il'],
                "turu" => $form->values['turu'],
                "vergino" => $form->values['vergino'],
                "vergidairesi" => $form->values['vergidairesi'],
                "yetkiliadi" => $form->values['yetkiliadi'],
                "yetkiliemail" => $form->values['yetkiliemail'],
                "yetkilitelefon" => $form->values['yetkilitelefon'],
                "yetkilinot" => $form->values['yetkilinot'],
                "tckimlik" => $form->values['tckimlik'],
                "tarih" => date("d-m-y H:i:s")              
                
            );
            $result = $model->ekleRun($data);          
            
            if($result == true){
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi başarıyla Gerçekleşti. ",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/musteriler/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/musteriler/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/musteriler/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/musteriler/liste", $data);
    }
    
   public function duzenle($id){
       $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList(); 
       
        $model = $this->load->model("Musteri_Model");
        $data["musteriler"] = $model->listSingle($id);
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/musteriler/duzenle",$data);
        $this->load->view("panel/footer");
    }
    
    //Makale Düzenle Run
    public function duzenleRun($id) {
        $model = $this->load->model("Musteri_Model");
        $form = $this->load->otherClasses('Form');        
        $form   ->post('firmaunvani');        
        $form   ->post('kisaismi');
        $form   ->post('kategori');        
        $form   ->post('email');
        $form   ->post('telefon');
        $form   ->post('fax');
        $form   ->post('acikadres');
        $form   ->post('il');
        $form   ->post('turu');
        $form   ->post('vergino');
        $form   ->post('vergidairesi');
        $form   ->post('yetkiliadi');
        $form   ->post('yetkiliemail');
        $form   ->post('yetkilitelefon');
        $form   ->post('yetkilinot');
        $form   ->post('tckimlik');
        
        if($form->submit()){
            $data = array();
            $data['musteriid'] = $id;
            $data['firmaunvani'] = $form->values['firmaunvani'];
            $data['kisaismi'] = $form->values['kisaismi'];
            $data['kategori'] = $form->values['kategori'];
            $data['email'] = $form->values['email'];
            $data['telefon'] = $form->values['telefon'];
            $data['fax'] = $form->values['fax'];
            $data['acikadres'] = $form->values['acikadres']; 
            $data['il'] = $form->values['il']; 
            $data['turu'] = $form->values['turu']; 
            $data['vergino'] = $form->values['vergino']; 
            $data['vergidairesi'] = $form->values['vergidairesi']; 
            $data['yetkiliadi'] = $form->values['yetkiliadi']; 
            $data['yetkiliemail'] = $form->values['yetkiliemail']; 
            $data['yetkilitelefon'] = $form->values['yetkilitelefon']; 
            $data['yetkilinot'] = $form->values['yetkilinot']; 
            $data['tckimlik'] = $form->values['tckimlik']; 
                        
            
            $result = $model->duzenleRun($data);
            if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi başarıyla Gerçekleşti.",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/musteriler/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/musteriler/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/musteriler/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/musteriler/liste", $data);
    }
    
    public function detay($id) {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $model = $this->load->model("Musteri_Model");
        $this->load->cari = $model->listSingle($id);
        $data["musteriDetay"] = $model->detay($id);
        
        $model3 = $this->load->model("Urun_Model");
        $data["urun"] = $model3->liste();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/musteriler/detay",$data);
        $this->load->view("panel/footer");
    }
    
    public function sil($id)
    {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $model = $this->load->model("Musteri_Model");
        $result = $model->sil($id);

        if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "Silme İşlemi başarıyla Gerçekleşti.",
                );
                $this->load->view("panel/header",$data2);
                $this->load->view("panel/musteriler/liste",$data);
                $this->load->view("panel/footer");
                
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Silme İşlemi Yapılırken Sorun Oluştu.",
                );
                $this->load->view("panel/header");
                $this->load->view("panel/musteriler/liste",$data);
                $this->load->view("panel/footer");
                            
        }
         
    }
    
}
