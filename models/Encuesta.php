<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encuesta".
 *
 * @property integer $idEncuesta
 * @property string $fechaCreacion
 * @property integer $limiteEncuestados
 * @property string $titulo
 * @property integer $idCliente
 *
 * @property Cliente $idCliente0
 * @property Pregunta[] $preguntas
 */
class Encuesta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encuesta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fechaCreacion', 'limiteEncuestados', 'titulo', 'idCliente'], 'required'],
            [['limiteEncuestados', 'idCliente'], 'integer'],
            [['fechaCreacion'], 'string', 'max' => 15],
            [['titulo'], 'string', 'max' => 100],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['idCliente' => 'idCliente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEncuesta' => 'Id Encuesta',
            'fechaCreacion' => 'Fecha Creacion',
            'limiteEncuestados' => 'Limite Encuestados',
            'titulo' => 'Titulo',
            'idCliente' => 'Id Cliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCliente0()
    {
        return $this->hasOne(Cliente::className(), ['idCliente' => 'idCliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreguntas()
    {
        return $this->hasMany(Pregunta::className(), ['idEncuesta' => 'idEncuesta']);
    }
}
