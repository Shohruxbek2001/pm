<?php

namespace app\models\Search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductSearch represents the model behind the search form of `app\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'catalog_id', 'category_id', 'goods_id', 'state_id', 'brand_id'], 'integer'],
            [['alias', 'product_name_oz', 'product_name_eng', 'product_name_ru', 'details_oz', 'details_eng', 'details_ru','no_discount_oz','no_discount_eng', 'no_discount_ru', 'price_name_oz', 'price_name_eng', 'price_name_ru', 'image1', 'image2', 'image3', 'image4', 'status', 'height', 'width','length'], 'safe'],
            [['evaluation'], 'number'],
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
        $query = Product::find();

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
            'product_id' => $this->product_id,
            'catalog_id' => $this->catalog_id,
            'category_id' => $this->category_id,
            'goods_id' => $this->goods_id,
            'state' => $this->state_id,
            'brand' => $this->brand_id,
            'evaluation' => $this->evaluation,
        ]);

        $query->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'product_name_oz', $this->product_name_oz])
            ->andFilterWhere(['like', 'product_name_eng', $this->product_name_eng])
            ->andFilterWhere(['like', 'product_name_ru', $this->product_name_ru])
            ->andFilterWhere(['like', 'details_oz', $this->details_oz])
            ->andFilterWhere(['like', 'details_eng', $this->details_eng])
            ->andFilterWhere(['like', 'details_ru', $this->details_ru])
            ->andFilterWhere(['like', 'price_name_oz', $this->price_name_oz])
            ->andFilterWhere(['like', 'price_name_eng', $this->price_name_eng])
            ->andFilterWhere(['like', 'price_name_ru', $this->price_name_ru])
            ->andFilterWhere(['like', 'no_discount_oz', $this->no_discount_oz])
            ->andFilterWhere(['like', 'no_discount_eng', $this->no_discount_eng])
            ->andFilterWhere(['like', 'no_discount_ru', $this->no_discount_ru])
            ->andFilterWhere(['like', 'image1', $this->image1])
            ->andFilterWhere(['like', 'image2', $this->image2])
            ->andFilterWhere(['like', 'image3', $this->image3])
            ->andFilterWhere(['like', 'image4', $this->image4])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'height', $this->height])
            ->andFilterWhere(['like', 'width', $this->width])
            ->andFilterWhere(['like', 'length', $this->length]);

        return $dataProvider;
    }
}
