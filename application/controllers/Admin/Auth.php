<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('admin/auth/login');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'username tidak boleh kosong']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'password tidak boleh kosong']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/auth/login');
        } else {
            $this->proses_login();
        }
    }

    public function proses_login()
    {
        $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

        $admin = $this->db->get_where('admin', ['username' => $username])->row_array();
        $cekpass = $this->db->get_where('admin', array('password' => $password));

        if ($username == $admin['username']) {
            if ($password == $admin['password']) {
                $data = [
                    'status' => $admin['status'],
                    'username' => $admin['username'],
                ];
                $this->session->set_userdata($data);
                if ($admin['status'] == '1') {
                    redirect('Admin/Dashboard');
                } else {
                    $this->session->unset_userdata('status');
                    $this->session->unset_userdata('username');
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda gagal login!</div>');
                    redirect('Admin/Auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang anda masukkan salah!</div>');
                redirect('Admin/Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf username yang anda masukkan salah!</div>');
            redirect('Admin/Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('status');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">anda telah logout</div>');
        redirect('Admin/Auth');
    }
}
