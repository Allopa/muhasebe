<?php
class Satislar extends Controller{
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
        
        $model = $this->load->model("Satis_Model");
        $data["satisList"] = $model->liste();
        
        $model2 = $this->load->model("Musteri_Model");
        $data["cari"] = $model2->liste();
        
        $model3 = $this->load->model("Urun_Model");
        $data["urun"] = $model3->liste();
        
        $model4 = $this->load->model("Odeme_Model");
        $data["odemetoplam"] = $model4->toplamList();
                
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/satislar/liste", $data);
        $this->load->view("panel/footer");
    }
    
    
    public function yeniFatura() {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $model = $this->load->model("Musteri_Model");
        $data["cari"] = $model->liste();
                
        $model3 = $this->load->model("Urun_Model");
        $data["urun"] = $model3->liste();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/satislar/yenifatura", $data);
        $this->load->view("panel/footer");
    }
    
    public function ekleRun(){ 
        $form = $this->load->otherClasses('Form');        
        $form   ->post('cari_id')
                ->isEmpty();        
        $form   ->post('adi')
                ->isEmpty();
        $form   ->post('urun_id')
                ->isEmpty();
        $form   ->post('adet')
                ->isEmpty();
        $form   ->post('birim_fiyat')
                ->isEmpty();
        
        if($form->submit()){                  
            $model = $this->load->model("Satis_Model");
            
            $data = array();
            $data['cari_id'] = $form->values['cari_id'];
            $data['adi'] = $form->values['adi'];
            $data['en'] = $form->values['en'];
            $data['boy'] = $form->values['boy'];
            $data['m2'] = $form->values['m2'];
            $data['urun_id'] = $form->values['urun_id'];
            $data['adet'] = $form->values['adet'];
            $data['birim_fiyat'] = $form->values['birim_fiyat'];
            $data['tarih'] = date("d-m-y H:i:s"); 
            $data['borc'] = $data['adet'] * $data['birim_fiyat']; 
            
            $result = $model->satisEkleRun($data);          
            
            if($result == true){
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi başarıyla Gerçekleşti. ",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/satislar/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/satislar/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/satislar/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("satislar/liste", $data);
    }
    
    public function duzenle($id){
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $model = $this->load->model("Satis_Model");
        $data["satislar"] = $model->satisListSingle($id);
        
        $model2 = $this->load->model("Cari_Model");
        $data["cari"] = $model2->cariList();
        
        $model3 = $this->load->model("Urun_Model");
        $data["urun"] = $model3->urunList();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/satislar/duzenle",$data);
        $this->load->view("panel/footer");
    }
    
    //Makale Düzenle Run
    public function duzenleRun($id) {
        $model = $this->load->model("Satis_Model");
        $form = $this->load->otherClasses('Form');        
        $form   ->post('cari_id')
                ->isEmpty();        
        $form   ->post('adi')
                ->isEmpty();
        $form   ->post('en');        
        $form   ->post('boy');
        $form   ->post('m2');
        $form   ->post('urun_id');
        $form   ->post('adet')
                ->isEmpty();
        $form   ->post('birim_fiyat')
                ->isEmpty();
        
        if($form->submit()){
            $data = array();
            $data['satisid'] = $id;
            $data['cari_id'] = $model->yazi($form->values['cari_id']);
            $data['adi'] = $model->yazi($form->values['adi']);
            $data['en'] = $model->yazi($form->values['en']);
            $data['boy'] = $model->yazi($form->values['boy']);
            $data['m2'] = $model->yazi($form->values['m2']);
            $data['urun_id'] = $model->yazi($form->values['urun_id']);
            $data['adet'] = $model->yazi($form->values['adet']); 
            $data['birim_fiyat'] = $model->yazi($form->values['birim_fiyat']); 
            $data['borc'] = $data['adet'] * $data['birim_fiyat'];       
            
            $result = $model->satisDuzenleRun($data);
            if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi başarıyla Gerçekleşti.",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/satislar/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/satislar/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/satislar/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("satislar/liste", $data);
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
        $model2 = $this->load->model("Satis_Model");
        $data["satisDetay"] = $model2->detay($id);
        $this->load->fatura = $model2->listSingle($id);
        
        $model3 = $this->load->model("Urun_Model");
        $data["urun"] = $model3->liste();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/satislar/detay",$data);
        $this->load->view("panel/footer");
    }
    
    public function sil($id)
    {
        $model = $this->load->model("satis_Model");
        $result = $model->satisSil($id);

        if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "Silme İşlemi başarıyla Gerçekleşti.",
                );
                $this->load->view("panel/header");
                $this->load->view("panel/satislar/liste",$data);
                $this->load->view("panel/footer");
                
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Silme İşlemi Yapılırken Sorun Oluştu.",
                );
                $this->load->view("panel/header");
                $this->load->view("panel/satislar/liste",$data);
                $this->load->view("panel/footer");
                            
        }
         
    }
    
}
