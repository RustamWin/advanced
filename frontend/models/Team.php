<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property string $id
 * @property string $name
 * @property string $img
 * @property string $testimonial
 * @property string $email
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

    public function afterFind() {
        $this->img = "uploads/team/" . $this->img;
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'img', 'testimonial', 'email'], 'required'],
            [['name', 'img', 'email'], 'string', 'max' => 255],
            [['testimonial'], 'string', 'max' => 82]
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
        ];
    }
}
