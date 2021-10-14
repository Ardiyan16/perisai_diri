<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_beranda extends CI_Model
{
    public function konfir_anggota()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('ranting', 'ranting.id_ranting = users.id_ranting');
        $this->db->join('status', 'status.id_status = users.id_status');
        $this->db->where('users.id_status', 1);
        return $this->db->get()->result();
    }

    public function get_anggota()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('ranting', 'ranting.id_ranting = users.id_ranting');
        $this->db->join('status', 'status.id_status = users.id_status');
        $this->db->where('users.id_status', 2);
        return $this->db->get()->result();
    }

    public function delete_konfir($id)
    {
        return $this->db->delete('users', array('id_user' => $id));
    }

    public function konfirmasi($id)
    {
        $this->db->query("UPDATE `users` SET `id_status`= '2' WHERE users.id_user ='$id'");
    }
}