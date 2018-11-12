<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proceso".
 *
 * @property int $id_proceso
 * @property string $num_proceso
 * @property string $descripcion
 * @property string $fecha_creacion
 * @property int $id_sede
 * @property double $presupuesto
 *
 * @property Sede $sede
 */
class Proceso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proceso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_proceso', 'descripcion', 'id_sede', 'presupuesto'], 'required'],
            [['num_proceso'], 'unique'],
            [['fecha_creacion'], 'safe'],
            [['id_sede'], 'integer'],
            //[['presupuesto'], 'number'],
            [['num_proceso'], 'string', 'max' => 8],
            [['descripcion'], 'string', 'max' => 200],
            [['id_sede'], 'exist', 'skipOnError' => true, 'targetClass' => Sede::className(), 'targetAttribute' => ['id_sede' => 'id_sede']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_proceso' => 'Id Proceso',
            'num_proceso' => 'Numero Proceso',
            'descripcion' => 'Descripcion',
            'fecha_creacion' => 'Fecha Creacion',
            'id_sede' => 'Sede',
            'presupuesto' => 'Presupuesto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSede()
    {
        return $this->hasOne(Sede::className(), ['id_sede' => 'id_sede'])->select('nombre_sede')->scalar();
    }
}
