<?php

class CompleteRange
{
    public function build($array = []){
        $temp = array();
        foreach ($array as $key=>$value){
            array_push($temp, $value);
            if(isset($array[$key+1])){
                if($array[$key] != $array[$key+1] -1){
                    $range = range($array[$key]+1, $array[$key+1] -1);
                    $temp = array_merge($temp, $range);
                }
            }
        }
        return $temp;

    }
}
