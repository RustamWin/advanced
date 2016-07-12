<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property string $intro_text
 * @property string $full_text
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['intro_text', 'full_text'], 'required'],
            [['full_text'], 'string'],
            [['intro_text'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'intro_text' => 'Intro Text',
            'full_text' => 'Full Text',
        ];
    }
}
