<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_security');
		
	}
	/**0
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('user/login');
	}

	public function user_login(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$role = $this->input->post('level');
		$user_data = $this->m_login->user_login($pass,$user,$role);
		if ($user_data) {

			if($user_data['level'] == $role){
				// Logika sesi
            	$this->session->set_userdata($user_data);

            // Redirect ke halaman setelah login sesuai dengan level
            	if ($role =='administrator') {
				
				redirect('User_dashboard');
				}elseif($role  == 'user'){
				
				redirect('anggota_dashboard');
				}else{
					return false;
				}
			}else {
                // Role tidak cocok
                $this->session->set_flashdata('info', '<div class="alert alert-danger role="alert">Maaf, Anda tidak memiliki akses ke role ini.</div>');
                redirect('user');
            }
        } else {
            // Login tidak berhasil
            $this->session->set_flashdata('info', '<div class="alert alert-danger role="alert">Maaf, Anda tidak memiliki akses ke role ini.</div>');
            redirect('user');
        }
	}

	public function user_logout(){
		
		$this->session->sess_destroy();
		redirect('user');
	}
	
}