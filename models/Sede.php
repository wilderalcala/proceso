<?php

namespace app\models;

use Yii;
use app\models\Proceso;

/**
 * This is the model class for table "sede".
 *
 * @property int $id_sede
 * @property string $nombre_sede
 *
 * @property Proceso[] $procesos
 */
class Sede extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sede';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_sede'], 'required'],
            [['nombre_sede'], 'string', 'max' => 50],         
            ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sede' => 'Id Sede',
            'nombre_sede' => 'Nombre Sede',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProcesos()
    {
        return $this->hasMany(Proceso::className(), ['id_sede' => 'id_sede']);
    }
}
