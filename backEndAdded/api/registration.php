<?php

$file=fopen('C:/xampp/htdocs/WebtecProject/backEndAdded/db/userInfo.txt','a') or die("fle open error");
if(isset($_REQUEST["dateOfBirth"])){
    $_dateOfBirth = $_REQUEST["dateOfBirth"];
}
else{
    $_dateOfBirth = " ";
}
if(isset($_REQUEST["isAdmin"]) &&
    $_REQUEST["isAdmin"] == 'isAdmin')
{
    $_isAdmin = "admin";
}
else
{
    $_isAdmin = "notAdmin";
}
if(isset($_REQUEST["isDonner"]) &&
    $_REQUEST["isDonner"] == 'isDonner')
{
    $_isDonner = "donner";
}
else
{
    $_isDonner = "notDonner";
}
fwrite($file,"\r\n");

fwrite($file,$_REQUEST["name"]);
fwrite($file," ".$_REQUEST["userName"]);
fwrite($file," ".$_REQUEST["emailId"]);
fwrite($file," ".$_REQUEST["password"]);
fwrite($file," ".$_dateOfBirth);
fwrite($file," ".$_REQUEST["contactNo"]);
fwrite($file," ".$_REQUEST["presentAddress"]);
fwrite($file," ".$_REQUEST["permanentAddress"]);
fwrite($file," ".$_REQUEST["disabilities"]);
fwrite($file," ".$_REQUEST["gender"]);
fwrite($file," ".$_isAdmin);
fwrite($file," ".$_isDonner);
fwrite($file," ".$_REQUEST["bloodGroup"]);


header("Location: http://web.life.org/login.php");

//fclose($file);

?>
