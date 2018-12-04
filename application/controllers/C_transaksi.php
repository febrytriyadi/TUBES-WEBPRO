<!-- 
	Nisrina Nurhuda(1301164268)
-->
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_transaksi extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
			$this->load->helper(array('url','form'));
			#$this->load->model('m_user');
			$this->load->model('m_mobil');
            $this->load->model('m_motor');
            $this->load->model('m_pesanan');
			$this->load->library('session');
        }
        public function index(){
            $data['data']=$this->m_pesanan->getpesanan();
            $this->load->view('tampiltransaksi',$data);
        }
        public function tampiltransaksi(){
            $data['data']=$this->m_pesanan->getpesanan();
            $this->load->view('tampiltransaksi',$data);
        }
        public function proses_pesanan(){
            $data = array(
                'nama_penerima' => $this->input->post('nama_penerima'),
                'no_identitas' => $this->input->post('no_identitas'),
                'nomor_telepon' => $this->input->post('nomor_telepon'),
                'alamat' => $this->input->post('alamat'),
                'tanggal_pemesanan' => $this->input->post('tanggal_pemesanan'),
                'lama_penyewaan' => $this->input->post('lama_penyewaan'),
                'id_kendaraan' => $this->input->post('id_kendaraan'),
                'nama_kendaraan' => $this->input->post('nama_kendaraan'),
                'proses' => $this->input->post('proses'),
            );
            $this->db->insert('pesanan',$data);
        redirect('C_beranda/');
        }
        public function proses_delete_pesanan(){
            $this->m_pesanan->delete_pesanan($this->input->post('pesanan_id'));
            redirect('C_transaksi/');

        }
        public function proses_update_pesanan(){
            $proses=$this->input->post('proses');
            $pesanan_id=$this->input->post('pesanan_id');
            $this->db->query("UPDATE pesanan set proses='$proses' where pesanan_id='$pesanan_id'");

            redirect('C_transaksi/');
        }
    }
?>