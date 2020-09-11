<?php

namespace app\models\Search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Brand;

/**
 * BrandSearch represents the model behind the search form of `app\models\Brand`.
 */
class BrandSearch extends Brand
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_id'], 'integer'],
            [['brand_oz', 'brand_eng', 'brand_ru'], 'safe'],
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
        $query = Brand::find();

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
            'brand_id' => $this->brand_id,
        ]);

        $query->andFilterWhere(['like', 'brand_oz', $this->brand_oz])
            ->andFilterWhere(['like', 'brand_eng', $this->brand_eng])
            ->andFilterWhere(['like', 'brand_ru', $this->brand_ru]);

        return $dataProvider;
    }
}
