<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'role' => [
                'type'       => 'ENUM("1", "2", "3", "4")',
            ],
            'tgl_lahir' => [
                'type' => 'DATE',
            ],
            'telp' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
            'jenkel' => [
                'type'       => 'ENUM("1", "2")',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
