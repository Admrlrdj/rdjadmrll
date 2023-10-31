<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Group extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_group' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'code_group' => [
                'type'       => 'VARCHAR',
                'constraint' => '2',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id_group', true);
        $this->forge->createTable('group');
    }

    public function down()
    {
        $this->forge->dropTable('group');
    }
}
