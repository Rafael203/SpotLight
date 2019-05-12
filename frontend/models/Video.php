<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string $link
 * @property string $title
 * @property string $description
 * @property int $cat_id
 * @property string $prew_img
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link', 'title', 'description', 'cat_id', 'prew_img'], 'required'],
            [['description'], 'string'],
            [['cat_id'], 'integer'],
            [['link', 'prew_img'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link' => 'Link',
            'title' => 'Title',
            'description' => 'Description',
            'cat_id' => 'Cat ID',
            'prew_img' => 'Prew Img',
        ];
    }
}
