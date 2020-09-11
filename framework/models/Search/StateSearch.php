<?php

namespace app\models\Search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\State;

/**
 * StateSearch represents the model behind the search form of `app\models\State`.
 */
class StateSearch extends State
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['state_id'], 'integer'],
            [['state_oz', 'state_eng', 'state_ru'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = State::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'state_id' => $this->state_id,
        ]);

        $query->andFilterWhere(['like', 'state_oz', $this->state_oz])
            ->andFilterWhere(['like', 'state_eng', $this->state_eng])
            ->andFilterWhere(['like', 'state_ru', $this->state_ru]);

        return $dataProvider;
    }
}
