<?php

namespace app\models\Search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CategoryType;

/**
 * CategoryTypeSearch represents the model behind the search form of `app\models\CategoryType`.
 */
class CategoryTypeSearch extends CategoryType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_type_id'], 'integer'],
            [['category_type_oz', 'category_type_eng', 'category_type_ru','image', 'alias'], 'safe'],
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
        $query = CategoryType::find();

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
            'category_type_id' => $this->category_type_id,
        ]);

        $query->andFilterWhere(['like', 'category_type_oz', $this->category_type_oz])
            ->andFilterWhere(['like', 'category_type_eng', $this->category_type_eng])
            ->andFilterWhere(['like', 'category_type_ru', $this->category_type_ru])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
