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
        if (!Yii::$app->request->cookies->has('language')){
            $url="https://api.weixin.qq.com/cgi-bin/token?"
                . "grant_type=client_credential"
                . "&appid=".Yii::$app->params['appid']
                . "&secret=".Yii::$app->params['appsecret'];
            $response= file_get_contents($url);
            $data= json_decode($response);
            Yii::$app->response->cookies->add(new \yii\web\Cookie([
                'name' => 'access_token',
                'value' => $data["access_token"],
                'expires_in' => 7200,
            ]));
        }
        

        return parent::beforeAction($action);      
    }
     
}
