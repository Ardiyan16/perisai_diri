<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_ranting');
	}


	public function index()
	{
		$this->load->view('user/auth/login');
	}

	public function v_registrasi()
	{
		$data['ranting'] = $this->m_ranting->get_ranting();
		$this->load->view('user/auth/register', $data);
	}

	public function registrasi()
	{
		$data['ranting'] = $this->m_ranting->get_ranting();
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim', ['required' => 'nama lengkap tidak boleh kosong']);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', ['is_unique' => 'email anda telah terdaftar']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', ['required' => 'alamat tidak boleh kosong']);
		$this->form_validation->set_rules('no_telepon', 'No Telepon', 'required|trim|max_length[13]', ['max_length' => 'No Telepon tidak boleh lebih dari 13 karakter']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'password tidak boleh kosong']);
		if ($this->form_validation->run() == false) {
			$this->load->view('user/auth/register', $data);
		} else {
			$this->proses_registrasi();
		}
	}

	private function proses_registrasi()
	{
		$email = $this->input->post('email', true);
		$password = $this->input->post('password', true);
		$data = [
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'alamat' => $this->input->post('alamat'),
			'no_telepon' => $this->input->post('no_telepon'),
			'id_ranting' => $this->input->post('id_ranting'),
			'email' => htmlspecialchars($email),
			'password' => password_hash($password, PASSWORD_BCRYPT),
			'foto' => 'user.png',
			'id_status' => 1
		];

		$this->db->insert('users', $data);
		$this->session->set_flashdata('insert', true);
		redirect('User/Auth');
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim', ['required' => 'email tidak boleh kosong']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'password tidak boleh kosong']);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('user/auth/login');
		} else {
			$this->proses_login();
		}
	}

	private function proses_login()
	{
		$email = htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

		$user = $this->db->get_where('users', ['email' => $email])->row_array();
		$cekpass = $this->db->get_where('users', array('password' => $password));

		if ($email == $user['email']) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'alamat' => $user['alamat'],
					'email' => $user['email'],
					'nama_lengkap' => $user['nama_lengkap'],
					'alamat' => $user['alamat'],
					'no_telepon' => $user['no_telepon'],
					'foto' => $user['foto']
				];
				$this->session->set_userdata($data);
				if ($user['id_status'] == '2') {
					redirect('User/Dashboard');
				} else {
					$this->session->unset_userdata('alamat');
					$this->session->unset_userdata('email');
					$this->session->unset_userdata('nama_lengkap');
					$this->session->unset_userdata('alamat');
					$this->session->unset_userdata('no_telepon');
					$this->session->unset_userdata('foto');
					$this->session->set_flashdata('belumkonfirmasi', true);
					redirect('User/Auth');
				}
			} else {
				$this->session->set_flashdata('passwordsalah', true);
				redirect('User/Auth');
			}
		} else {
			$this->session->set_flashdata('emailsalah', true);
			redirect('User/Auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('alamat');
		$this->session->unset_userdata('nama_lengkap');
		$this->session->unset_userdata('alamat');
		$this->session->unset_userdata('no_telepon');
		$this->session->unset_userdata('foto');

		$this->session->set_flashdata('logout', true);
		redirect('User/Auth');
	}
}
