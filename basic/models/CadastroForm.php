<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cadastrodonatarios".
 *
 * @property int $idcaddonatario
 * @property string $nome
 * @property string $cpf/cnpj
 * @property string $telefone
 * @property string $endereco
 * @property string $email
 * @property string $senha
 */
class Cadastro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cadastrodonatarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpf/cnpj', 'telefone', 'endereco', 'email', 'senha'], 'required'],
            [['nome', 'email'], 'string', 'max' => 50],
            [['cpf/cnpj'], 'string', 'max' => 35],
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
            'cpf/cnpj' => 'Cpf/cnpj',
            'telefone' => 'Telefone',
            'endereco' => 'Endereco',
            'email' => 'Email',
            'senha' => 'Senha',
        ];
    }
}
