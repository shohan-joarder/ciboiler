<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUsers extends Migration
{
    public function up()
    {
        $fields = [
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'name' =>[
                'type'           => 'VARCHAR',
                'constaint'      => '255',
                'default'        => null,
            ],
            'email' =>[
                'type'           => 'VARCHAR',
                'unique'         => true,
                'constaint'      => '255',
                'default'        => null,
            ],
            'password' =>[
                'type'           => 'VARCHAR',
                'constaint'      => '255',
                'default'        => null,
            ],
            'created_at' =>[
                'type'           => 'DATETIME',
                'default'        => null,
            ],
            'updated_at' =>[
                'type'           => 'DATETIME',
                'default'        => null,
            ]
        ];
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
