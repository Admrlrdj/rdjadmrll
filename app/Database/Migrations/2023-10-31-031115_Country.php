<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Country extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_country' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name_country' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'code_country' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id_country', true);
        $this->forge->createTable('country');
    }

    public function down()
    {
        $this->forge->dropTable('country');
    }
}
