<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property int $id
 * @property string $src
 * @property string $description
 * @property int $isVideo
 * @property string $img_src
 * @property int $photo-cat-id
 * @property int $video-cat-id
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['src', 'description'], 'required'],
            [['isVideo', 'photo-cat-id', 'video-cat-id'], 'integer'],
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
            'isVideo' => 'Is Video',
            'img_src' => 'Img Src',
            'photo-cat-id' => 'Photo Cat ID',
            'video-cat-id' => 'Video Cat ID',
        ];
    }
}
