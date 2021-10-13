<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ranting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_ranting');
    }

    public function index()
    {
        $data['title'] = 'Ranting';
        $data['ranting'] = $this->m_ranting->get_ranting();
        $this->load->view('admin/page/v_ranting', $data);
    }

    public function t_ranting()
    {
        $data['title'] = 'Tambah Unit/Ranting';
        $this->load->view('admin/page/t_ranting', $data);
    }

    public function save_ranting()
    {
        $save = $this->m_ranting;
        $save->save_ranting();
        $this->session->set_flashdata('insert');
        redirect('Admin/Ranting');
    }
}