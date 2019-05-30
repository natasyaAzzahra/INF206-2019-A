<?php
class Konten_model extends CI_Model
{
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
        return $this->db->query(" SELECT * FROM konten order by date_created DESC ")->result_array();
    }

    //fungsi untuk mengubah konten
    public function editkonten($id)
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
                redirect('profil/editkonten/' . $id);
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

    //mengecek kata kunci yang ingin dicari pada database konten
    public function cariDataKonten()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('judul', $keyword);
        return $this->db->get('konten')->result_array();
    }
}
