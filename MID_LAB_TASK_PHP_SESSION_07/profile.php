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
    <title>PROFILE</title>
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
                    <legend><b>PROFILE</b></legend>
                    <table width='100%'>
                        <tr>
                            <td>
                                Name:
                            </td>
                            <td>
                                <?php echo $_SESSION['name']; ?>    
                            </td>
                            <td rowspan="8" align="center">
                                <img src='./images/user.png' alt="not available" height="150px"/>
                                <br><a href='#'>Change Picture</a>
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
                                <?php echo $_SESSION['email']; ?>    
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
                                <?php echo $_SESSION['gender']; ?>    
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Date of Birth:
                            </td>
                            <td>
                                <?php echo $_SESSION['date']."/".$_SESSION['month']."/".$_SESSION['year']; ?>    
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <hr>
                                <a href='./editprofile.php'>Edit Profile</a>
                            </td>
                        </tr>
                    </table>
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