<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => 64,
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => 64,
            ],
            'address' => [
                'type'           => 'VARCHAR',
                'constraint'     => 32,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey(['email']);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
