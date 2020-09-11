<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category_type".
 *
 * @property int $category_type_id
 * @property string $category_type_oz
 * @property string $category_type_eng
 * @property string $category_type_ru
 * @property string $alias
 * @property string $image
 *
 * @property Catalog[] $catalogs
 */
class CategoryType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_type_oz', 'category_type_eng', 'category_type_ru','image', 'alias'], 'required'],
            [['category_type_oz', 'category_type_eng', 'category_type_ru', 'image','alias'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'category_type_id' => 'ID',
            'category_type_oz' => 'Kategoriya turi (Uzbekcha)',
            'category_type_eng' => 'Category type (english)',
            'category_type_ru' => 'Тип категории (русский)',
            'image'=>'Rasm',
            'alias' => 'Qisqartma',
        ];
    }

    /**
     * Gets query for [[Catalogs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogs()
    {
        return $this->hasMany(Catalog::className(), ['category_type_id' => 'category_type_id']);
    }
}
