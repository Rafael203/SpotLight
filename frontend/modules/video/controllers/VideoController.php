<?php

namespace frontend\modules\video\controllers;

use yii\web\Controller;
use app\models\Video;
use app\models\VideoCategories;

/**
 * Default controller for the `video` module
 */
class VideoController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex($id = 0, $vid_id = 0)
    {
        var_dump($vid_id);
        die;
      $projs = Video::find()->asArray()->all();
      $cat_vid = VideoCategories::find()->asArray()->all();

      return $this->render('index', ['projs' => $projs, 'cat_vid' => $cat_vid]);
    }

    public function actionVideo($id = 0)
    {
      $video = Video::find()->where(['id' => $id])->asArray()->one();

      return $this->render('video', ['video' => $video]);
    }
}
