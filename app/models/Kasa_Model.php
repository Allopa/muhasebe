<?php
class Kasa_Model extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function liste() {
        $sql = "SELECT * FROM tlg_kasa order by id ASC";
        return $this->db->select($sql);
        
    }    
    
    public function listSingle($id)
    {
        $sql = 'SELECT * FROM tlg_kasa WHERE id = :id';
        return $this->db->select($sql, array(':id' => $id));
    } 
        
    public function kasaEkleRun($data){        
       return  $this->db->insert("tlg_kasa", $data);
    }
    
    public function bankaEkleRun($data){        
       return  $this->db->insert("tlg_kasa", $data);
    }
    
     public function kasaDuzenleRun($data)
    {
        $postData = array(
                'hesapismi' => $data['hesapismi']
            );
        
        $this->db->update('tlg_kasa', $postData, "`id` = '{$data['kasaid']}'");
    }
    
     public function bankaDuzenleRun($data)
    {
        $postData = array(
                'hesapismi' => $data['hesapismi']
            );
        
        $this->db->update('tlg_kasa', $postData, "`id` = '{$data['bankaid']}'");
    }
    
    public function yazi($s) {
            $tr = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü');
            $kod = array('&Ccedil;', '&ccedil;', '&#286;', '&#287;', '&#305;', '&#304;', '&Ouml;', '&ouml;', '&#350;', '&#351;', '&Uuml;', '&uuml;');
            $s = str_replace($tr, $kod, $s);
        return $s;
    }
    
    public function detay($id)
    {
        $sql = 'SELECT * FROM tlg_kasa WHERE id = :id';
        return $this->db->select($sql, array(':id' => $id));
    }
    
    public function sil($id)
    {        
        $this->db->delete('tlg_kasa', "id = '$id'");
    }
    
}
