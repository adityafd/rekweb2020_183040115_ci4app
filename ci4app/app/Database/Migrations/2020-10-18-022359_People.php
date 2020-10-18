<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class People extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 12,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'address' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at' => [
				'type'			 => 'DATETIME',
				'null'			 => TRUE
			],
			'updated_at' => [
				'type'			 => 'DATETIME',
				'null'			 => TRUE
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('people');
	}

	public function down()
	{
		$this->forge->dropTable('people');
	}
}
