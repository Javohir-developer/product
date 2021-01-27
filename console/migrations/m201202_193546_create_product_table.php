<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m201202_193546_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey().' NOT NULL AUTO_INCREMENT',
            'product_name' => $this->string(225).' NOT NULL',
            'product_price' => $this->string(225).' NOT NULL',
            'categore_name' => $this->string(225).' NOT NULL',
            'product_reyting' => $this->string(225).' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}