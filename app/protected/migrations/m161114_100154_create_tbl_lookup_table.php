<?php

class m161114_100154_create_tbl_lookup_table extends CDbMigration
{
	public function up()
	{
        return $this->createTable('tbl_lookup', array(
            'id' => 'int(11) auto_increment',
            'name' => 'varchar(50)',
            'code' => 'int(11)',
            'type' => 'int(11)',
            'position' => 'int(11)',
            'primary key(id)'
        ), 'ENGINE=InnoDB');
	}

	public function down()
	{
		return $this->dropTable('tbl_lookup');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}