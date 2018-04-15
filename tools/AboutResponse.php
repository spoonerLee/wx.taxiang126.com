<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\tools;
use Yii;
/**
 * Description of Response
 *
 * @author Administrator
 */
class AboutResponse {
    public static function sendData($data){
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_JSON;
        $response->data = $data;
    }
}
