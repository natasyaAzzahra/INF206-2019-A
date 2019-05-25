<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_user extends CI_Migration
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
            'namalengkap' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'role_id' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => '128',
            ),
            'date_created' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'bio' => array(
                'type' => 'VARCHAR',
                'constraint' => '1000',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('user');
    }

    public function down()
    {
        $this->dbforge->drop_table('user');
    }
}
