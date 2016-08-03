<?php
class Calisan_Model extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function liste() {
        $sql = "SELECT * FROM tlg_calisan order by id ASC";
        return $this->db->select($sql);
        
    }    
    
    public function listSingle($id)
    {
        $sql = 'SELECT * FROM tlg_calisan WHERE id = :id';
        return $this->db->select($sql, array(':id' => $id));
    }
    
    public function detay($id)
    {
        $sql = 'SELECT * FROM tlg_proje INNER JOIN tlg_calisan ON tlg_proje.calisan_id = tlg_calisan.id WHERE tlg_proje.calisan_id = :calisan_id';
        return $this->db->select($sql, array(':calisan_id' => $id));
    }
    
    public function ekleRun($data){
       return  $this->db->insert("tlg_calisan", $data);
    }
    
    public function duzenleRun($data)
    {
        $postData = array(
                'adi' => $data['adi'],
                'email' => $data['email'],
                'kategori' => $data['kategori']
            );
        
        $this->db->update('tlg_calisan', $postData, "`id` = '{$data['calisanid']}'");
    }
    
    public function yazi($s) {
            $tr = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü');
            $kod = array('&Ccedil;', '&ccedil;', '&#286;', '&#287;', '&#305;', '&#304;', '&Ouml;', '&ouml;', '&#350;', '&#351;', '&Uuml;', '&uuml;');
            $s = str_replace($tr, $kod, $s);
        return $s;
    }
    
    public function sil($id)
    {        
        $this->db->delete('tlg_calisan', "id = '$id'");
    }
    
}
