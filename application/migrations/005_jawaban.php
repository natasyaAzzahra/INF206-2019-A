<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_jawaban extends CI_Migration
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
            'post_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'jawaban' => array(
                'type' => 'VARCHAR',
                'constraint' => '10000',
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
        $this->dbforge->create_table('jawaban');
    }
    public function down()
    {
        $this->dbforge->drop_table('jawaban');
    }
}
