<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "basic".
 *
 * @property int $basic_id
 * @property string $name
 * @property string $details
 * @property string $image
 */
class Basic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'basic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'details', 'image'], 'required'],
            [['name', 'details'], 'string', 'max' => 45],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'basic_id' => 'Basic ID',
            'name' => 'Name',
            'details' => 'Details',
            'image' => 'Image',
        ];
    }
}
