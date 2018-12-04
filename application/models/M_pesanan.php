<!-- Nisrina Nurhuda(1301164268)
-->
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesanan extends CI_Model {

    public function getpesanan() {
        return $this->db->query("select * from pesanan")->result();
    }
    public function delete_pesanan($pesanan_id){
        $table = 'pesanan';
        $this->db->where('pesanan_id', $pesanan_id);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}