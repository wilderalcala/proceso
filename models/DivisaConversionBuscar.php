<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DivisaConversion;

/**
 * DivisaConversionBuscar represents the model behind the search form of `app\models\DivisaConversion`.
 */
class DivisaConversionBuscar extends DivisaConversion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_divisa_conversion', 'id_divisa1', 'id_divisa2', 'id_operador_aritmetico'], 'integer'],
            [['valor_divisa1', 'valor_divisa2'], 'number'],
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
        $query = DivisaConversion::find();

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
            'id_divisa_conversion' => $this->id_divisa_conversion,
            'id_divisa1' => $this->id_divisa1,
            'valor_divisa1' => $this->valor_divisa1,
            'id_divisa2' => $this->id_divisa2,
            'valor_divisa2' => $this->valor_divisa2,
            'id_operador_aritmetico' => $this->id_operador_aritmetico,
        ]);

        return $dataProvider;
    }
}
