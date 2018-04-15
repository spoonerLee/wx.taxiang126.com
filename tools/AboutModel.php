<?php

namespace app\tools;
class AboutModel {
    public static function getError($arr){
        $msg=[];
        foreach($arr as $li){
            foreach ($li as $val){
                $msg[]=$val;
            }    
        } 
        return empty($msg)?"":implode(",", $msg);
    }
}
