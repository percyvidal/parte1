<?php


class ClearPar
{

    public function build($str = ''){

        $array = str_split($str);
        $temp = '';
        $start = false;
        $searching = '';
        $sOpen = '(';
        $sClose = ')';

        for($i = 0; $i < count($array); $i++) {
            if($array[$i] != $sOpen && $array[$i] != $sClose){
                $temp = 'String no válido';
                break;
            }
            if($start && $searching == $array[$i]){
                $temp .= $array[$i];
                $searching = ($array[$i] == $sOpen) ? $sClose : $sOpen;
            }
            if($array[$i] == $sOpen && !$start){
                $start = true;
                $temp .= $array[$i];
                $searching = $sClose;
            }
            if($i == count($array) - 1 && $searching ==  $sClose){
                $temp   =  substr($temp, 0, -1);
            }
        }

        return $temp;
    }



}