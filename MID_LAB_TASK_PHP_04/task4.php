<?php
    $value1 = 1;
    $value2 = 2;
    $value3 = 3;

    if($value1 > $value2 && $value1 > $value3)
    {
        echo $value1.' Largest value';
    }
    elseif($value2 > $value1 && $value2 > $value3)
    {
        echo $value2.' Largest value';
    }
    elseif($value3 > $value1 && $value3 > $value1)
    {
        echo $value3.' Largest value';
    }
?>