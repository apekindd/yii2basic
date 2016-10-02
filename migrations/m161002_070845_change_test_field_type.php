<?php

use yii\db\Migration;

class m161002_070845_change_test_field_type extends Migration
{
    public function up()
    {
        $this->alterColumn('test', 'test', 'integer(10) NOT NULL DEFAULT 0');
    }

    public function down()
    {
        $this->alterColumn('test', 'test', 'varchar(255)');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
