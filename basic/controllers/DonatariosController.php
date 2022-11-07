<?php

namespace app\controllers;

use app\models\Donatarios;
use app\models\DonatariosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DonatariosController implements the CRUD actions for Donatarios model.
 */
class DonatariosController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }


    /**
     * Displays a single Donatarios model.
     * @param int $idcaddonatario Idcaddonatario
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idcaddonatario)
    {
        return $this->render('view', [
            'model' => $this->findModel($idcaddonatario),
        ]);
    }

    /**
     * Creates a new Donatarios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Donatarios();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idcaddonatario' => $model->idcaddonatario]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Donatarios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idcaddonatario Idcaddonatario
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idcaddonatario)
    {
        $model = $this->findModel($idcaddonatario);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idcaddonatario' => $model->idcaddonatario]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Donatarios model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idcaddonatario Idcaddonatario
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idcaddonatario)
    {
        $this->findModel($idcaddonatario)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Donatarios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idcaddonatario Idcaddonatario
     * @return Donatarios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idcaddonatario)
    {
        if (($model = Donatarios::findOne(['idcaddonatario' => $idcaddonatario])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
