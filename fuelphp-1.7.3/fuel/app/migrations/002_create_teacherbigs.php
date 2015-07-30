<?php

namespace Fuel\Migrations;

class Create_teacherbigs
{
	public function up()
	{
		\DBUtil::create_table('teacherbigs', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'char'),
			'dob' => array('constraint' => 255, 'type' => 'char'),
			'class' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('teacherbigs');
	}
}