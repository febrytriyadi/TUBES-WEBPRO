<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
    public function getcomment() {
        return $this->db->query("select * from comment")->result();
    }
}
?>
<!-- Anisa Fatikasari(1301164608)-->