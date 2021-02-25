<?php
    session_start();
    if(isset($_POST['current']) && isset($_POST['new']) && isset($_POST['confirmnew']))
    {
        if($_POST['current'] == $_POST['new'])
        {
            echo "New Password should not be same as the Current Password<br>";
        }
        if($_POST['new'] != $_POST['confirmnew'])
        {
            echo "New Password must match with the Retyped Password<br>";
        }

        if($_POST['new'] = $_POST['confirmnew'])
        {
            echo "Password Change Done Sir!!!!<br>";
        }
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
                    <legend><b>Change Password</b></legend>
                    <form action='./changepass.php' method='POST' >
                        <table width='100%'> 
                            <tr>
                                <td>
                                    Current Password:
                                </td>
                                <td>
                                    <input type="password" name='current'>

                
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    New Password:
                                </td>
                                <td>
                                    <input type="password" name='new'>

                
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Retype New Password:
                                </td>
                                <td>
                                    <input type="password" name='confirmnew'>

                
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


