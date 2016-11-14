<?php

class m161114_100106_create_tbl_comment extends CDbMigration
{
	public function up()
	{
        return $this->createTable('tbl_comment', array(
            'id' => 'int(11) not null auto_increment',
            'name' => 'varchar(50) not null',
            'email' => 'varchar(50) not null',
            'website' => 'varchar(50)',
            'content' => 'varchar(50) not null',
            'status' => 'tinyint(2) not null default 1',
            'primary key(id)'
        ), 'ENGINE=InnoDB');
	}

	public function down()
	{
		return $this->dropTable('tbl_comment');
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