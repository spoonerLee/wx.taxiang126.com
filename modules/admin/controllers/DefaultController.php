<?php

namespace app\modules\admin\controllers;
use app\models\LoginForm;
use Yii;
use app\tools\AboutModel;
use app\tools\AboutResponse;
/**
 * Default controller for the `admin` module
 */
class DefaultController extends \yii\web\Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
    
    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(\yii\helpers\Url::to(["/admin/home/index"]));
        }else{
            return AboutResponse::sendData(AboutModel::getError($model->getErrors()));
        }   
    }
}
