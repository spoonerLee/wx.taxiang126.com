<?php

namespace app\modules\admin\controllers;
use Yii;
/**
 * Description of HomeController
 *
 * @author Administrator
 */
class HomeController extends AdminBaseController{
    //put your code here
    public function actionIndex() {
        return $this->render("index");
    }
}
