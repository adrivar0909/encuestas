<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pregunta".
 *
 * @property integer $idPregunta
 * @property string $texto
 * @property string $tipo
 * @property integer $idEncuesta
 *
 * @property Encuesta $idEncuesta0
 * @property Respuesta[] $respuestas
 */
class Pregunta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pregunta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['texto', 'tipo', 'idEncuesta'], 'required'],
            [['idEncuesta'], 'integer'],
            [['texto'], 'string', 'max' => 2000],
            [['tipo'], 'string', 'max' => 100],
            [['idEncuesta'], 'exist', 'skipOnError' => true, 'targetClass' => Encuesta::className(), 'targetAttribute' => ['idEncuesta' => 'idEncuesta']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPregunta' => 'Id Pregunta',
            'texto' => 'Texto',
            'tipo' => 'Tipo',
            'idEncuesta' => 'Id Encuesta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEncuesta0()
    {
        return $this->hasOne(Encuesta::className(), ['idEncuesta' => 'idEncuesta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRespuestas()
    {
        return $this->hasMany(Respuesta::className(), ['idPregunta' => 'idPregunta']);
    }
}
