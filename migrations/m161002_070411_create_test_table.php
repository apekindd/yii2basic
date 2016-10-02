<?php

use yii\db\Migration;

/**
 * Handles the creation for table `test`.
 */
class m161002_070411_create_test_table extends Migration
{

    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('test', [
            'id' => $this->primaryKey(),
            'test'=> $this->string(255),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('test');
    }
}
