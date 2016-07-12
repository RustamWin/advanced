<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property string $id
 * @property string $title
 * @property string $icon
 * @property string $text
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'icon', 'text'], 'required'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['icon'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'icon' => 'Icon',
            'text' => 'Text',
        ];
    }
}
