<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property integer $nit
 * @property string $nombre
 * @property string $direccion
 * @property string $correo
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nit', 'nombre', 'direccion', 'correo'], 'required'],
            [['nit'], 'integer'],
            [['nombre', 'direccion', 'correo'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nit' => 'Nit',
            'nombre' => 'Nombre',
            'direccion' => 'Direccion',
            'correo' => 'Correo',
        ];
    }
}
