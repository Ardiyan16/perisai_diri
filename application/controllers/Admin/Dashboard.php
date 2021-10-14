<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_beranda');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('admin/page/dashboard', $data);
    }

    public function v_konfirm_anggota()
    {
        $data['title'] = 'Konfirmasi Anggota';
        $data['anggota'] = $this->m_beranda->konfir_anggota();
        $this->load->view('admin/page/k_anggota', $data);
    }

    public function v_anggota()
    {
        $data['title'] = 'Anggota PD Jember';
        $data['anggota'] = $this->m_beranda->get_anggota();
        $this->load->view('admin/page/anggota', $data);
    }

    public function proses_konfirmasi($id)
    {
        $this->m_beranda->konfirmasi($id);
        $this->session->set_flashdata('success', true);
        redirect('Admin/Dashboard/v_konfirm_anggota');
    }

    public function delete_konfir($id)
    {
        $this->m_beranda->delete_konfir($id);
        $this->session->set_flashdata('delete', true);
        redirect('Admin/Dashboard/v_konfirm_anggota');
    }
}