<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Wc22 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_country' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'id_confederation' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'id_group' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'play' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'win' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'draw' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'lose' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'goal_in' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'goal_out' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'goal_diff' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'points' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('wc22');
    }

    public function down()
    {
        $this->forge->dropTable('wc22');
    }
}
