<?php
class User_model extends CI_Model
{
    public function tambahDataUser()
    {
        $data = array(
            "namalengkap" => $this->input->post('namalengkap', true),
            "username" => $this->input->post('username', true),
            "email" => $this->input->post('email', true),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "role_id" => 2
        );
        $this->db->insert('user', $data);
    }
}
