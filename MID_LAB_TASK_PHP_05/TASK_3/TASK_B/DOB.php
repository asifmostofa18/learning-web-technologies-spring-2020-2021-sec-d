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



    }
?>
<html>
<head>
    <title>Date of Birth Input</title>
</head>
<body>
    <form method="post" action=#>

        <fieldset>
                <legend><b>DOB</b></legend>
                    <table>
                        <tr>
                            <td>
                                dd
                            </td>
                            <td>
                                mm
                            </td>
                            <td>
                                yy
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name="day" value="">/
                            </td>
                            <td>
                                <input type="text" name="mon" value="">/
                            </td>
                            <td>
                                <input type="text" name="yr" value="">
                            </td>

                        </tr>

                    </table>
                    
                    <input type="Submit" name="submit">


            </fieldset>

    </form>

</body>
</html>