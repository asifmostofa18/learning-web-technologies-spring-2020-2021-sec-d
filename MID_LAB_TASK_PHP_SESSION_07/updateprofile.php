<?php
    session_start();    
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['gender']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $date = $_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        for($i=0;$i<strlen($name);$i++)
        {
            if(!((ord($name[$i]) >= 97 && ord($name[$i]) <= 122)) && !((ord($name[$i]) >= 65 && ord($name[$i]) <= 90)) && !(ord($name[$i]) == 32))
            {
                echo 'Name can only be alphabetical';break;
                return;
            }
        }

        $atSymbol=false;
        $atSymbolLocation = 0;
        $period=false;
        $periodLocation = 0;

        for($i=0;$i<strlen($email);$i++)
        {
            if($email[$i] == '@')
            {
                $atSymbol = true;
                $atSymbolLocation = $i;
            }
            if($email[$i] == '.')
            {
                $period = true;
                $periodLocation = $i;
            }
        }
        if(!($atSymbol == true && $period == true && $atSymbolLocation < $periodLocation))
        {
            echo "Email must contain a '@' and '.'";
            return;
        }
        echo "Registered successfully!";
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['gender'] = $gender;
        $_SESSION['date'] = $date;
        $_SESSION['month'] = $month;
        $_SESSION['year'] = $year;

        $_SESSION['flag'] = true;
        
        header('location: profile.php');
    }
?>