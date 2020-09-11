<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property int $brand_id
 * @property string $brand_oz
 * @property string $brand_eng
 * @property string $brand_ru
 *
 * @property Product[] $products
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_oz', 'brand_eng', 'brand_ru'], 'required'],
            [['brand_oz', 'brand_eng', 'brand_ru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'brand_id' => 'ID',
            'brand_oz' => 'Brand (Uzbekcha)',
            'brand_eng' => 'Brand (english)',
            'brand_ru' => 'Brand (Русский)',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['brand_id' => 'brand_id']);
    }
}
