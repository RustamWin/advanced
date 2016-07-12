<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slides".
 *
 * @property string $id
 * @property string $img
 * @property string $caption
 * @property integer $hide
 */
class Slides extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slides';
    }

    public function afterFind() {
        $this->img = "uploads/slider/" . $this->img;
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img', 'caption', 'hide'], 'required'],
            [['caption'], 'string'],
            [['hide'], 'integer'],
            [['img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'caption' => 'Caption',
            'hide' => 'Hide',
        ];
    }
}
