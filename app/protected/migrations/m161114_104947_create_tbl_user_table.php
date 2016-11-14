<?php

class m161114_104947_create_tbl_user_table extends CDbMigration
{
	public function up()
	{
        return $this->createTable('tbl_user', array(
            'id' => 'int(11) not null auto_increment',
            'username' => 'varchar(20) not null',
            'password' => 'char(32) not null',
            'salt'  => 'varchar(50) not null',
            'primary key(id)',
            'UNIQUE INDEX (`username`)'
        ), 'engine=InnoDB');
	}

	public function down()
	{
		return $this->dropTable('tbl_user');
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