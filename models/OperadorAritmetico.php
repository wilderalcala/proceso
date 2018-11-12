<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "operador_aritmetico".
 *
 * @property int $id_operador_aritmetico
 * @property string $operador
 *
 * @property DivisaConversion[] $divisaConversions
 */
class OperadorAritmetico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operador_aritmetico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['operador'], 'required'],
            [['operador'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_operador_aritmetico' => 'Id Operador Aritmetico',
            'operador' => 'Operador',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDivisaConversions()
    {
        return $this->hasMany(DivisaConversion::className(), ['id_operador_aritmetico' => 'id_operador_aritmetico']);
    }
}
