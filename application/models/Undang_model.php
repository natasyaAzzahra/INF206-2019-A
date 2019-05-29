<?php
class Undang_model extends CI_Model
{
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
}
