<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property string $codigo
 * @property string $nome
 * @property string $descricao
 * @property double $preco
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo', 'nome', 'descricao', 'preco'], 'required'],
            [['preco'], 'number'], 
            [['codigo'], 'string', 'min' => 5, 'max' => 8],
            [['nome', 'descricao'], 'string', 'min' => 10, 'max' => 255],
            [['codigo'], 'unique'],
            [['nome'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Código do Produto',
            'nome' => 'Nome do Produto',
            'descricao' => 'Descrição',
            'preco' => 'Preço R$',
        ];
    }
}
