<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property string $id
 * @property string $title
 * @property string $img
 * @property string $description
 * @property string $category
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    public function afterFind() {
        $this->img = "uploads/portfolio/".$this->img;
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'img', 'description', 'category'], 'required'],
            [['description'], 'string'],
            [['title', 'img'], 'string', 'max' => 255],
            [['category'], 'string', 'max' => 100]
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
            'img' => 'Img',
            'description' => 'Description',
            'category' => 'Category',
        ];
    }
}
