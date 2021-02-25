<?php
    session_start();
    if($_SESSION['flag'] != true)
    {
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT PROFILE</title>
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
                        <label>Logged in as <a href='./home.php'> <?php echo $_SESSION['username'] ?></a> </label>|
                        <a href='./logout.php'>Log Out</a>
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <table border="1px solid black" width='100%'>
        <tr>
            <td width='40%'>
                <label>Account</label>
                <br>
                <hr>
                <ul>
                    <li><a href='./dashboard.php'>Dashboard</a></li>
                    <li><a href='./profile.php'>View Profile</a></li>
                    <li><a href='./editprofile.php'>Edit Profile</a></li>
                    <li><a href='./changepic.php'>Change Profile Picture</a></li>
                    <li><a href='./changepass.php'>Change Password</a></li>
                    <li><a href='./logout.php'>Logout</a></li>
                </ul>
            </td>
            <td>
                <fieldset>
                    <legend><b>EDIT PROFILE</b></legend>
                    <form action='./updateprofile.php' method='POST' >
                        <table width='100%'> 
                            <tr>
                                <td>
                                    Name:
                                </td>
                                <td>
                                    <input type="text" name='name' value="<?php echo $_SESSION['name']?>">
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
                                    <input type="email" name='email' value="<?php echo $_SESSION['email']?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                                <td>Gender:</td>
                                <td>
                                    <input type='radio' name='gender' value='male'>Male
                                    <input type='radio' name='gender' value='female'>Female
                                    <input type='radio' name='gender' value='others'>Others
                                </td>
                            <tr>
                                <td>Date of Birth:</td>
                                <td colspan="2">
                                    <input type='number' name=date max=31 min=1 value="<?php echo $_SESSION['date']?>">/
                                    <input type='number' name=month max=12 min=1 value="<?php echo $_SESSION['month']?>">/
                                    <input type='number' name=year max=3000 min=1950 value="<?php echo $_SESSION['year']?>">
                                    <label><i>dd/mm/yyyy</i></label>
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
            </td>
        </tr>
    </table>
    <fieldset>
        <center>
            <label>
                Copyright © 2017
            </label>
        </center>
    </fieldset>
</body>
</html>