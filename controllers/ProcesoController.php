<?php

namespace app\controllers;

use Yii;
use app\models\Proceso;
use app\models\ProcesoBuscar;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProcesoController implements the CRUD actions for Proceso model.
 */
class ProcesoController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Proceso models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProcesoBuscar();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Proceso model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Proceso model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Proceso();

        if ($model->load(Yii::$app->request->post())) {
            $model->fecha_creacion=date("Y-m-d");
            if($model->save()){
               return $this->redirect(['view', 'id' => $model->id_proceso]); 
            }          
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Proceso model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->presupuesto=str_replace(',','',$model->presupuesto);
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id_proceso]);
            }
            
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Proceso model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Proceso model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Proceso the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Proceso::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    
    
      public function actionObtdivisadolar() {
                  
        $sql = "SELECT oa.operador,dc.valor_divisa2
               FROM divisa_conversion dc 
               inner join operador_aritmetico oa on (oa.id_operador_aritmetico=dc.id_operador_aritmetico)
               where dc.id_divisa1=:divisa1 and dc.id_divisa2=:divisa2";
        try {
            
            $Presupuesto=Yii::$app->request->post()["procesoPresupuesto"];
            
            $resultado = Yii::$app->db->createCommand($sql)
                    ->bindValue(':divisa1', Yii::$app->request->post()["divisa1"])
                    ->bindValue(':divisa2', Yii::$app->request->post()["divisa2"])
                    ->queryOne();
            
            if (count($resultado) > 0) {              
                $valorDolar=$Presupuesto.$resultado['operador'].$resultado['valor_divisa2'];
                
                switch($resultado['operador']) {              
                case '*': $valorDolar= $Presupuesto * $resultado['valor_divisa2'];  
                    break;
                case '/': $valorDolar= $Presupuesto / $resultado['valor_divisa2']; 
                    break;
                }
               
                 echo json_encode(['codigo' => 1, 'mensaje' => $valorDolar]);
                 die;
            }
            
        } catch (Exception $exc) {
               echo json_encode(['codigo' => 0, 'mensaje' => 'Error al traer información.']);
        }



        
          
          
    
    }

}
