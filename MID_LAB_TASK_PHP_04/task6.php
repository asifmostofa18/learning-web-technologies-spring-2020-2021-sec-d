<?php
    $universities = array('BUET', 'KUET', 'SUST', 'NSU', 'AIUB');
    $searchItem = 'AIUB';

    foreach($universities as $university)
    {
        if($university === $searchItem)
        {
            echo $university." Congrats!!!!!!!! You have got your desire search Item";
        }
    }
?>
