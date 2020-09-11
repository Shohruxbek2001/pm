<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $about_id
 * @property string|null $phone_number
 * @property string|null $home_number
 * @property string|null $ofice_number
 * @property string|null $detals
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone_number', 'home_number', 'ofice_number', 'detals'], 'string', 'max' => 45],
            [['about_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'phone_number' => 'Telefon Raqam',
            'home_number' => 'Uy Raqami',
            'ofice_number' => 'Ofice Raqami',
            'detals' => 'Detals',
        ];
    }
    public function getProducts()
    {
        return $this->hasMany(About::className(), ['about_id' => 'about_id']);
    }
}
