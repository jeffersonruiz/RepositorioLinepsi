<?php

namespace frontend\modules\citas\models;

use Yii;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "estadocivil".
 *
 * @property integer $IdEstadoCivil
 * @property string $NombreEstadoCivil
 *
 * @property Persona[] $personas
 */
class Estadocivil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estadocivil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreEstadoCivil'], 'required'],
            [['NombreEstadoCivil'], 'string', 'max' => 45],
            [['NombreEstadoCivil'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdEstadoCivil' => 'Id Estado Civil',
            'NombreEstadoCivil' => 'Nombre Estado Civil',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Persona::className(), ['IdEstadoCivil' => 'IdEstadoCivil']);
    }
    
   
    
}
