<?php

namespace backend\controllers;

use Yii;
use common\models\RequirementsPerUser;
use common\models\RequirementsPerUserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * RequirementsPerUserController implements the CRUD actions for RequirementsPerUser model.
 */
class RequirementsPerUserController extends Controller
{
    public $layout = 'custom';
    
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all RequirementsPerUser models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->can('access-backend')) {  
            $searchModel = new RequirementsPerUserSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        } else {
            throw new ForbiddenHttpException("Sorry. You are not allow to access this page. For admin only.");
        }
    }

    /**
     * Displays a single RequirementsPerUser model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new RequirementsPerUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model = new RequirementsPerUser();
            $imageName = $model->rpu_datefilesubmitted;
            $model->file = UploadedFile::getInstance($model,'file');
            $model->file = saveAs('uploaded_rpu/'.$imageName.'.'.$model->file->extension );
            
            $model->rpu_fileuploaded = 'uploaded_rpu/'.$imageName.'.'.$model->file->extension;
            /*return $this->redirect(['view', 'id' => $model->rpu_id]);*/
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing RequirementsPerUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            /*return $this->redirect(['view', 'id' => $model->rpu_id]);*/
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing RequirementsPerUser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RequirementsPerUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RequirementsPerUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RequirementsPerUser::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
