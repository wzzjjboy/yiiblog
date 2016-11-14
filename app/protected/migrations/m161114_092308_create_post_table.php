<?php

class m161114_092308_create_post_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('tbl_post', array(
            'id' => 'int(11) NOT NULL AUTO_INCREMENT',
            'title' => 'varchar(50) not null',
            'content' => 'text not null',
            'status' => 'tinyint(2)',
            'PRIMARY KEY (`id`)',
        ), 'ENGINE=InnoDB');
	}

	public function down()
	{
		return $this->dropTable('tbl_post');
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