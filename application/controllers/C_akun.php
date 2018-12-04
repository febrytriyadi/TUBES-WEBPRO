 <!-- Ainun Abidin(1301164159)-->
<?php 
 
class C_akun extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_akun'); 
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
	}
 
	function index(){
		$this->load->view('login');
	}
	public function resetpassword(){
		$this->load->view('resetpassword');
	}

	function t_registrasi(){
		$this->load->view('v_registrasi');
	}
	public function myprofile(){
            $this->load->view('myprofile');
    } 
	public function proses(){

                        $data = [
							'nama'=>$this->input->post('nama'),
							'email'=>$this->input->post('email'),
							'alamat'=>$this->input->post('alamat'),
							'phone'=>$this->input->post('phone'),
							'password'=>$this->input->post('password')
						];
						$tambah = $this->M_akun->register($data);
						if($tambah){
							$this->session->set_flashdata('message', 'berhasil');
							redirect('C_akun');
						}else{
							echo "gagal";		
                }
	}
	public function proses_update_akun(){
            $data = array(
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'phone' => $this->input->post('phone'),
                'password' => $this->input->post('password')
            );
            $this->session->set_userdata('nama',$this->input->post('nama'));
            $this->session->set_userdata('alamat',$this->input->post('alamat'));
            $this->session->set_userdata('phone',$this->input->post('phone'));
            $email=$this->input->post('email');
            $this->db->where('email',$email);
            $this->db->update('user',$data);

            redirect('C_akun/myprofile');
        }        
	public function proses_login(){

        $uid = addslashes($this->input->post('email'));
        $pwd = addslashes($this->input->post('password'));
		$hasil=$this->M_akun->login($uid,$pwd);
		if($uid=='admin@admin.com' and $pwd=='admin'){
			redirect('C_transaksi/tampiltransaksi');
		}
		else if ($hasil['exist']>0) {
			$data = $this->M_akun->profile($uid,$pwd);
			$data_sess = array(
				'nama' => $data['nama'],
				'email' => $data['email'],
				'alamat' => $data['alamat'],
				'phone' => $data['phone'],
				'password' => $data['password']
			);
			$this->session->set_userdata($data_sess);
			redirect('C_beranda');
		}
		else {
			$this->session->set_flashdata('message', 'login anda salah, silahkan login kembali');			
			redirect('C_akun');
		}	
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('C_akun/index');
	}
}