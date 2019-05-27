<?php

class Db_migration extends CI_Controller
{
    //function untuk memindahkan tabel yang telah ada ke basisdata masing-masing secara langsung
    public function index()
    {
        $this->load->library('migration');

        if ($this->migration->version(5) === FALSE) {
            show_error($this->migration->error_string());
        } else {
            echo '<script>alert("Tabel berhasil ditambah")</script>';
        }
    }
}
