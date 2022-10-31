<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Donatarios;

/**
 * DonatariosSearch represents the model behind the search form of `app\models\Donatarios`.
 */
class DonatariosSearch extends Donatarios
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcaddonatario'], 'integer'],
            [['nome', 'cpfcnpj', 'telefone', 'endereco', 'email', 'senha'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Donatarios::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idcaddonatario' => $this->idcaddonatario,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cpfcnpj', $this->cpfcnpj])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'endereco', $this->endereco])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'senha', $this->senha]);

        return $dataProvider;
    }
}
