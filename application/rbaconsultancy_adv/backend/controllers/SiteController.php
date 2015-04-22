<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;
use common\models\ServiceList;
use common\models\UserMain;
use common\models\Services;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
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
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {

        $servicesCount = ServiceList::find()->count();
        
        $userCount = UserMain::find()->count();

        $applicationCount = Services::find()->count();
        $penAppCount = Services::find()->where('service_status = \'Pending\'')->count();
        $ongoingAppCount = Services::find()->where('service_status = \'Ongoing\'')->count();
        $comAppCount = Services::find()->where('service_status = \'Completed\'')->count();

        if (Yii::$app->user->can('access-backend')) {
            return $this->render('index',[
                    'servicesCount' => $servicesCount,
                    'userCount' => $userCount,
                    'applicationCount' => $applicationCount,
                    'penAppCount' => $penAppCount,
                    'ongoingAppCount' => $ongoingAppCount,
                    'comAppCount' => $comAppCount
                ]);
        } else {
            throw new ForbiddenHttpException("Sorry. You are not allow to access this page. For admin only.");
        }
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        
            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->goBack();
            } else {
                return $this->render('login', [
                    'model' => $model,
                ]);
            }
            

    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
