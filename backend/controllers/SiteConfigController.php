<?php

namespace backend\controllers;

use Yii;
use backend\models\SiteConfig;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SiteConfigController implements the CRUD actions for SiteConfig model.
 */
class SiteConfigController extends Controller
{
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
     * Lists all SiteConfig models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => SiteConfig::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SiteConfig model.
     * @param string $address
     * @param integer $phone
     * @param string $email
     * @param string $title
     * @return mixed
     */
    public function actionView($address, $phone, $email, $title)
    {
        return $this->render('view', [
            'model' => $this->findModel($address, $phone, $email, $title),
        ]);
    }

    /**
     * Creates a new SiteConfig model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SiteConfig();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'address' => $model->address, 'phone' => $model->phone, 'email' => $model->email, 'title' => $model->title]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SiteConfig model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $address
     * @param integer $phone
     * @param string $email
     * @param string $title
     * @return mixed
     */
    public function actionUpdate($address, $phone, $email, $title)
    {
        $model = $this->findModel($address, $phone, $email, $title);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'address' => $model->address, 'phone' => $model->phone, 'email' => $model->email, 'title' => $model->title]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SiteConfig model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $address
     * @param integer $phone
     * @param string $email
     * @param string $title
     * @return mixed
     */
    public function actionDelete($address, $phone, $email, $title)
    {
        $this->findModel($address, $phone, $email, $title)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SiteConfig model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $address
     * @param integer $phone
     * @param string $email
     * @param string $title
     * @return SiteConfig the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($address, $phone, $email, $title)
    {
        if (($model = SiteConfig::findOne(['address' => $address, 'phone' => $phone, 'email' => $email, 'title' => $title])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
