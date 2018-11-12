<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Divisa;

/**
 * DivisaBuscar represents the model behind the search form of `app\models\Divisa`.
 */
class DivisaBuscar extends Divisa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_divisa'], 'integer'],
            [['nombre_divisa'], 'safe'],
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
        $query = Divisa::find();

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
            'id_divisa' => $this->id_divisa,
        ]);

        $query->andFilterWhere(['like', 'nombre_divisa', $this->nombre_divisa]);

        return $dataProvider;
    }
}
