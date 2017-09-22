<?php

namespace frontend\modules\personas\models;

use Yii;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sexo".
 *
 * @property integer $IdSexo
 * @property string $NombreSexo
 *
 * @property Persona[] $personas
 */
class Sexo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sexo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreSexo'], 'required'],
            [['NombreSexo'], 'string', 'max' => 45],
            [['NombreSexo'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdSexo' => 'Id Sexo',
            'NombreSexo' => 'Nombre Sexo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Persona::className(), ['IdSexo' => 'IdSexo']);
    }
    
    public static  function  getListaSexos(){
        $sexos = Sexo::find()->all();
        $listasexos = ArrayHelper::map($sexos, 'IdSexo', 'NombreSexo');
        return $listasexos;
    }
}
