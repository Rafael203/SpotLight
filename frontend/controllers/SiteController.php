<?php
namespace frontend\controllers;

use app\models\Info;
use app\models\PhotoCategories;
use app\models\Projects;
use app\models\Services;
use app\models\Team;
use app\models\VideoCategories;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $services = Services::find()->asArray()->all();
        $team = Team::find()->limit(3)->asArray()->all();

        return $this->render('index', ['serv' =>$services, 'team' => $team]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        $info = new Info();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
                'info' => $info,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $team = Team::find()->limit(3)->asArray()->all();

        return $this->render('about', ['team' => $team]);
    }

    public function actionPhoto($cat_id = 0)
    {
        $projs = Projects::find()->asArray()->all();
       // echo '<pre>';
       // var_dump($projs);
       // die;
        if($cat_id){
            $projs = $projs->where(['photo-cat-id' => $cat_id]);
        }
        $projs = Projects::find()->asArray()->all();
        $cat_ph = PhotoCategories::find()->asArray()->all();

        return $this->render('photo', ['projs' => $projs, 'cat_ph' => $cat_ph]);
    }

    public function actionVideo()
    {
        $projs = Projects::find()->asArray()->all();
        $cat_vid = VideoCategories::find()->asArray()->all();

        return $this->render('video', ['projs' => $projs, 'cat_vid' => $cat_vid]);
    }



}
