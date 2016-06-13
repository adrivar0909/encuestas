<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarjeta".
 *
 * @property integer $idTarjeta
 * @property string $marca
 * @property string $numero
 * @property string $fechaVen
 * @property string $cvv
 * @property integer $idCliente
 *
 * @property Cliente $idCliente0
 */
class Tarjeta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tarjeta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idTarjeta', 'marca', 'numero', 'fechaVen', 'cvv', 'idCliente'], 'required'],
            [['idTarjeta', 'idCliente'], 'integer'],
            [['marca'], 'string'],
            [['numero'], 'string', 'max' => 16],
            [['fechaVen'], 'string', 'max' => 15],
            [['cvv'], 'string', 'max' => 3],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['idCliente' => 'idCliente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTarjeta' => 'Id Tarjeta',
            'marca' => 'Marca',
            'numero' => 'Numero',
            'fechaVen' => 'Fecha Ven',
            'cvv' => 'Cvv',
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
}
