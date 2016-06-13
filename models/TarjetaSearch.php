<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tarjeta;

/**
 * TarjetaSearch represents the model behind the search form about `app\models\Tarjeta`.
 */
class TarjetaSearch extends Tarjeta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idTarjeta', 'idCliente'], 'integer'],
            [['marca', 'numero', 'fechaVen', 'cvv'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Tarjeta::find();

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
            'idTarjeta' => $this->idTarjeta,
            'idCliente' => $this->idCliente,
        ]);

        $query->andFilterWhere(['like', 'marca', $this->marca])
            ->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'fechaVen', $this->fechaVen])
            ->andFilterWhere(['like', 'cvv', $this->cvv]);

        return $dataProvider;
    }
}
