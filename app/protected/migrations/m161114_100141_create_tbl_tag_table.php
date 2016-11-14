<?php

class m161114_100141_create_tbl_tag_table extends CDbMigration
{
	public function up()
	{
        return $this->createTable('tbl_tag', array(
            'id' => 'int(11) auto_increment',
            'name' => 'varchar(50) not null',
            'frequency' => 'int(11) not null',
            'primary key(id)'
        ), 'ENGINE=InnoDB');
	}

	public function down()
	{
		return $this->dropTable('tbl_tag');
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