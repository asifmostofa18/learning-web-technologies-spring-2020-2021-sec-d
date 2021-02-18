<?php
$radioVal = $_POST["gender"];

if($radioVal == "male")
{
    echo"Gender: Male";
}
else if ($radioVal == "female")
{
    echo("Gender: Female");
}
else if ($radioVal == "other")
{
    echo("Gender: Other");
}
?>