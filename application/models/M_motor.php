<!-- 
    Febry Triyadi(1301162195)
-->
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_motor extends CI_Model {

    public function getmotor() {
        return $this->db->query("select * from motor")->result();
    }
    public function search_motor($nama,$harga){
        return $this->db->query("select * from motor where nama like '%".$nama."%' or harga <= ".$harga)->result();
    }
    public function delete_motor($id_motor){
        $table = 'motor';
        $this->db->where('id_motor', $id_motor);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}