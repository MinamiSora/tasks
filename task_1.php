<?php
$string = "5 * (4 - 2)";
function isCorrect($string) {
    $brackets = array();
    $newString = "";
    if (substr_count($string, '(') == substr_count($string, ')')) {
        foreach (str_split($string) as $str) {
            if($str == '(') {
                array_push($brackets, $str);
            } elseif($str == ')') {
                if(empty($brackets)) {
                    return false;
                } else {
                    array_pop($brackets);
                }
            }

            $newString.= $str;

        }
        echo (($newString == $string) && empty($brackets)) ? 'true' : 'false';


    } else {
        echo 'false';

    }


}
isCorrect($string);

$string = "5 * (4 - 2(";
isCorrect($string);
