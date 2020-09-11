<?php

namespace app\models\Search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Basic;

/**
 * BasicSearch represents the model behind the search form of `app\models\Basic`.
 */
class BasicSearch extends Basic
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['basic_id'], 'integer'],
            [['name', 'details', 'image'], 'safe'],
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
        $query = Basic::find();

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
            'basic_id' => $this->basic_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'details', $this->details])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
