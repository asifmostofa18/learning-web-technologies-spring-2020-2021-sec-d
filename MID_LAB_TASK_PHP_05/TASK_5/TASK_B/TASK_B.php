<?php
$radioVal = $_POST["checkbox"];

if($radioVal == "SSC")
{
    echo"DEGREE: SSC";
}
else if ($radioVal == "HSC")
{
    echo"DEGREE: HSC";
}
else if ($radioVal == "BSC")
{
    echo"DEGREE: BSC";
}
else if ($radioVal == "MSC")
{
    echo"DEGREE: MSC";
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="#">
    <fieldset>
    <legend>Degree</legend>

    <label><input type="checkbox" class="radio" value="SSC" name="checkbox" />SSC</label>
    <label><input type="checkbox" class="radio" value="HSC" name="checkbox" />HSC</label>
    <label><input type="checkbox" class="radio" value="BSC" name="checkbox" />BSC</label>
    <label><input type="checkbox" class="radio" value="BSC" name="checkbox" />MSC</label>

    </fieldset>

    <br>
    <input type="submit" name="submit" value="Submit">
    
</form> 
</body>
</html>