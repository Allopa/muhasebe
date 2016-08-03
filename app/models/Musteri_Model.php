<?php
class Musteri_Model extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function liste() {
        $sql = "SELECT * FROM tlg_cari order by id ASC";
        return $this->db->select($sql);
        
    }    
    
    public function listSingle($id)
    {
        $sql = 'SELECT * FROM tlg_cari WHERE id = :id';
        return $this->db->select($sql, array(':id' => $id));
    }
    
    public function detay($id)
    {
        $sql = 'SELECT * FROM tlg_proje INNER JOIN tlg_cari ON tlg_proje.cari_id = tlg_cari.id WHERE tlg_proje.cari_id = :cari_id';
        return $this->db->select($sql, array(':cari_id' => $id));
    }
    
    public function ekleRun($data){
       return  $this->db->insert("tlg_cari", $data);
    }
    
    public function duzenleRun($data)
    {
        $postData = array(
            'firmaunvani' => $data['firmaunvani'],
            'kisaismi' => $data['kisaismi'],
            'kategori' => $data['kategori'],
            'email' => $data['email'],
            'telefon' => $data['telefon'],
            'fax' => $data['fax'],
            'acikadres' => $data['acikadres'],
            'il' => $data['il'],
            'turu' => $data['turu'],
            'vergino' => $data['vergino'],
            'vergidairesi' => $data['vergidairesi'],
            'yetkiliadi' => $data['yetkiliadi'],
            'yetkiliemail' => $data['yetkiliemail'],
            'yetkilitelefon' => $data['yetkilitelefon'],
            'yetkilinot' => $data['yetkilinot'],
            'tckimlik' => $data['tckimlik']  
            );
        
        $this->db->update('tlg_cari', $postData, "`id` = '{$data['musteriid']}'");
    }
    
    public function yazi($s) {
            $tr = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü');
            $kod = array('&Ccedil;', '&ccedil;', '&#286;', '&#287;', '&#305;', '&#304;', '&Ouml;', '&ouml;', '&#350;', '&#351;', '&Uuml;', '&uuml;');
            $s = str_replace($tr, $kod, $s);
        return $s;
    }
    
    public function sil($id)
    {        
        $this->db->delete('tlg_cari', "id = '$id'");
    }
    
}
