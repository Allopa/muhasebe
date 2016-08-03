<?php
class Satis_Model extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function liste() {
        $sql = "SELECT * FROM tlg_satis order by id ASC";
        return $this->db->select($sql);
        
    }    
    
    public function listSingle($id)
    {
        $sql = 'SELECT * FROM tlg_satis WHERE id = :id';
        return $this->db->select($sql, array(':id' => $id));
    } 
     
    public function detay($id)
    {
        $sql = 'SELECT * FROM tlg_satis INNER JOIN tlg_cari ON tlg_satis.cari_id = tlg_cari.id WHERE tlg_satis.cari_id = :cari_id';
        return $this->db->select($sql, array(':cari_id' => $id));
    }
    
    public function ekleRun($data){
        $postData = array(
                'cari_id' => $data['cari_id'],
                'adi' => $data['adi'],
                'en' => $data['en'],
                'boy' => $data['boy'],
                'm2' => $data['m2'],
                'urun_id' => $data['urun_id'],
                'adet' => $data['adet'],
                'birim_fiyat' => $data['birim_fiyat'],
                'tarih' => $data['tarih'],
                'borc' => $data['borc'],
                
            );
       return  $this->db->insert("tlg_satis", $postData);
    }
    
     public function duzenleRun($data)
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
        
        $this->db->update('tlg_satis', $postData, "`id` = '{$data['satisid']}'");
    }
    
    public function yazi($s) {
            $tr = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü');
            $kod = array('&Ccedil;', '&ccedil;', '&#286;', '&#287;', '&#305;', '&#304;', '&Ouml;', '&ouml;', '&#350;', '&#351;', '&Uuml;', '&uuml;');
            $s = str_replace($tr, $kod, $s);
        return $s;
    }
    
     public function borcToplam()
    {
        $sql = "SELECT sum(borc) as tborc, cari_id, id FROM tlg_satis GROUP BY cari_id ";
        return $this->db->select($sql);
    }
    
    public function sil($id)
    {        
        $this->db->delete('tlg_satis', "id = '$id'");
    }
    
}
