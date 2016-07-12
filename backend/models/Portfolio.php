<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property integer $id
 * @property string $title
 * @property string $img
 * @property string $full
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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'img', 'full', 'description', 'category'], 'required'],
            [['full'], 'string'],
            [['title'], 'string', 'max' => 30],
            [['img'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 80],
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
            'full' => 'Full',
            'description' => 'Description',
            'category' => 'Category',
        ];
    }
}
