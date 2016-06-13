<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property integer $idCliente
 * @property string $nombre
 * @property string $correo
 * @property string $contrasena
 * @property integer $idSuscripcion
 *
 * @property Suscripcion $idSuscripcion0
 * @property Encuesta[] $encuestas
 * @property Tarjeta[] $tarjetas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'correo', 'contrasena'], 'required'],
            [['idSuscripcion'], 'integer'],
            [['nombre'], 'string', 'max' => 500],
            [['correo', 'contrasena'], 'string', 'max' => 255],
            [['idSuscripcion'], 'exist', 'skipOnError' => true, 'targetClass' => Suscripcion::className(), 'targetAttribute' => ['idSuscripcion' => 'idSuscripcion']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCliente' => 'Id Cliente',
            'nombre' => 'Nombre',
            'correo' => 'Correo',
            'contrasena' => 'Contrasena',
            'idSuscripcion' => 'Id Suscripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSuscripcion0()
    {
        return $this->hasOne(Suscripcion::className(), ['idSuscripcion' => 'idSuscripcion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEncuestas()
    {
        return $this->hasMany(Encuesta::className(), ['idCliente' => 'idCliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTarjetas()
    {
        return $this->hasMany(Tarjeta::className(), ['idCliente' => 'idCliente']);
    }
}
