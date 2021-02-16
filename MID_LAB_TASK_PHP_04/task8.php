<?php
    $Item = array(
        array('1','2','3','A'),
        array('1','2','B','C'),
        array('1','D','E','F'),
    );

    echo "Shape 1:\n";
    $temp = 2;
    for($i = 0; $i<3; $i++)
    {
        for($j = 0; $j <3-$i; $j++)
        {
            echo $Item[$i][$j];
        }
        echo "\n";
    }


    echo "\nShape 2:\n";
    $temp = 2;
    for($i = 0; $i<3; $i++)
    {
        for($j = 3-$i; $j <4; $j++)
        {
            echo $Item[$i][$j];
            
        }
        echo "\n";
    }

?>