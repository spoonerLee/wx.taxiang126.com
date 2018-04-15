<?php
namespace app\modules\admin\controllers;
use yii\web\Controller;
use Yii;
/**
 * Description of AdminBaseController
 *
 * @author Administrator
 */
class AdminBaseController extends Controller{
    //put your code here
    
    public function actions()
    {
        return [
            'error' => ['class' => 'yii\web\ErrorAction',], 
        ];
    }
    
    public function beforeAction($action) {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(\yii\helpers\Url::to(["/admin/default/index"]));
        }        
        return parent::beforeAction($action);      
    }
     
}
