<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_pertanyaan extends CI_Migration
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
            'pertanyaan' => array(
                'type' => 'VARCHAR',
                'constraint' => '1000',
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 20,
                'unsigned' => TRUE,
            ),
            'date_created' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('pertanyaan');
    }
    public function down()
    {
        $this->dbforge->drop_table('pertanyaan');
    }
}
