<?php

use yii\db\Migration;

/**
 * Handles the creation for table `user`.
 */
class m161002_064723_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(10),
            'name' => $this->string(255),
            'short_name' => $this->string(100),
            'description' => $this->text(),
            'post_id' => $this->integer(10)
        ]);
        $this->createIndex('user_post_id', 'posts','post_id');
        $this->addForeignKey('user_post_id','user','post_id','posts','id');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
