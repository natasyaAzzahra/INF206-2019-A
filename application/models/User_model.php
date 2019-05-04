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

    public function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        //jika usernya ada
        if ($user) {
            // jika usernya nelayan/content creator
            if ($user['role_id'] == 2) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'namalengkap' => $user['namalengkap'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('home');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="text-align: center">
                    Password yang dimasukkan salah!
                    </div>');
                    redirect('login');
                }
            }
            // jika usernya admin
            // elseif ($user['role_id'] == 1) {
            //     if (password_verify($password, $user['password'])) {
            //         redirect('home');
            //     } else {
            //         $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="text-align: center">
            //         Password yang dimasukkan salah!
            //         </div>');
            //         redirect('login');
            //     }
            // }
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
