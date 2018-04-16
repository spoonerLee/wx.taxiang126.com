<?php

namespace app\modules\admin\controllers;

class MenuController extends AdminBaseController{
    //put your code here
    public function actionIndex() {
        $access_token=Yii::$app->request->cookies->getValue('access_token', 'en');
        $url="https://api.weixin.qq.com/cgi-bin/menu/get?access_token=".$access_token;
        echo file_get_contents($url);
    }
}
