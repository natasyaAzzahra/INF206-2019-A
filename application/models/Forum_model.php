<?php
class Forum_model extends CI_Model
{
    public function tambahpertanyaan()
    {
        $data = array(
            "pertanyaan" => htmlspecialchars($this->input->post('pertanyaan', true)),
            "user_id" => $this->session->userdata('id'),
            "date_created" => time()
        );
        $this->db->insert('pertanyaan', $data);
        redirect('forum');
    }

    public function tambahjawaban($id)
    {
        $data = array(
            "post_id" => $id,
            "jawaban" => htmlspecialchars($this->input->post('jawaban', true)),
            "user_id" => $this->session->userdata('id'),
            "date_created" => time()
        );
        $this->db->insert('jawaban', $data);
        redirect('forum/detailforum/' . $id);
    }

    // fungsi untuk melihat detail pertanyaan
    public function getPertanyaanById($id)
    {
        return $this->db->get_where('pertanyaan', ['id' => $id])->row_array();
    }

    // fungsi untuk menampilkan semua pertanyaan yg diupload oleh nelayan di halaman forum
    public function getAllPertanyaan()
    {
        return $this->db->query(" SELECT * FROM pertanyaan order by date_created DESC ")->result_array();
    }

    public function getAllJawaban($id)
    {
        return $this->db->get_where('jawaban', ['post_id' => $id])->result_array();
    }
}
