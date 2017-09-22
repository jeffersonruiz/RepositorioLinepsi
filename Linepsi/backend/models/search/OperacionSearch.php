<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Operacion;

/**
 * OperacionSearch represents the model behind the search form about `backend\models\Operacion`.
 */
class OperacionSearch extends Operacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'menu_id'], 'integer'],
            [['nombre','descripcion'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Operacion::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'menu_id' => $this->menu_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre]);
        $query->andFilterWhere(['like', 'descripcion', $this->descripcion]);
        
        $query->orderBy([
           'menu_id'=>SORT_ASC,
           'nombre' => SORT_ASC,
        ]);


        return $dataProvider;
    }
}