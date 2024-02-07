<?php

use yii\db\Migration;

/**
 * Class m240206_130907_Tasks
 */
class m240206_130907_Tasks extends Migration
{
    private const TABLE_NAME = 'Tasks';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'done' => $this->boolean()->defaultValue(false),
            'dateCreate' => $this->date(),
            'dateChange' => $this->date(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240206_130907_Tasks cannot be reverted.\n";
        $this->down();
        return false;
    }
}
