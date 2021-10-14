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

    public function update_ranting()
    {
        $post = $this->input->post();
        $this->id_ranting = $post['id_ranting'];
        $this->nama_ranting = $post['nama_ranting'];
        $this->alamat = $post['alamat'];
        $this->pelatih = $post['pelatih'];
        $this->ketua = $post['ketua'];
        $this->jadwal = $post['jadwal'];
        $this->keterangan = $post['keterangan'];
        if (!empty($_FILES["logo"]["name"])) {
            $this->logo = $this->uploadLogo();
        } else {
            $this->logo = $post["old_logo"];
        }
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->uploadFoto();
        } else {
            $this->foto = $post["old_foto"];
        }
        $this->db->update($this->tabel, $this, array('id_ranting' => $post['id_ranting']));
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

    public function hapus_ranting($id)
    {
        $this->hapus_logo($id);
        $this->hapus_foto($id);
        return $this->db->delete($this->tabel, array("id_ranting" => $id));
    }

    public function hapus_logo($id)
    {
        $logo = $this->db->get_where($this->tabel, ['id_ranting' => $id])->row();
        if ($logo->logo != "01.jpg") {
            $filename = explode(".", $logo->logo)[0];
            return array_map('unlink', glob(FCPATH . "/assets/back/images/logo/$filename.*"));
        }
    }

    public function hapus_foto($id)
    {
        $foto = $this->db->get_where($this->tabel, ['id_ranting' => $id])->row();
        if ($foto->foto != "01.jpg") {
            $filename = explode(".", $foto->foto)[0];
            return array_map('unlink', glob(FCPATH . "/assets/back/images/foto/$filename.*"));
        }
    }
}
