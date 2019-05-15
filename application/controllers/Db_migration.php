<?php

class Db_migration extends CI_Controller
{

    public function index()
    {
        $this->load->library('migration');

        if ($this->migration->version(1) === FALSE) {
            show_error($this->migration->error_string());
        } else {
            echo '<script>alert("Tabel berhasil ditambah")</script>';
        }
    }
}
