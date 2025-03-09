<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%prodi}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%university}}`
 */
class m250309_100433_create_prodi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%prodi}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->text(),
            'univ_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `univ_id`
        $this->createIndex(
            '{{%idx-prodi-univ_id}}',
            '{{%prodi}}',
            'univ_id'
        );

        // add foreign key for table `{{%university}}`
        $this->addForeignKey(
            '{{%fk-prodi-univ_id}}',
            '{{%prodi}}',
            'univ_id',
            '{{%university}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%university}}`
        $this->dropForeignKey(
            '{{%fk-prodi-univ_id}}',
            '{{%prodi}}'
        );

        // drops index for column `univ_id`
        $this->dropIndex(
            '{{%idx-prodi-univ_id}}',
            '{{%prodi}}'
        );

        $this->dropTable('{{%prodi}}');
    }
}
