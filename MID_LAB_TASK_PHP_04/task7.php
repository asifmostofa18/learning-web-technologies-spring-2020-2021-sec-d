<?php
    $num = array("1","2","3");
    $alph = array("A", "B","C","D","E","F");

    echo "Shape 1:\n";
    for($i = 0; $i<3; $i++)
    {
        for($j = 0; $j < $i+1; $j++)
        {
            echo "*";
        }
        echo "\n";
    }

    echo "\nShape 2:\n";
    for($i = count($num); $i>=0; $i--)
    {
        for($j = 0; $j < $i; $j++)
        {
            echo $num[$j];
        }
        echo "\n";
    }

    echo "Shape 3:\n";
    $count= 0;
    for($i = 0; $i<3; $i++)
    {
        for($j = 0; $j <= $i; $j++)
        {
            echo $alph[$count];
            $count=$count+1;
        }
        echo "\n";
    }
?>