<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $title
 * @property string $skype_address
 * @property string $flickr_address
 * @property string $twitter_address
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address', 'phone', 'email', 'title', 'skype_address', 'flickr_address', 'twitter_address'], 'required'],
            [['address'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
            [['email', 'skype_address', 'flickr_address', 'twitter_address'], 'string', 'max' => 120],
            [['title'], 'string', 'max' => 20],
            [['address', 'phone', 'email', 'title'], 'unique', 'targetAttribute' => ['address', 'phone', 'email', 'title'], 'message' => 'The combination of Address, Phone, Email and Title has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'title' => 'Title',
            'skype_address' => 'Skype Address',
            'flickr_address' => 'Flickr Address',
            'twitter_address' => 'Twitter Address',
        ];
    }
}
