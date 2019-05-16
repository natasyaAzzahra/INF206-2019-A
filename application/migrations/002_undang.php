<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_undang extends CI_Migration
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
            'judul' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'isi' => array(
                'type' => 'VARCHAR',
                'constraint' => '10000',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('undang');
    }
    public function down()
    {
        $this->dbforge->drop_table('undang');
    }
}
