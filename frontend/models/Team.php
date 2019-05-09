<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property string $insta_link
 * @property string $facebook_link
 * @property string $vk_link
 * @property string $about
 * @property string $what_say
 * @property string $image
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'email', 'insta_link', 'facebook_link', 'vk_link', 'about', 'what_say', 'image'], 'required'],
            [['name', 'surname', 'about', 'what_say'], 'string', 'max' => 120],
            [['email', 'insta_link', 'facebook_link', 'vk_link', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'email' => 'Email',
            'insta_link' => 'Insta Link',
            'facebook_link' => 'Facebook Link',
            'vk_link' => 'Vk Link',
            'about' => 'About',
            'what_say' => 'What Say',
            'image' => 'Image',
        ];
    }
}
