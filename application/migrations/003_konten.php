<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_konten extends CI_Migration
{
    public function __construct()
    {
        $this->load->dbforge();
        $this->load->database();
    }
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 20,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => '20',
                'unsigned' => TRUE
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'judul' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'genre' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'date_created' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => '128',
            ),
            'isi' => array(
                'type' => 'VARCHAR',
                'constraint' => '10000',
            ),
            'video' => array(
                'type' => 'VARCHAR',
                'constraint' => '1000',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('konten');
    }
    public function down()
    {
        $this->dbforge->drop_table('konten');
    }
}
