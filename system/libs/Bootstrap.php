<?php
/**
 * Bootstrap Class'ı
 * 
 * Bu class url'e göre yönlendirme yapmaktadır.
 */
class Bootstrap{
    /**
     *
     * @var Array URL verilerini tutar.
     */
    public $_url;
    
    /**
     *
     * @var String Çalıştırılacak controller adını tutar.
     */
    public $_controllerName = 'index';
    
    /**
     *
     * @var String Çalıştırılacak method adını tutar.
     */
    public $_methodName = 'index';
    
    /**
     *
     * @var String Controller dosyalarının yolunu tutar.
     */
    public $_controllerPath = 'app/controllers/';
    
    /**
     *
     * @var Object Çalıştırılan controller nesnesini/sınıfını tutar.
     */
    public $_controller;
    
    /**
     *
     * @var Error Dosyası
     */
    private $_errorFile = 'app/error.php';
    
    /**
     *
     * @var standart index Dosyası
     */
    private $_defaultFile = 'index.php';
    
    /**
     * İlk burası çalışır.
     */
    public function __construct() {
        $this->getUrl();
        $this->loadController();        
        $this->callMethod();
    }
    
    /**
     * Url'i alır, dizi haline getirir. $_url özelliğine atar.
     * $_url[0] -> Controller ismi
     * $_url[1] -> Method ismi
     * $_url[2] -> Parametre
     * 
     * Ya da
     * 
     * Url boş ise $_url özelliğini unset() yapar.
     */
    public function getUrl(){
        $this->_url = isset($_GET["url"]) ? $_GET["url"] : null;
        if($this->_url != null){
            $this->_url = rtrim($this->_url, "/");
            $this->_url = explode("/", $this->_url);
        }else{
           unset($this->_url); 
        }
    }
    
    /**
     * Controller dosyasını ve Controller'ı yükler.
     * $_url[0] set edilmişse $_controllerName'e atar ve $_controllerName'i 
     * yükler.
     * $_url[0] set edilmemişse $_controllerName'in default değerini yükler.
     */
    public function loadController(){
        if(!isset($this->_url[0])){
            include  $this->_controllerPath . $this->_controllerName . '.php';
            $this->_controller = new $this->_controllerName();
        }else{
            $this->_controllerName = $this->_url[0];
            $fileName = $this->_controllerPath . $this->_controllerName . ".php";
            if(file_exists($fileName)){
                include $fileName;
                if(class_exists($this->_controllerName)){
                    $this->_controller = new $this->_controllerName();
                }else{}
            }else{}
        }
    }
    
    /**
     * If a method is passed in the GET url paremter
     * 
     *  http://localhost/controller/method/(param)/(param)/(param)
     *  url[0] = Controller
     *  url[1] = Method
     *  url[2] = Param
     *  url[3] = Param
     *  url[4] = Param
     */
    public function callMethod(){
        if(isset($this->_url[2])){
            $this->_methodName = $this->_url[1];
            if(method_exists($this->_controller, $this->_methodName)){
                $this->_controller->{$this->_methodName}($this->_url[2]);
            }else{
                echo "Controller icinde method bulunamadi.";
            }
        }else{
            if(isset($this->_url[1])){
                $this->_methodName = $this->_url[1];
                if(method_exists($this->_controller, $this->_methodName)){
                    $this->_controller->{$this->_methodName}();
                }else{
                    echo "Controller icinde method bulunamadi.";
                }
            }else{
                if(method_exists($this->_controller, $this->_methodName)){
                    $this->_controller->{$this->_methodName}();
                }else{
                    echo "Controller icinde index methodu bulunamadi.";
                }
            }
        }
    }
    
    /**
     * Display an error page if nothing exists
     * 
     * @return boolean
     */
    private function _error() {
        require $this->_controllerPath . $this->_errorFile;
        $this->_controller = new Error();
        $this->_controller->index();
        exit;
    }
}
