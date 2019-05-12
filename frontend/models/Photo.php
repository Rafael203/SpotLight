<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photo".
 *
 * @property int $id
 * @property string $src
 * @property string $description
 * @property string $img_src
 * @property int $photo-cat-id
 */
class Photo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['src', 'description'], 'required'],
            [['photo-cat-id'], 'integer'],
            [['src', 'description', 'img_src'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'src' => 'Src',
            'description' => 'Description',
            'img_src' => 'Img Src',
            'photo-cat-id' => 'Photo Cat ID',
        ];
    }
}
