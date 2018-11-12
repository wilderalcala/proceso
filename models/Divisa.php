<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "divisa".
 *
 * @property int $id_divisa
 * @property string $nombre_divisa
 *
 * @property DivisaConversion[] $divisaConversions
 * @property DivisaConversion[] $divisaConversions0
 */
class Divisa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'divisa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_divisa'], 'required'],
            [['nombre_divisa'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_divisa' => 'Id Divisa',
            'nombre_divisa' => 'Nombre Divisa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDivisaConversions()
    {
        return $this->hasMany(DivisaConversion::className(), ['id_divisa1' => 'id_divisa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDivisaConversions0()
    {
        return $this->hasMany(DivisaConversion::className(), ['id_divisa2' => 'id_divisa']);
    }
}
