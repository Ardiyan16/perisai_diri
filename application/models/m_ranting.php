<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_ranting extends CI_Model
{
    private $tabel = 'ranting';

    public function get_ranting()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function save_ranting()
    {
        $post = $this->input->post();
        $this->nama_ranting = $post['nama_ranting'];
        $this->alamat = $post['alamat'];
        $this->pelatih = $post['pelatih'];
        $this->ketua = $post['ketua'];
        $this->jadwal = $post['jadwal'];
        $this->keterangan = $post['keterangan'];
        $this->logo = $this->uploadLogo();
        $this->foto = $this->uploadFoto();
        $this->db->insert($this->tabel, $this);
    }

    private function uploadLogo()
    {
        $config['upload_path']          =  './assets/back/images/logo';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $nama_lengkap = $_FILES['logo']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('logo')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
    }

    private function uploadFoto()
    {
        $config['upload_path']          =  './assets/back/images/foto';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $nama_lengkap = $_FILES['foto']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
    }
}