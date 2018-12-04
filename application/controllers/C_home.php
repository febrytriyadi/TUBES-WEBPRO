<!-- Anisa Fatikasari(1301164608)-->

<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_home extends CI_Controller {
		
		public function __construct(){
            parent::__construct();
			$this->load->helper(array('url','form'));
            $this->load->model('M_home');
			$this->load->library('session');
        }
        public function index(){
            $this->load->view('home');
        }
        public function comment(){
            $data['data']=$this->M_home->getcomment();
            $this->load->view('support',$data);
        }
        public function proses_tambah_comment(){
            $data = array(
                'nama' => $this->input->post('nama'),
                'komentar' => $this->input->post('komen'),
                );
            $this->db->insert('comment',$data);
        redirect('C_home/comment');
        }
	}
?>
