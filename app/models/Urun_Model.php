<?php
class Urun_Model extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function liste() {
        $sql = "SELECT * FROM tlg_urun order by id ASC";
        return $this->db->select($sql);
        
    }    
    
    public function listSingle($id)
    {
        $sql = 'SELECT * FROM tlg_urun WHERE id = :id';
        return $this->db->select($sql, array(':id' => $id));
    }    
    
    public function ekleRun($data){
       return  $this->db->insert("tlg_urun", $data);
    }
    
     public function yazi($s) {
            $tr = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü');
            $kod = array('&Ccedil;', '&ccedil;', '&#286;', '&#287;', '&#305;', '&#304;', '&Ouml;', '&ouml;', '&#350;', '&#351;', '&Uuml;', '&uuml;');
            $s = str_replace($tr, $kod, $s);
        return $s;
    }
    
    public function duzenleRun($data)
    {
        $postData = array(
                'adi' => $data['adi'],
                'kodu' => $data['kodu'], 
                'kategori' => $data['kategori'],
                'asbirimi' => $data['asbirimi'], 
                'alisfiyati' => $data['alisfiyati'], 
                'satisfiyati' => $data['satisfiyati'], 
                'kdv' => $data['kdv'], 
                'oiv' => $data['oiv'], 
                'alisotv' => $data['alisotv'],
                'satisotv' => $data['satisotv']
            );
        
        $this->db->update('tlg_urun', $postData, "`id` = '{$data['urunid']}'");
    }
    
    public function sil($id)
    {        
        $this->db->delete('tlg_urun', "id = '$id'");
    }
    
}
