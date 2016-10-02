<?php

use yii\db\Migration;

class m161002_084820_insert_3_user_column extends Migration
{
    public function up()
    {
        $this->insert('user', [
            'id' => '1',
            'name' => 'Denis',
            'short_name' => 'Den',
            'description' => 'description',
            'post_id' => '1'
        ]);
        $this->insert('user', [
            'id' => '2',
            'name' => 'Anton',
            'short_name' => 'Toha',
            'description' => 'description',
            'post_id' => '1'
        ]);
        $this->insert('user', [
            'id' => '3',
            'name' => 'Bogdan',
            'short_name' => 'Bodja',
            'description' => 'description',
            'post_id' => '1'
        ]);
    }

    public function down()
    {
        $this->delete(
            'user',"id = '1'"
        );
        $this->delete(
            'user',"id = '2'"
        );
        $this->delete(
            'user',"id = '3'"
        );
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
