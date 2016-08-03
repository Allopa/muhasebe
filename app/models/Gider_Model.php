<?php
class Gider_Model extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function liste() {
        $sql = "SELECT * FROM tlg_gider order by id ASC";
        return $this->db->select($sql);
        
    }  
    
    public function ayListe() {
        $sql = "SELECT * FROM tlg_ay order by id ASC";
        return $this->db->select($sql);
        
    } 
    
    public function yilListe() {
        $sql = "SELECT * FROM tlg_yil order by id DESC";
        return $this->db->select($sql);
        
    } 
    
    public function listSingle($id)
    {
        $sql = 'SELECT * FROM tlg_gider WHERE id = :id';
        return $this->db->select($sql, array(':id' => $id));
    } 
     
    public function detay($id)
    {
        $sql = 'SELECT * FROM tlg_gider INNER JOIN tlg_cari ON tlg_gider.cari_id = tlg_cari.id WHERE tlg_gider.cari_id = :cari_id';
        return $this->db->select($sql, array(':cari_id' => $id));
    }
    
    public function hizlifisfaturaRun($data){
       return  $this->db->insert("tlg_gider", $data);
    }
    
    public function yenimaasRun($data){
       return  $this->db->insert("tlg_gider", $data);
    }
    
    public function yenisgkRun($data){
       return  $this->db->insert("tlg_gider", $data);
    }
    
    public function yenibankaRun($data){
       return  $this->db->insert("tlg_gider", $data);
    }
    
     public function giderDuzenleRun($data)
    {
        $postData = array(
                'cari_id' => $data['cari_id'],
                'adi' => $data['adi'],
                'en' => $data['en'],
                'boy' => $data['boy'],
                'm2' => $data['m2'],
                'urun_id' => $data['urun_id'],
                'adet' => $data['adet'],
                'birim_fiyat' => $data['birim_fiyat'],
                'borc' => $data['borc']
            );
        
        $this->db->update('tlg_gider', $postData, "`id` = '{$data['giderid']}'");
    }
    
    public function yazi($s) {
            $tr = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü');
            $kod = array('&Ccedil;', '&ccedil;', '&#286;', '&#287;', '&#305;', '&#304;', '&Ouml;', '&ouml;', '&#350;', '&#351;', '&Uuml;', '&uuml;');
            $s = str_replace($tr, $kod, $s);
        return $s;
    }
    
     public function borcToplam()
    {
        $sql = "SELECT sum(borc) as tborc, cari_id, id FROM tlg_gider GROUP BY cari_id ";
        return $this->db->select($sql);
    }
    
    public function sil($id)
    {        
        $this->db->delete('tlg_gider', "id = '$id'");
    }
    
}
