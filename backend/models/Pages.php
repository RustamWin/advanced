<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property integer $id
 * @property string $title
 * @property string $icon
 * @property string $meta_desc
 * @property string $meta_key
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'icon', 'meta_desc', 'meta_key'], 'required'],
            [['title', 'icon'], 'string', 'max' => 20],
            [['meta_desc'], 'string', 'max' => 120],
            [['meta_key'], 'string', 'max' => 30]
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
            'meta_desc' => 'Meta Desc',
            'meta_key' => 'Meta Key',
        ];
    }
}
