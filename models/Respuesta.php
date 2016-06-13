<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "respuesta".
 *
 * @property integer $idRespuesta
 * @property integer $cantidad
 * @property string $texto
 * @property integer $idPregunta
 *
 * @property Pregunta $idPregunta0
 */
class Respuesta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'respuesta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cantidad', 'texto', 'idPregunta'], 'required'],
            [['cantidad', 'idPregunta'], 'integer'],
            [['texto'], 'string', 'max' => 2000],
            [['idPregunta'], 'exist', 'skipOnError' => true, 'targetClass' => Pregunta::className(), 'targetAttribute' => ['idPregunta' => 'idPregunta']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRespuesta' => 'Id Respuesta',
            'cantidad' => 'Cantidad',
            'texto' => 'Texto',
            'idPregunta' => 'Id Pregunta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPregunta0()
    {
        return $this->hasOne(Pregunta::className(), ['idPregunta' => 'idPregunta']);
    }
}
