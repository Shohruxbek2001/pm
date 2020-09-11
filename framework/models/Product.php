<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $product_id
 * @property string|null $alias
 * @property string $product_name_oz
 * @property string $product_name_uz
 * @property string $product_name_ru
 * @property int $catalog_id
 * @property int|null $category_id
 * @property int $goods_id
 * @property int $state_id
 * @property int $brand_id
 * @property string $details_oz
 * @property string $details_eng
 * @property string $details_ru
 * @property string $price_name_oz
 * @property string $price_name_eng
 * @property string $price_name_ru
 * @property string $no_discount_ru
 * @property string $no_discount_oz
 * @property string $no_discount_eng
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property string $image4
 * @property string $status
 * @property string $height
 * @property string $length
 * @property string $width
 * @property float $evaluation
 *
 * @property Brand $brand0
 * @property Catalog $catalog
 * @property Category $category
 * @property Goods $goods
 * @property State $state0
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name_oz', 'product_name_eng', 'product_name_ru', 'catalog_id', 'goods_id', 'state_id', 'brand_id', 'details_oz', 'details_eng', 'details_ru', 'price_name_oz', 'price_name_eng', 'price_name_ru', 'image1', 'image2', 'image3', 'image4', 'height','width', 'length', 'evaluation'], 'required'],
            [['catalog_id', 'category_id', 'goods_id', 'state_id', 'brand_id'], 'integer'],
            [['details_oz', 'details_eng', 'details_ru', 'status'], 'string'],
            [['evaluation'], 'number'],
            [['alias', 'product_name_oz', 'product_name_eng', 'product_name_ru','no_discount_oz','no_discount_eng','no_discount_ru', 'price_name_oz', 'price_name_eng', 'price_name_ru', 'image1', 'image2', 'image3', 'image4'], 'string', 'max' => 255],
            [['height', 'length','width'], 'string', 'max' => 45],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'brand_id']],
            [['catalog_id'], 'exist', 'skipOnError' => true, 'targetClass' => Catalog::className(), 'targetAttribute' => ['catalog_id' => 'catalog_id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'category_id']],
            [['goods_id'], 'exist', 'skipOnError' => true, 'targetClass' => Goods::className(), 'targetAttribute' => ['goods_id' => 'goods_id']],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => State::className(), 'targetAttribute' => ['state_id' => 'state_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'ID',
            'alias' => 'Qisqartma',
            'product_name_oz' => 'Mahsulot nomi (Uzbekcha)',
            'product_name_eng' => 'Product name (english)',
            'product_name_ru' => 'Наименование товара (русский)',
            'catalog_id' => '',
            'category_id' => '',
            'goods_id' => '',
            'state_id' => '',
            'brand_id' => '',
            'details_oz' => 'Tafsilot (Uzbekcha)',
            'details_eng' => 'Details (english) ',
            'details_ru' => 'подробности (русский)',
            'price_name_oz' => 'Narxi (Uzbekcha)',
            'price_name_eng' => 'Cost (english)',
            'price_name_ru' => 'Стоимость (русский)',
            'no_discount_oz'=>'chegirmasiz narx (Uzbekcha)',
            'no_discount_eng'=>'no discount (english)',
            'no_discount_ru'=>'цена со скидкой (русский)',
            'image1' => 'Rasm 1',
            'image2' => 'Rasm 2',
            'image3' => 'Rasm 3',
            'image4' => 'Rasm 4',
            'status' => 'Holat',
            'height' => 'Balandlik',
            'length' => 'Uzunlik',
            'width'=>'eni',
            'evaluation' => 'Reytingi',
        ];
    }

    /**
     * Gets query for [[Brand0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrand0()
    {
        return $this->hasOne(Brand::className(), ['brand_id' => 'brand_id']);
    }

    /**
     * Gets query for [[Catalog]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatalog()
    {
        return $this->hasOne(Catalog::className(), ['catalog_id' => 'catalog_id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['category_id' => 'category_id']);
    }

    /**
     * Gets query for [[Goods]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGoods()
    {
        return $this->hasOne(Goods::className(), ['goods_id' => 'goods_id']);
    }

    /**
     * Gets query for [[State0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getState0()
    {
        return $this->hasOne(State::className(), ['state_id' => 'state_id']);
    }
}
