<?php
    session_start();
    if(isset($_POST['logusername']) && isset($_POST['logpassword']))
    {
        $username = $_POST['logusername'];
        $password = $_POST['logpassword'];

        for($i=0;$i<strlen($username);$i++)
        {
            if(!((ord($username[$i]) >= 97 && ord($username[$i]) <= 122)) 
            && !((ord($username[$i]) >= 65 && ord($username[$i]) <= 90))  
            && !((ord($username[$i]) >= 48 && ord($username[$i]) <= 57)) 
            && !($username[$i] == '.') && !($username[$i] == '-') && !($username[$i] == '_'))
            {
                echo 'Username can be only alphanumeric';break;
            }
        }

        if(strlen($username) < 2)
        {
            echo 'Username must be atleast 2 characters';
        }
        if(strlen($password) < 8)
        {
            echo 'Password must be atleast 8 characters';
        }

        $passflag=false;

        for($i=0;$i<strlen($password);$i++)
        {
            if(($password[$i] == '@' || 
            $password[$i] == '$' ||
            $password[$i] == '#' ||
            $password[$i] == '%')) 
            {
                $passflag=true;
            }
        }

        if($passflag == false)
        {
            echo 'Password must contain a @, $, % or #!';
        }

        if($username == $_SESSION['username'] && $password == $_SESSION['password'])
        {
            $_SESSION['flag'] = true;
            header('location: dashboard.php');
        }
        else
        {
            header('location: login.php');
        }
    }
?>

