<?php
class Kullanicilar extends Controller{
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
        $model = $this->load->model("Kullanici_Model");
        
        $data2["giren"] = $model->kullaniciList();
        $data["kullaniciList"] = $model->kullaniciList();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/kullanicilar/liste", $data);
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
        $this->load->view("panel/kullanicilar/ekle");
        $this->load->view("panel/footer");
    }
    
    public function ekleRun(){ 
        $form = $this->load->otherClasses('Form');        
        $form   ->post('k_adi')
                ->isEmpty();        
        $form   ->post('adi')
                ->isEmpty();
        $form   ->post('parola')
                ->isEmpty();        
        $form   ->post('parolatekrar')
                ->isEmpty();
        $form   ->post('eposta')
                ->isEmpty();
        $form   ->post('yetki')
                ->isEmpty();
        
        if($form->submit()){                  
            $model = $this->load->model("Kullanici_Model");
            
            $data = array();
            $data2 = array();
            $data['k_adi'] = $model->yazi($form->values['k_adi']);
            $data['adi'] = $model->yazi($form->values['adi']);
            $data2['parola'] = $model->yazi(md5($form->values['parola']));
            $data2['parolatekrar'] = $model->yazi(md5($form->values['parolatekrar']));
            $data['eposta'] = $model->yazi($form->values['eposta']);
            $data['yetki'] = $model->yazi($form->values['yetki']); 
            $data['tarih'] = date("d-m-y H:i:s");
            $data['presmi'] = "yok";
            
            if($data2["parola"]==$data2["parolatekrar"]){
                $data['parola'] = $model->yazi(md5($form->values['parola']));
            }else{
                return false;
            }
            
            $result = $model->ekleRun($data);          
            
            if($result == true){
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi başarıyla Gerçekleşti. ",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/kullanicilar/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/kullanicilar/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/kullanicilar/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/kullanicilar/liste", $data);
    }
    
   public function duzenle($id){
       $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $model = $this->load->model("Kullanici_Model");
        
        $data2["giren"] = $model->kullaniciList();
       
        $data["kullanicilar"] = $model->kullaniciListSingle($id);
        $data["yetki"] = $model->yetkiList();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/kullanicilar/duzenle",$data);
        $this->load->view("panel/footer");
    }
    
    //Makale Düzenle Run
    public function duzenleRun($id) {
        $model = $this->load->model("Kullanici_Model");
        $form = $this->load->otherClasses('Form');        
        $form   ->post('k_adi')
                ->isEmpty();        
        $form   ->post('adi')
                ->isEmpty();
        $form   ->post('parola')
                ->isEmpty(); 
        $form   ->post('parolatekrar')
                ->isEmpty(); 
        $form   ->post('eposta')
                ->isEmpty();
        $form   ->post('yetki');
        
        if($form->submit()){
            $data = array();
            $data['kullaniciid'] = $id;
            $data['k_adi'] = $model->yazi($form->values['k_adi']);
            $data['adi'] = $model->yazi($form->values['adi']);
            $data2['parola'] = $model->yazi($form->values['parola']);
            $data2['parolatekrar'] = $model->yazi($form->values['parolatekrar']);
            $data['eposta'] = $model->yazi($form->values['eposta']);
            $data['yetki'] = $model->yazi($form->values['yetki']);                        
            
            if($data2["parola"]==$data2["parolatekrar"]){
                $data['parola'] = $model->yazi(md5($form->values['parola']));
            }else{
                return false;
            }
            
            $result = $model->duzenleRun($data);
            if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi başarıyla Gerçekleşti.",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/kullanicilar/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/kullanicilar/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/kullanicilar/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/kullanicilar/liste", $data);
    }
        
    public function sil($id)
    {
        $model = $this->load->model("kullanici_Model");
        $result = $model->sil($id);

        if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "Silme İşlemi başarıyla Gerçekleşti.",
                );
                $this->load->view("panel/header");
                $this->load->view("panel/kullanicilar/liste",$data);
                $this->load->view("panel/footer");
                
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Silme İşlemi Yapılırken Sorun Oluştu.",
                );
                $this->load->view("panel/header");
                $this->load->view("panel/kullanicilar/liste",$data);
                $this->load->view("panel/footer");
                            
                }
         
    }
    
}
