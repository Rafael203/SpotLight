<?php

namespace frontend\modules\photo\controllers;

use app\models\PhotoCategories;
use app\models\Photo;
use yii\web\Controller;

/**
 * Default controller for the `photo` module
 */
class PhotoController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex($cat_id = 0, $id = 0)
    {
        $projs = Photo::find()->asArray()->all();
        if($cat_id){
            $projs = $projs->where(['photo-cat-id' => $cat_id]);
        }        $cat_ph = PhotoCategories::find()->asArray()->all();

        return $this->render('index', ['projs' => $projs, 'cat_ph' => $cat_ph]);

    }
    public  function  actionPhoto($id = 0){
        $one_photo = Photo::find()->where(['id' => $id])->asArray()->one();
        return $this->render('photo',['photo' => $one_photo]);

    }
}
