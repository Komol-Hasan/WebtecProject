<?php
    session_start();
    $_usersList = fopen("C:/xampp/htdocs/WebtecProject/backEndAdded/db/userInfo.txt", "r") or die("Unable to open file!");
    $_isUser = 0;
    $_userName = $_REQUEST["userName"];
    $_password =$_REQUEST["password"];
    try{

        while($_users = fgets($_usersList)){
            $_user = explode(" ",$_users);
            if($_user[1] == $_userName && $_user[3] == $_password)
            {
                $_isUser = 1;
                $_SESSION["userName"]=$_REQUEST["userName"];
                $_SESSION["password"]=$_REQUEST["password"];
                //header("Location: http://web.life.org/index.php");

            }
        }
    }
    catch (Exception $e){

    }
    if($_isUser == 0)
    {
        echo "<h3>Wrong username and password.</h3>";
        echo "<h3>Please try again... "?><a href="http://web.life.org/login.php">Login here</a><?php echo "</h3>";
    }
    else{
        echo "<h3>Log in successful...</h3>";
        echo "<h3>Please go to home... "?><a href="http://web.life.org/index.php">Home</a><?php echo "</h3>";
    }
    //fclose($myfile);
?>