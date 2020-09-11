<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalog".
 *
 * @property int $catalog_id
 * @property string $catalog_name_oz
 * @property string $catalog_name_uz
 * @property string $catalog_name_ru
 * @property int $category_type_id
 * @property string $alias
 *
 * @property CategoryType $categoryType
 * @property Product[] $products
 */
class Catalog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['catalog_name_oz', 'catalog_name_eng', 'catalog_name_ru', 'category_type_id', 'alias'], 'required'],
            [['category_type_id'], 'integer'],
            [['catalog_name_oz', 'catalog_name_eng', 'catalog_name_ru', 'alias'], 'string', 'max' => 255],
            [['category_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryType::className(), 'targetAttribute' => ['category_type_id' => 'category_type_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'catalog_id' => 'Catalog ID',
            'catalog_name_oz' => 'Katalog nomi (Uzbekcha)',
            'catalog_name_eng' => 'Directory name (english)',
            'catalog_name_ru' => 'Имя каталога (русский)',
            'category_type_id' => '',
            'alias' => 'Qisqartma',
        ];
    }

    /**
     * Gets query for [[CategoryType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryType()
    {
        return $this->hasOne(CategoryType::className(), ['category_type_id' => 'category_type_id']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['catalog_id' => 'catalog_id']);
    }
}
