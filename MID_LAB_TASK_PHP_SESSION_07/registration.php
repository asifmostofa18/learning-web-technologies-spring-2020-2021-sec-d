<?php
    session_start();
    if(isset($_SESSION['flag']))
    {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<head>
    
    <title>Registration</title>
</head>
<body>
    <fieldset>
        <table width='100%' >
            <tr>
                <td>
                    <img src='./images/logo.png' alt="logo" height='50px'/>
                </td>
                <td align='right'>
                    <nav>
                        <a href='./home.php'>Home</a> |
                        <a href='./login.php'>Log In</a> |
                        <a href='./registration.php'>Registration</a>
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>

    <fieldset>
        <fieldset>
            <legend>
                <b>REGISTRATION</b>
            </legend>
            <form action='./checkregistration.php' method='POST' >
                <table align="">
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input type="text" name='name'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="email" name='email'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Username:
                        </td>
                        <td>
                            <input type="username" name='username'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name='password'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Confirm Password:
                        </td>
                        <td>
                            <input type="password" name='confirmpassword'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>
                                    <b>Gender</b>
                                </legend>
                                <input type='radio' name='gender' value='male'>Male
                                <input type='radio' name='gender' value='female'>Female
                                <input type='radio' name='gender' value='others'>Others
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>
                                    <b>Date of Birth</b>
                                </legend>
                                <input type='number' name=date max=31 min=1>/
                                <input type='number' name=month max=12 min=1>/
                                <input type='number' name=year max=2100 min=1900>
                                <label><i>dd/mm/yyyy</i></label>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type='submit' value='Submit'>
                            <input type='reset' value='Reset'>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </fieldset>
    <fieldset>
        <center>
            <label>
                Copyright © 2017
            </label>
        </center>
    </fieldset>
</body>
</html>