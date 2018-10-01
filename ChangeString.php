<?php


class ChangeString
{
    protected $alph = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r",
        "s", "t", "u", "v", "w", "x", "y", "z"];


    public function build($str){

        $array = str_split($str);
        $temp = '';

        for($i = 0; $i < count($array); $i++) {
            $char = $array[$i];
            $charLower = strtolower($char);
            $isUpper = ctype_upper ($char);
            $key = array_search($charLower, $this->alph);

            if(is_int($key)) {
                $next = ($charLower == end($this->alph)) ? 0 : $key + 1;
                $newChar = ($isUpper) ? strtoupper($this->alph[$next]) : $this->alph[$next];
                $temp .= $newChar;
            }else{

                $temp .= $array[$i];
            }
        }
        return $temp;
    }
}