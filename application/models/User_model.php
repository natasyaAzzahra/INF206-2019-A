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
                    'role_id' => $user['role_id'],
                    'id' => $user['id']
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
        $bio = $this->input->post('bio');
        $email = $this->input->post('email');

        $upload_image = $_FILES['image'];
        if ($upload_image) {

            $config['upload_path']          = './assets/img/profil/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="text-align: center">
                Harap memasukkan foto!
                </div>');
                redirect('profil');
            } else {
                $image = $this->upload->data('file_name');
            }
        }
        if ($namalengkap != '') {
            $this->db->set('namalengkap', $namalengkap);
        }
        if ($bio != '') {
            $this->db->set('bio', $bio);
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

    // fungsi untuk melihat uud berdasarkan id
    public function getUudById($id)
    {
        return $this->db->get_where('undang', ['id' => $id])->row_array();
    }

    // fungsi untuk mengubah uud
    public function edituud()
    {
        $data = array(
            "judul" => htmlspecialchars($this->input->post('judul', true)),
            "isi" => htmlspecialchars($this->input->post('isi', true))
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('undang', $data);
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

    //Function untuk menambahkan konten
    public function tambahkonten()
    {
        $upload_image = $_FILES['image'];
        if ($upload_image) {

            $config['upload_path']          = './assets/img/konten/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="text-align: center">
                Harap memasukkan foto!
                </div>');
                redirect('profil/konten');
            } else {
                $image =  $this->upload->data();
                $data = [
                    "judul" => htmlspecialchars($this->input->post('judul', true)),
                    "genre" => htmlspecialchars($this->input->post('genre', true)),
                    "isi" => htmlspecialchars($this->input->post('isi', true)),
                    "video" => substr($this->input->post('video', true), 17),
                    "date_created" => time(),
                    "user_id" => $this->session->userdata('id'),
                    "username" => $this->session->userdata('username'),
                    "image" => $image['file_name']
                ];
                $this->db->insert('konten', $data);
            }
        }
        redirect('profil/konten');
    }

    //fungsi untuk menampilkan konten yg sudah diupload oleh konten creator
    public function getUserKonten()
    {
        return $this->db->where('user_id', $this->session->userdata('id'))->get('konten')->result_array();
    }

    //fungsi untuk menghapus konten
    public function hapusKonten($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('konten');
    }

    // fungsi untuk melihat detail konten
    public function getKontenById($id)
    {
        return $this->db->get_where('konten', ['id' => $id])->row_array();
    }

    // fungsi untuk menampilkan semua konten yg diupload oleh konten creator di halaman wawasan
    public function getAllKonten()
    {
        return $this->db->get('konten')->result_array();
    }

    //fungsi untuk mengubah konten
    public function editkonten()
    {
        $upload_image = $_FILES['image'];
        if ($upload_image) {

            $config['upload_path']          = './assets/img/konten/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="text-align: center">
                Harap memasukkan foto!
                </div>');
                // $id = $this->uri->segmen(1);
                redirect('profil/konten/');
            } else {
                $image =  $this->upload->data();
                $data = [
                    "judul" => htmlspecialchars($this->input->post('judul', true)),
                    "genre" => htmlspecialchars($this->input->post('genre', true)),
                    "isi" => htmlspecialchars($this->input->post('isi', true)),
                    "video" => substr($this->input->post('video', true), 17),
                    "date_created" => time(),
                    "user_id" => $this->session->userdata('id'),
                    "username" => $this->session->userdata('username'),
                    "image" => $image['file_name']
                ];
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('konten', $data);
            }
        }
        redirect('profil/konten');
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('konten');
        $this->db->like('judul', $keyword);
        $this->db->or_like('user_id', $keyword);
        $this->db->or_like('username', $keyword);
        $this->db->or_like('judul', $keyword);
        $this->db->or_like('genre', $keyword);
        $this->db->or_like('isi', $keyword);
        return $this->db->get()->result();
    }
}
