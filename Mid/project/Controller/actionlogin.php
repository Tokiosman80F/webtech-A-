
<?php 

$usererror="";
$passerror="";
$username="";
$pass="";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_REQUEST["uname"]))
        {
            $usererror="Fillup the  Username";
        }
        else
        {
            $username=$_REQUEST["username1"];
        }
        if(empty($_REQUEST["password1"]))
        {
            $passerror="fillup the password";
        }
        else
        {
            $pass=$_REQUEST["password1"];
        }

    }

    if(isset($_POST['submit']))
{
    $username = $_POST['username1'];
    $pass = $_POST['password1'];

    $file = fopen("../Data/test.txt","w+") or die ("file not open");
    $s = $username.",".$pass;
    fputs($file,$s) or die("Data not wirte");
    fclose($file);
?>

