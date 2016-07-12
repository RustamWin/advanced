<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property integer $id
 * @property string $name
 * @property string $img
 * @property string $testimonial
 * @property string $email
 * @property string $fb_address
 * @property string $in_address
 * @property string $twitter_address
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'img', 'testimonial', 'email', 'fb_address', 'in_address', 'twitter_address'], 'required'],
            [['name', 'img', 'email'], 'string', 'max' => 255],
            [['testimonial'], 'string', 'max' => 82],
            [['fb_address', 'in_address', 'twitter_address'], 'string', 'max' => 120]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'img' => 'Img',
            'testimonial' => 'Testimonial',
            'email' => 'Email',
            'fb_address' => 'Fb Address',
            'in_address' => 'In Address',
            'twitter_address' => 'Twitter Address',
        ];
    }
}
