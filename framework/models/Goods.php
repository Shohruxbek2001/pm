<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property int $goods_id
 * @property string $name_oz
 * @property string $name_eng
 * @property string $name_ru
 *
 * @property Product[] $products
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_oz', 'name_eng', 'name_ru'], 'required'],
            [['name_oz', 'name_eng', 'name_ru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => 'ID',
            'name_oz' => 'Tovar nomi (Uzbekcha)',
            'name_eng' => 'goods name (english)',
            'name_ru' => 'Наименование товара (русский)',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['goods_id' => 'goods_id']);
    }
}
