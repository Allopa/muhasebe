<?php
class Kullanici_Model extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function kullaniciList() {
        $sql = "SELECT * FROM tlg_uyeler order by id ASC";
        return $this->db->select($sql);
        
    }   
    
    public function yetkiList() {
        $sql = "SELECT * FROM tlg_yetki order by id ASC";
        return $this->db->select($sql);        
    }   
    
    public function kullaniciListSingle($id)
    {
        $sql = 'SELECT * FROM tlg_uyeler WHERE id = :id';
        return $this->db->select($sql, array(':id' => $id));
    }
    
    public function detay($id)
    {
        $sql = 'SELECT * FROM tlg_uyeler WHERE id = :id';
        return $this->db->select($sql, array(':id' => $id));
    }
    
    public function ekleRun($data){
       return  $this->db->insert("tlg_uyeler", $data);
    }
    
    public function duzenleRun($data)
    {
        $postData = array(
                'k_adi' => $data['k_adi'],
                'adi' => $data['adi'],
                'parola' => $data['parola'],
                'eposta' => $data['eposta'],
                'yetki' => $data['yetki'],
                'presmi' => $data['presmi']
            );
        
        $this->db->update('tlg_uyeler', $postData, "`id` = '{$data['kullaniciid']}'");
    }
    
    public function yazi($s) {
            $tr = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü');
            $kod = array('&Ccedil;', '&ccedil;', '&#286;', '&#287;', '&#305;', '&#304;', '&Ouml;', '&ouml;', '&#350;', '&#351;', '&Uuml;', '&uuml;');
            $s = str_replace($tr, $kod, $s);
        return $s;
    }
    
    public function sil($id)
    {                
        $this->db->delete('tlg_uyeler', "`id` = '$id' AND yetki=0");        
    }
    
}
