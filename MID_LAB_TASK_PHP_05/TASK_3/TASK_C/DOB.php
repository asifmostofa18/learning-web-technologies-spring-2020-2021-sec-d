

<html>

<head>
    <title>DOB</title>
</head>

<body>
    <form method="post" action= "#">

        <fieldset>
            <legend><b>DOB</b></legend>
            <table>
                <tr>
                    <td>dd</td>
                    <td>mm</td>
                    <td>yy</td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="day" value="<?php if(isset($_POST['day'])){ echo $_POST['day'];} ?>"> <br>
                    </td>
                    <td>
                        <input type="text" name="month" value="<?php if(isset($_POST['month'])){ echo $_POST['month'];} ?>"> <br>
                    </td>
                    <td>
                        <input type="text" name="year"  value="<?php if(isset($_POST['year'])){ echo $_POST['year'];} ?>"> <br>
                    </td>

                </tr>

            </table>
            
            <input type="Submit" name="submit">


        </fieldset>

    </form>

</body>

</html>