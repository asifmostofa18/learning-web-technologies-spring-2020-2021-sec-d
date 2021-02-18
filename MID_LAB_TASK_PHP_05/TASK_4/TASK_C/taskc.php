<?php
$radioVal = $_POST["gender"];

if($radioVal == "male")
{
    echo"Gender: male";
}
else if ($radioVal == "female")
{
    echo("Gender: female");
}
else if ($radioVal == "other")
{
    echo("Gender: other");
}
?>

<!DOCTYPE html>
<html>

<body>

    <form method="post" action="#">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="male" <?php if($_POST['gender'] == 'male')  echo ' checked="checked"';?>> Male
            <input type="radio" name="gender" value="female"<?php if($_POST['gender'] == 'female') echo ' checked="checked"';?>> Female
            <input type="radio" name="gender" value="other"<?php if($_POST['gender'] == 'other')  echo ' checked="checked"';?>> Other <br>

        </fieldset>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>
