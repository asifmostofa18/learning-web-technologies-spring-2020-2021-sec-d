<?php

    if(isset($_POST['submit'])){

        $day = $_POST['day'];
        $month = $_POST['mon'];
        $year = $_POST['yr'];


        if($day == "" ||  $month == "" ||  $year == "" ){
            echo "null submission...";
        }else{
            echo $day;
            echo $month;
            echo $year;
        }



    }else{
        echo "invalid request...";
    }
?>
