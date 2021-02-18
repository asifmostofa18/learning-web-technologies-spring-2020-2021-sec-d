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

<!DOCTYPE html>
<html>

<body>

    <form method="post" action=#>
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other <br>

        </fieldset>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>