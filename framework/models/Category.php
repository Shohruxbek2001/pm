<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $category_id
 * @property string $category_name_oz
 * @property string $category_name_eng
 * @property string $category_name_ru
 * @property string $alias
 *
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_name_oz', 'category_name_eng', 'category_name_ru', 'alias'], 'required'],
            [['category_name_oz', 'category_name_eng', 'category_name_ru', 'alias'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'category_id' => ' ID',
            'category_name_oz' => 'Kategoriya nomi (Uzbekcha)',
            'category_name_eng' => 'Category name (english)',
            'category_name_ru' => 'Название категории (русский)',
            'alias' => 'Qisqartma',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'category_id']);
    }
}
