<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mail".
 *
 * @property integer $id
 * @property string $from
 * @property string $subject
 * @property string $message
 * @property integer $date
 * @property string $email
 */
class Mail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from', 'subject', 'message', 'date', 'email'], 'required'],
            [['message'], 'string'],
            [['date'], 'integer'],
            [['from', 'subject'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 120]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'from' => 'From',
            'subject' => 'Subject',
            'message' => 'Message',
            'date' => 'Date',
            'email' => 'Email',
        ];
    }
}
