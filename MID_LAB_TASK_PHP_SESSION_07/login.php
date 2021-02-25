<?php
    session_start();
    if(isset($_SESSION['flag']))
    {
        header('location: dashboard.php');
    }
    
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <fieldset>
        <table width='100%' >
            <tr>
            <td>
                    <img src='./images/logo.png' alt="Image unavailable" height='50px'/>
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
        <legend>
            LOGIN
        </legend>
        <form action='./checklogin.php' method='POST'>
            <table> 
                <tr>
                    <td>
                        User Name:
                    </td>
                    <td>
                        <input type="text" name='logusername'>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name='logpassword'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">   
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='checkbox'>Remember Me
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit'>
                        <a href='./forgot.php'>Forgot Password?</a>
                    </td>
                </tr>
            </table>
        </form>
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