<?php

namespace app\models\Search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\About;

/**
 * AboutSearch represents the model behind the search form of `app\models\About`.
 */
class AboutSearch extends About
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['about_id'], 'integer'],
            [['phone_number', 'home_number', 'ofice_number', 'detals'], 'safe'],
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
        $query = About::find();

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
            'about_id' => $this->about_id,
        ]);

        $query->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'home_number', $this->home_number])
            ->andFilterWhere(['like', 'ofice_number', $this->ofice_number])
            ->andFilterWhere(['like', 'detals', $this->detals]);

        return $dataProvider;
    }
}
