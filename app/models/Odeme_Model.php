<?php
class Odeme_Model extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function liste() {
        $sql = "SELECT * FROM tlg_odeme order by id ASC";
        return $this->db->select($sql);
        
    }    
    
    public function listSingle($id)
    {
        $sql = 'SELECT * FROM tlg_odeme WHERE id = :id';
        return $this->db->select($sql, array(':id' => $id));
    }
    
    public function toplamList()
    {
        $sql = "SELECT sum(odeme) as todeme, cari_id, satis_id FROM tlg_odeme GROUP BY satis_id";
        return $this->db->select($sql);
    }
    
    public function toplamCari()
    {
        $sql = "SELECT sum(odeme) as todeme, cari_id, satis_id FROM tlg_odeme GROUP BY cari_id";
        return $this->db->select($sql);
    }
    
    public function toplamProje()
    {
        $sql = "SELECT sum(odeme) as todeme, cari_id, satis_id FROM tlg_odeme GROUP BY cari_id";
        return $this->db->select($sql);
    }
            
    public function detay($id)
    {
        $sql = 'SELECT * FROM tlg_proje INNER JOIN tlg_odeme ON tlg_proje.odeme_id = tlg_odeme.id WHERE tlg_proje.odeme_id = :odeme_id';
        return $this->db->select($sql, array(':odeme_id' => $id));
    }
    
    public function ekleRun($data){
       return  $this->db->insert("tlg_odeme", $data);
    }
    
    public function duzenleRun($data)
    {
        $postData = array(
                'satis_id' => $data['satis_id'],
                'cari_id' => $data['cari_id'],
                'odeme' => $data['odeme']                
            );
        
        $this->db->update('tlg_odeme', $postData, "`id` = '{$data['odemeid']}'");
    }
    
    public function yazi($s) {
            $tr = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü');
            $kod = array('&Ccedil;', '&ccedil;', '&#286;', '&#287;', '&#305;', '&#304;', '&Ouml;', '&ouml;', '&#350;', '&#351;', '&Uuml;', '&uuml;');
            $s = str_replace($tr, $kod, $s);
        return $s;
    }
    
    public function sil($id)
    {        
        $this->db->delete('tlg_odeme', "id = '$id'");
    }
    
}
