<?php

namespace frontend\controllers;

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
    public $layout = 'main_1';
    
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
            $searchModel = new RequirementsPerUserSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
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
            /*return $this->redirect(['view', 'id' => $model->rpu_id]);*/
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing as model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            /*return $this->redirect(['view', 'id' => $model->rpu_id]);*/

            $model->file = UploadedFile::getInstance($model,'file');
            $fileName = $model->file->name;
            $model->file->saveAs('../../backend/web/uploaded_rpu/'. $fileName);
            $model->rpu_fileuploaded = $fileName;


            $model->save();
            return $this->redirect(['index']);
        /*
            return $this->redirect(['view', 'id' => $model->rpu_id]);*/
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
