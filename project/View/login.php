
<?php 

$usererror="";
$passerror="";
$username="";
$pass="";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_REQUEST["username1"]))
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

    $file = fopen("../Data/login.txt","w+") or die ("file not open");
    $s = $username.",".$pass;
    fputs($file,$s) or die("Data not wirte");
    fclose($file);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
  
    <center>
            <h1>Welcome</h1>
            <p> <b>Create or Login to our system</b></p>

            <form action="" method="POST">
           <b>User Name :</b>  
            <input type="text" name="username1" value="" placeholder="Enter your USERNAME..." required >
            <?php 
                echo $usererror;
            ?>
            <br><br>
            <b>Pass-Word :</b> 
            <input type="password" name="password1" value="" placeholder="Enter PASSWORD.." required>
            <?php 
                echo "  ".$passerror;
            ?>
            <br><br>
            
            <button type="button" onClick="document.location.href='/project'">Cancel</button>
         <button type="button" onClick="document.location.href='/project/View/signup.php'">Sign Up</button>
            <input type="submit" name="submit" value="LOGIN"/><br>
            </form>
            <hr>

            <?php echo"name=".$username; ?><br>
            <?php echo"password=".$pass; ?>

            
    </center>
    
</body>
</html>