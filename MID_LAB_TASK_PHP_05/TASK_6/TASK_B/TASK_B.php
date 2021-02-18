<?php
if(isset($_POST['select'])){
$selected_item = $_POST['select'];
echo "selected :" .$selected_item;
}
?>
<!DOCTYPE html>
<html>

<body>

    <form method="post" action="#">
        <fieldset>
        <legend>BLOOD GROUP</legend>

            <select name="select">
                    <option value="A+" selected>A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB-">AB-</option>
                    <option value="AB+">AB+</option>
                </select>

        </fieldset>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>