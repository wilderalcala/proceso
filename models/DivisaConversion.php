<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "divisa_conversion".
 *
 * @property int $id_divisa_conversion
 * @property int $id_divisa1
 * @property double $valor_divisa1
 * @property int $id_divisa2
 * @property double $valor_divisa2
 * @property int $id_operador_aritmetico
 *
 * @property Divisa $divisa1
 * @property Divisa $divisa2
 * @property OperadorAritmetico $operadorAritmetico
 */
class DivisaConversion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'divisa_conversion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_divisa1', 'valor_divisa1', 'id_divisa2', 'valor_divisa2', 'id_operador_aritmetico'], 'required'],
            [['id_divisa1', 'id_divisa2', 'id_operador_aritmetico'], 'integer'],
            [['valor_divisa1', 'valor_divisa2'], 'number'],
            [['id_divisa1'], 'exist', 'skipOnError' => true, 'targetClass' => Divisa::className(), 'targetAttribute' => ['id_divisa1' => 'id_divisa']],
            [['id_divisa2'], 'exist', 'skipOnError' => true, 'targetClass' => Divisa::className(), 'targetAttribute' => ['id_divisa2' => 'id_divisa']],
            [['id_operador_aritmetico'], 'exist', 'skipOnError' => true, 'targetClass' => OperadorAritmetico::className(), 'targetAttribute' => ['id_operador_aritmetico' => 'id_operador_aritmetico']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_divisa_conversion' => 'Id Divisa Conversion',
            'id_divisa1' => 'Divisa1',
            'valor_divisa1' => 'Valor Divisa1',
            'id_divisa2' => 'Divisa2',
            'valor_divisa2' => 'Valor Divisa2',
            'id_operador_aritmetico' => 'Operador Aritmetico',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDivisa1()
    {
        return $this->hasOne(Divisa::className(), ['id_divisa' => 'id_divisa1'])->select('nombre_divisa')->scalar();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDivisa2()
    {
        return $this->hasOne(Divisa::className(), ['id_divisa' => 'id_divisa2'])->select('nombre_divisa')->scalar();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperadorAritmetico()
    {
        return $this->hasOne(OperadorAritmetico::className(), ['id_operador_aritmetico' => 'id_operador_aritmetico'])->select('operador')->scalar();
    }
}
