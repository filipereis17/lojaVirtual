<?php

use yii\db\Migration;

/**
 * Class m191110_223716_produto
 */
class m191110_223716_produto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('produto', [
            'codigo' => $this->string(8)->notNull()->unique(),
            'nome' => $this->string()->notNull()->unique(),
            'descricao' => $this->string()->notNull(),
            'preco' => $this->float()->notNull(),
        ], $tableOptions);

        $this->addPrimaryKey('id_produto', 'produto', 'codigo');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('produto');
    }
}
