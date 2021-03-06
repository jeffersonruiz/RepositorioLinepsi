<?php

namespace frontend\modules\personas\models;

use Yii;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "genero".
 *
 * @property integer $IdGenero
 * @property string $NombreGenero
 *
 * @property Persona[] $personas
 */
class Genero extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'genero';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreGenero'], 'required'],
            [['NombreGenero'], 'string', 'max' => 45],
            [['NombreGenero'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdGenero' => 'Id Genero',
            'NombreGenero' => 'Nombre Genero',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Persona::className(), ['IdGenero' => 'IdGenero']);
    }
    
    public static  function  getListaGeneros(){
        $generos = Genero::find()->all();
        $listageneros = ArrayHelper::map($generos, 'IdGenero', 'NombreGenero');
        return $listageneros;
    }
}
