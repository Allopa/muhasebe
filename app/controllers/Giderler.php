<?php
class Giderler extends Controller{
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
        
        $model = $this->load->model("Gider_Model");
        $data["giderList"] = $model->liste();
        
        $model2 = $this->load->model("Musteri_Model");
        $data["cari"] = $model2->liste();
        
        $model3 = $this->load->model("Urun_Model");
        $data["urun"] = $model3->liste();
        
        $model4 = $this->load->model("Odeme_Model");
        $data["odemetoplam"] = $model4->toplamList();
       
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/giderler/liste", $data);
        $this->load->view("panel/footer");
    }    
    
    public function hizlifisfatura() {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
                
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/giderler/hizli",$data);
        $this->load->view("panel/footer");
    }
    
    public function detaylifisfatura() {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/giderler/detayli");
        $this->load->view("panel/footer");
    }
        
    public function yeniMaas() {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/giderler/yenimaas");
        $this->load->view("panel/footer");
    }
    
    public function yeniSgk() {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $ay = $this->load->model("Gider_Model");
        $data["ayListe"] = $ay->ayListe();
        $data["yilListe"] = $ay->yilListe();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/giderler/yenisgk",$data);
        $this->load->view("panel/footer");
    }  
    
    public function yeniBanka() {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/giderler/yenibanka");
        $this->load->view("panel/footer");
    }    
             
    public function hizlifisfaturaRun(){ 
        $form = $this->load->otherClasses('Form');        
        $form   ->post('aciklama');        
        $form   ->post('tarih');
        $form   ->post('toplamtutar');        
        $form   ->post('kdv');
        $form   ->post('odemedurumu');
        $form   ->post('odemetarihi');
        $form   ->post('tedarikci');
        
        if($form->submit()){                  
            $model = $this->load->model("Gider_Model");
            
            $data= array(
                "tipi" => 1,
                "aciklama" => $model->yazi($form->values['aciklama']),
                "tarih" => $form->values['tarih'],
                "toplamtutar" => $form->values['toplamtutar'],
                "kdv" => $form->values['kdv'],
                "odemedurumu" => $form->values['odemedurumu'],
                "odemetarihi" => $form->values['odemetarihi'],
                "tedarikci" => $form->values['tedarikci']
                
                
            );
            $result = $model->hizlifisfaturaRun($data);          
            
            if($result == true){
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi başarıyla Gerçekleşti. ",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/giderler/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/giderler/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/giderler/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/giderler/liste", $data);
    }
    
    public function yenimaasRun(){ 
        $form = $this->load->otherClasses('Form');        
        $form   ->post('aciklama');        
        $form   ->post('calisan');
        $form   ->post('hakedistarihi');        
        $form   ->post('toplamtutar');
        $form   ->post('odemedurumu');
        $form   ->post('odemetarihi');
        
        if($form->submit()){                  
            $model = $this->load->model("Gider_Model");
            
            $data= array(
                "tipi" => 3,
                "aciklama" => $model->yazi($form->values['aciklama']),
                "calisan" => $form->values['calisan'],
                "hakedistarihi" => $form->values['hakedistarihi'],
                "toplamtutar" => $form->values['toplamtutar'],
                "odemedurumu" => $form->values['odemedurumu'],
                "odemetarihi" => $form->values['odemetarihi'],
                "tarih" => date("d-m-y H:i:s")                
                
            );
            $result = $model->yenimaasRun($data);          
            
            if($result == true){
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi başarıyla Gerçekleşti. ",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/giderler/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/giderler/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/giderler/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/giderler/liste", $data);
    }
    
    public function yenisgkRun(){ 
        $form = $this->load->otherClasses('Form');        
        $form   ->post('aciklama');        
        $form   ->post('vergiay');
        $form   ->post('vergiyil');        
        $form   ->post('toplamtutar');
        $form   ->post('odemedurumu');
        $form   ->post('odemetarihi');
        
        if($form->submit()){                  
            $model = $this->load->model("Gider_Model");
            
            $data= array(
                "tipi" => 4,
                "aciklama" => $model->yazi($form->values['aciklama']),
                "vergiay" => $form->values['vergiay'],
                "vergiyil" => $form->values['vergiyil'],
                "toplamtutar" => $form->values['toplamtutar'],
                "odemedurumu" => $form->values['odemedurumu'],
                "odemetarihi" => $form->values['odemetarihi'],
                "tarih" => date("d-m-y H:i:s")                
                
            );
            $result = $model->yenisgkRun($data);          
            
            if($result == true){
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi başarıyla Gerçekleşti. ",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/giderler/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/giderler/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/giderler/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/giderler/liste", $data);
    }
    
    public function yenibankaRun(){ 
        $form = $this->load->otherClasses('Form');        
        $form   ->post('aciklama');        
        $form   ->post('duzenlemetarihi');     
        $form   ->post('toplamtutar');
        $form   ->post('odemedurumu');
        $form   ->post('odemetarihi');
        
        if($form->submit()){                  
            $model = $this->load->model("Gider_Model");
            
            $data= array(
                "tipi" => 5,
                "aciklama" => $model->yazi($form->values['aciklama']),
                "duzenlemetarihi" => $form->values['duzenlemetarihi'],
                "toplamtutar" => $form->values['toplamtutar'],
                "odemedurumu" => $form->values['odemedurumu'],
                "odemetarihi" => $form->values['odemetarihi'],
                "tarih" => date("d-m-y H:i:s")                
                
            );
            $result = $model->yenibankaRun($data);          
            
            if($result == true){
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi başarıyla Gerçekleşti. ",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/giderler/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/giderler/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/giderler/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/giderler/liste", $data);
    }
    
    public function duzenle($id){
       $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList(); 
       
        $model = $this->load->model("Cari_Model");
        $data["giderler"] = $model->cariListSingle($id);
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/giderler/cariDuzenle",$data);
        $this->load->view("panel/footer");
    }
    
    //Makale Düzenle Run
    public function duzenleRun($id) {
        $model = $this->load->model("Cari_Model");
        $form = $this->load->otherClasses('Form');        
        $form   ->post('ad')
                ->isEmpty();        
        $form   ->post('soyad')
                ->isEmpty();
        $form   ->post('sirketadi')
                ->isEmpty();        
        $form   ->post('email')
                ->isEmpty();
        $form   ->post('telefon')
                ->isEmpty();
        $form   ->post('adres');
        $form   ->post('faturaadresi');
        
        if($form->submit()){
            $data = array();
            $data['cariid'] = $id;
            $data['ad'] = $model->yazi($form->values['ad']);
            $data['soyad'] = $model->yazi($form->values['soyad']);
            $data['sirketadi'] = $model->yazi($form->values['sirketadi']);
            $data['email'] = $model->yazi($form->values['email']);
            $data['telefon'] = $model->yazi($form->values['telefon']);
            $data['adres'] = $model->yazi($form->values['adres']);
            $data['faturaadresi'] = $model->yazi($form->values['faturaadresi']); 
                        
            
            $result = $model->cariDuzenleRun($data);
            if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi başarıyla Gerçekleşti.",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/giderler/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/giderler/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/giderler/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("giderler/liste", $data);
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
        $data["cariDetay"] = $model->detay($id);
        
        $model3 = $this->load->model("Urun_Model");
        $data["urun"] = $model3->liste();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/giderler/detay",$data);
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
        
        $model = $this->load->model("cari_Model");
        $result = $model->cariSil($id);

        if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "Silme İşlemi başarıyla Gerçekleşti.",
                );
                $this->load->view("panel/header",$data2);
                $this->load->view("panel/giderler/liste",$data);
                $this->load->view("panel/footer");
                
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Silme İşlemi Yapılırken Sorun Oluştu.",
                );
                $this->load->view("panel/header");
                $this->load->view("panel/giderler/liste",$data);
                $this->load->view("panel/footer");
                            
        }
         
    }
    
}
