<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "suscripcion".
 *
 * @property integer $idSuscripcion
 * @property double $precio
 * @property string $privilegios
 * @property string $tipo
 *
 * @property Cliente[] $clientes
 */
class Suscripcion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'suscripcion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['precio', 'privilegios', 'tipo'], 'required'],
            [['precio'], 'number'],
            [['tipo'], 'string'],
            [['privilegios'], 'string', 'max' => 2000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idSuscripcion' => 'Id Suscripcion',
            'precio' => 'Precio',
            'privilegios' => 'Privilegios',
            'tipo' => 'Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Cliente::className(), ['idSuscripcion' => 'idSuscripcion']);
    }
}
