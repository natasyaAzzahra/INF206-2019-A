<?php
class User_model extends CI_Model
{
    public function tambahDataUser()
    {
        $data = array(
            "namalengkap" => htmlspecialchars($this->input->post('namalengkap', true)),
            "username" => htmlspecialchars($this->input->post('username', true)),
            "email" => htmlspecialchars($this->input->post('email', true)),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "role_id" => 2,
            "image" => 'default.jpg'
        );
        $this->db->insert('user', $data);
    }

    public function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        //jika usernya ada
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                //jika usernya member
                if ($user['role_id'] == 2) {
                    redirect('home');
                }
                //jika usernya admin
                else if ($user['role_id'] == 1)
                    redirect('admin');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="text-align: center">
                    Password yang dimasukkan salah!
                    </div>');
                redirect('login');
            }
        }
        // jika usernya gak ada
        else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="text-align: center">
            Username yang dimasukkan tidak terdaftar!
            </div>');
            redirect('login');
        }
    }
}
