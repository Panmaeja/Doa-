<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "donatarios".
 *
 * @property int $idcaddonatario
 * @property string $nome
 * @property string $cpfcnpj
 * @property string $telefone
 * @property string $endereco
 * @property string $email
 * @property string $senha
 */
class Donatarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'donatarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpfcnpj', 'telefone', 'endereco', 'email', 'senha'], 'required'],
            [['nome', 'email'], 'string', 'max' => 50],
            [['cpfcnpj'], 'string', 'max' => 35],
            [['telefone'], 'string', 'max' => 25],
            [['endereco'], 'string', 'max' => 150],
            [['senha'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcaddonatario' => 'Idcaddonatario',
            'nome' => 'Nome',
            'cpfcnpj' => 'Cpfcnpj',
            'telefone' => 'Telefone',
            'endereco' => 'Endereco',
            'email' => 'Email',
            'senha' => 'Senha',
        ];
    }
}
