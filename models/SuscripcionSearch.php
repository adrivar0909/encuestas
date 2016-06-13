<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Suscripcion;

/**
 * SuscripcionSearch represents the model behind the search form about `app\models\Suscripcion`.
 */
class SuscripcionSearch extends Suscripcion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idSuscripcion'], 'integer'],
            [['precio'], 'number'],
            [['privilegios', 'tipo'], 'safe'],
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
        $query = Suscripcion::find();

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
            'idSuscripcion' => $this->idSuscripcion,
            'precio' => $this->precio,
        ]);

        $query->andFilterWhere(['like', 'privilegios', $this->privilegios])
            ->andFilterWhere(['like', 'tipo', $this->tipo]);

        return $dataProvider;
    }
}
