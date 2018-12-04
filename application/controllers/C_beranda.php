<!-- Nisrina Nurhuda(1301164268)
    Febry Triyadi(1301162195)
-->
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_beranda extends CI_Controller {
        
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
            $data['isi']=$this->m_mobil->getmobil();
            $data['data']=$this->m_motor->getmotor();
            $this->load->view('beranda',$data);
        }
        public function searchmobil(){
            $this->load->view('searchmobil');
        }
        public function searchmotor(){
            $this->load->view('searchmotor');
        }
        public function pilihmobil(){
            $data['data']=$this->m_mobil->getmobil();
            $this->load->view('pilihmobil',$data);
        }
        public function pilihmotor(){
            $data['data']=$this->m_motor->getmotor();
            $this->load->view('pilihmotor',$data);
        }
        public function tambahmobil(){
            $data['data']=$this->m_mobil->getmobil();
            $this->load->view('tambahmobil',$data);
        }
        public function tambahmotor(){
            $data['data']=$this->m_motor->getmotor();
            $this->load->view('tambahmotor',$data);
        }
        public function search_data_mobil(){
            $nama = $this->input->post('nama');
            $harga = $this->input->post('harga');
            $data['data']=$this->m_mobil->search_mobil($nama,$harga);
            $this->load->view('pilihmobil',$data);
        }
        public function search_data_motor(){
            $nama = $this->input->post('nama');
            $harga = $this->input->post('harga');
            $data['data']=$this->m_motor->search_motor($nama,$harga);
            $this->load->view('pilihmotor',$data);
        }
        public function proses_tambah_mobil(){
            $data = array(
                'nama' => $this->input->post('nama'),
                'lokasi' => $this->input->post('lokasi'),
                'harga' => $this->input->post('harga'),
                'transmisi' => $this->input->post('transmisi'),
                'tipe' => $this->input->post('tipe'),
                'stock' => $this->input->post('stock'),
                'spek' => $this->input->post('spek'),
            );
            $this->db->insert('mobil',$data);
        redirect('C_beranda/tambahmobil');
	    }
        public function proses_tambah_motor(){
            $data = array(
                'nama' => $this->input->post('nama'),
                'lokasi' => $this->input->post('lokasi'),
                'harga' => $this->input->post('harga'),
                'transmisi' => $this->input->post('transmisi'),
                'tipe' => $this->input->post('tipe'),
                'stock' => $this->input->post('stock'),
                'spek' => $this->input->post('spek'),
            );
            $this->db->insert('motor',$data);
        redirect('C_beranda/tambahmotor');
        }
        public function proses_update_mobil(){
            $data = array(
                'nama' => $this->input->post('nama'),
                'lokasi' => $this->input->post('lokasi'),
                'harga' => $this->input->post('harga'),
                'transmisi' => $this->input->post('transmisi'),
                'tipe' => $this->input->post('tipe'),
                'stock' => $this->input->post('stock'),
                'spek' => $this->input->post('spek'),
            );
            $id_mobil=$this->input->post('id_mobil');
            $this->db->where('id_mobil',$id_mobil);
            $this->db->update('mobil',$data);

            redirect('C_beranda/tambahmobil');
        }        
        public function proses_delete_mobil(){
            $this->m_mobil->delete_mobil($this->input->post('id_mobil'));
            redirect('C_beranda/tambahmobil');

        }
        public function proses_update_motor(){
            $data = array(
                'nama' => $this->input->post('nama'),
                'lokasi' => $this->input->post('lokasi'),
                'harga' => $this->input->post('harga'),
                'transmisi' => $this->input->post('transmisi'),
                'tipe' => $this->input->post('tipe'),
                'stock' => $this->input->post('stock'),
                'spek' => $this->input->post('spek'),
            );
            $id_motor=$this->input->post('id_motor');
            $this->db->where('id_motor',$id_motor);
            $this->db->update('motor',$data);

            redirect('C_beranda/tambahmotor');
        }        
        public function proses_delete_motor(){
            $this->m_motor->delete_motor($this->input->post('id_motor'));
            redirect('C_beranda/tambahmotor');

        }
	}
?>