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

    public function e_ranting($id)
    {
        $data['title'] = 'Edit Unit/Ranting';
        $data['edit'] = $this->db->get_where('ranting', ['id_ranting' => $id])->row_array();
        $this->load->view('admin/page/e_ranting', $data);
    }

    public function save_ranting()
    {
        $save = $this->m_ranting;
        $save->save_ranting();
        $this->session->set_flashdata('insert', true);
        redirect('Admin/Ranting');
    }

    public function update_ranting()
    {
        $update = $this->m_ranting;
        $update->update_ranting();
        $this->session->set_flashdata('update', true);
        redirect('Admin/Ranting');
    }

    public function delete_ranting($id)
    {
        $delete = $this->m_ranting;
        $delete->hapus_ranting($id);
        $this->session->set_flashdata('delete', true);
        redirect('Admin/Ranting');
    }
}