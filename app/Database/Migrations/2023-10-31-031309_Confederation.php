<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Confederation extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_confederation' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name_confederation' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'code_confederation' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id_confederation', true);
        $this->forge->createTable('confederation');
    }

    public function down()
    {
        $this->forge->dropTable('confederation');
    }
}
