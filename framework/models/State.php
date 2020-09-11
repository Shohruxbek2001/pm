<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "state".
 *
 * @property int $state_id
 * @property string $state_oz
 * @property string $state_eng
 * @property string $state_ru
 *
 * @property Product[] $products
 */
class State extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'state';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['state_oz', 'state_eng', 'state_ru'], 'required'],
            [['state_oz', 'state_eng', 'state_ru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'state_id' => 'ID',
            'state_oz' => 'Davlat nomi (Uzbekcha)',
            'state_eng' => 'Давлат номи (кирилча)',
            'state_ru' => 'Имя страны (русский)',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['state' => 'state_id']);
    }
}
