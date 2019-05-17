<?php
class User_model extends CI_Model
{
    //function untuk menambah data user
    public function tambahDataUser()
    {
        $data = array(
            "namalengkap" => htmlspecialchars($this->input->post('namalengkap', true)),
            "username" => htmlspecialchars($this->input->post('username', true)),
            "email" => htmlspecialchars($this->input->post('email', true)),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "role_id" => 2,
            "image" => 'default.jpg',
            "date_created" => time()
        );
        $this->db->insert('user', $data);
    }

    //function untuk login
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

    //Function untuk edit profil user
    public function editprofil()
    {
        $namalengkap = $this->input->post('namalengkap');
        $email = $this->input->post('email');


        $upload_image = $_FILES['image'];
        if ($upload_image) {

            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="text-align: center">
                Harap memasukkan foto!
                </div>');
                redirect('profil');
            } else {
                $image =  $this->upload->data('file_name');
            }
        }
        if ($namalengkap != '') {
            $this->db->set('namalengkap', $namalengkap);
        }
        $this->db->set('image', $image);
        $this->db->where('email', $email);
        $this->db->update('user');

        redirect('profil');
    }

    //fungsi untuk menampilkan semua data user
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    //fungsi untuk menghapus user
    public function hapusDataUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function tambahuud()
    {
        $data = array(
            "judul" => htmlspecialchars($this->input->post('judul', true)),
            "isi" => htmlspecialchars($this->input->post('isi', true))
        );
        $this->db->insert('undang', $data);
    }

    // fungsi untuk menampilkan semua uud
    public function getAllUud()
    {
        return $this->db->get('undang')->result_array();
    }

    //fungsi untuk menghapus uud
    public function hapusDataUud($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('undang');
    }
}
