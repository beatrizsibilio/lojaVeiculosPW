<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Veiculo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              =>  'int',
                'auto_increment'    =>  true     
            ],
            'marca' => [
                'type'              => 'varchar',
                'constraint'        => 100
            ],
            'modelo' => [
                'type'              => 'varchar',
                'constraint'        => 100
            ],
            'placa' => [
                'type'              => 'varchar',
                'constraint'        => 10
            ],
            'cor' => [
                'type'              => 'varchar',
                'constraint'        => 100
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_veiculo');
    }

    public function down()
    {
        $this->forge->dropTable('tb_veiculo');
    }
}
