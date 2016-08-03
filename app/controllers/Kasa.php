<?php
class Kasa extends Controller{
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
        
        $model = $this->load->model("Kasa_Model");
        $data["kasaList"] = $model->liste();
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/kasa/liste", $data);
        $this->load->view("panel/footer");
    }
    
    
    public function kasaEkle() {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
                
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/kasa/kasaekle");
        $this->load->view("panel/footer");
    }
    
    public function kasaEkleRun(){ 
        $form = $this->load->otherClasses('Form');        
        $form   ->post('hesapismi');
        $form   ->post('dovizcinsi');
        $form   ->post('acilisbakiyesi');
        $form   ->post('abtarihi');
        
        if($form->submit()){                  
            $model = $this->load->model("Kasa_Model");
                        
            $data= array(
                "kasa_id" => 1, 
                "hesapismi" => $form->values['hesapismi'], 
                "dovizcinsi" => $form->values['dovizcinsi'],
                "acilisbakiyesi" => $form->values['acilisbakiyesi'],
                "abtarihi" => $form->values['abtarihi']              
                
            );
            $result = $model->kasaEkleRun($data);          
            
            if($result == true){
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi başarıyla Gerçekleşti. ",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/kasa/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/kasa/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/kasa/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/kasa/liste", $data);
    }
    
    public function kasaDuzenle($id){
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $model = $this->load->model("Kasa_Model");
        $data["kasa"] = $model->listSingle($id);
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/kasa/kasaduzenle",$data);
        $this->load->view("panel/footer");
    }
    
    //Makale Düzenle Run
    public function kasaDuzenleRun($id) {
        $model = $this->load->model("Kasa_Model");
        $form = $this->load->otherClasses('Form');        
        $form   ->post('hesapismi');
        
        if($form->submit()){
            $data = array();
            $data['kasaid'] = $id;
            $data['hesapismi'] = $model->yazi($form->values['hesapismi']);             
            
            $result = $model->kasaDuzenleRun($data);
            if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi başarıyla Gerçekleşti.",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/kasa/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/kasa/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/kasa/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/kasa/liste", $data);
    }
    
    public function bankaEkle() {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
                
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/kasa/bankaekle");
        $this->load->view("panel/footer");
    }
    
    public function bankaEkleRun(){ 
        $form = $this->load->otherClasses('Form');        
        $form   ->post('hesapismi');
        $form   ->post('dovizcinsi');
        $form   ->post('acilisbakiyesi');
        $form   ->post('abtarihi');
        $form   ->post('bankaismi');
        $form   ->post('bankasubesi');
        $form   ->post('hesapnumarasi');
        $form   ->post('iban');
        
        if($form->submit()){                  
            $model = $this->load->model("Kasa_Model");
            
           $data= array(
                "kasa_id" => 2, 
                "hesapismi" => $form->values['hesapismi'], 
                "dovizcinsi" => $form->values['dovizcinsi'],
                "acilisbakiyesi" => $form->values['acilisbakiyesi'],
                "abtarihi" => $form->values['abtarihi'],
                "bankaismi" => $form->values['bankaismi'],
                "bankasubesi" => $form->values['bankasubesi'],                
                "hesapnumarasi" => $form->values['hesapnumarasi'],
                "iban" => $form->values['iban']
                            
                
            );
                       
            $result = $model->bankaEkleRun($data);          
            
            if($result == true){
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi başarıyla Gerçekleşti. ",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/kasa/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Kayıt İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/kasa/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/kasa/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/kasa/liste", $data);
    }
    
    public function bankaDuzenle($id){
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $model = $this->load->model("Kasa_Model");
        $data["banka"] = $model->listSingle($id);
        
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/kasa/bankaduzenle",$data);
        $this->load->view("panel/footer");
    }
    
    //Makale Düzenle Run
    public function bankaDuzenleRun($id) {
        $model = $this->load->model("Kasa_Model");
        $form = $this->load->otherClasses('Form');        
        $form   ->post('hesapismi');
        $form   ->post('dovizcinsi');
        $form   ->post('acilisbakiyesi');
        $form   ->post('abtarihi');
        $form   ->post('bankaismi');
        $form   ->post('bankasubesi');
        $form   ->post('hesapnumarasi');
        $form   ->post('iban');
        
        if($form->submit()){
            $data = array();
            $data['bankaid'] = $id;
            $data['hesapismi'] = $model->yazi($form->values['hesapismi']);      
            
            $result = $model->bankaDuzenleRun($data);
            if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi başarıyla Gerçekleşti.",
                );   
                $this->load->view("panel/header");
                $this->load->view("panel/kasa/liste",$data);
                $this->load->view("panel/footer");
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "güncelleme İşlemi Yapılırken Sorun Oluştu.",
                ); 
                $this->load->view("panel/header");
                $this->load->view("panel/kasa/liste",$data);
                $this->load->view("panel/footer");
                           
            }
            
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/kasa/liste",$data);
            $this->load->view("panel/footer");
        }
        $this->load->view("panel/kasa/liste", $data);
    }
    
    public function detay($id) {
        $data2["kisi"] = array(
            "username" => Session::get("username"),
            "userId" => Session::get("userId") 
        );
        $girenmodel = $this->load->model("Kullanici_Model");
        $data2["giren"] = $girenmodel->kullaniciList();
        
        $model = $this->load->model("Kasa_Model");
        $this->load->kasa = $model->listSingle($id);
        $data["detay"] = $model->detay($id);
                
        $this->load->view("panel/header",$data2);
        $this->load->view("panel/kasa/detay",$data);
        $this->load->view("panel/footer");
    }
    
    public function sil($id)
    {
        $model = $this->load->model("kasa_Model");
        $result = $model->sil($id);

        if($result == 0){
                $data["mesaj"] = array(
                    "mesaj" => "Silme İşlemi başarıyla Gerçekleşti.",
                );
                $this->load->view("panel/header");
                $this->load->view("panel/kasa/liste",$data);
                $this->load->view("panel/footer");
                
            }else{
                $data["mesaj"] = array(
                    "mesaj" => "Silme İşlemi Yapılırken Sorun Oluştu.",
                );
                $this->load->view("panel/header");
                $this->load->view("panel/kasa/liste",$data);
                $this->load->view("panel/footer");
                            
        }
         
    }
    
}
