<?php

namespace app\models\Search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Catalog;

/**
 * CatalogSearch represents the model behind the search form of `app\models\Catalog`.
 */
class CatalogSearch extends Catalog
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['catalog_id', 'category_type_id'], 'integer'],
            [['catalog_name_oz', 'catalog_name_eng', 'catalog_name_ru', 'alias'], 'safe'],
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
        $query = Catalog::find();

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
            'catalog_id' => $this->catalog_id,
            'category_type_id' => $this->category_type_id,
        ]);

        $query->andFilterWhere(['like', 'catalog_name_oz', $this->catalog_name_oz])
            ->andFilterWhere(['like', 'catalog_name_eng', $this->catalog_name_eng])
            ->andFilterWhere(['like', 'catalog_name_ru', $this->catalog_name_ru])
            ->andFilterWhere(['like', 'alias', $this->alias]);

        return $dataProvider;
    }
}
