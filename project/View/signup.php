<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP</title>
</head>
<body>

<?php 

$PatientNameError="";
$PatientGenderError="";
$PatientPhoneNumberError="";
$PatientPasswordError="";
$PatientAddressError="";
$PatientStateError="";
$PatientDOBError="";
$PatientUserNameError="";
$PatientRepeatPasswordError="";
$PatientEmailError="";


$PatientName=$PatientGender=$PatientPhoneNumber=$PatientPassword=$PatientAddress=$PatientDOBError=$PatientState=$PatientUserName=$PatientRepeatPassword=$PatientEmail="";

if($_SERVER["REQUEST_METHOD"]=="POST")

{
    if(empty($_REQUEST["patientname1"]))
    {
        $PatientNameError="Fill up patient name ";
    }
    else
    {
        $PatientName=$_REQUEST["patientname1"];
    }

    
    if(empty($_REQUEST["gender1"]))
    {
        $PatientGenderError="Fill up patient gender ";
    }
    else
    {
        $PatientGender=$_REQUEST["gender1"];
    }

    
    if(empty($_REQUEST["phonenumber1"]))
    {
        $PatientPhoneNumberError="Fill up patient phone number";
    }
    else
    {
        $PatientPhoneNumber=$_REQUEST["phonenumber1"];
    }
    
    if(empty($_REQUEST["email1"]))
    {
        $PatientEmailError="Fill up patient email ";
    }
    else
    {
        $PatientEmail=$_REQUEST["PatientEmail"];
    }

    
    if(empty($_REQUEST["password2"]))
    {
        $PatientPasswordError="Fill up patient password ";
    }
    else
    {
        $PatientPassword=$_REQUEST["password2"];
    }

    
    if(empty($_REQUEST["address2"]))
    {
        $PatientAddressError="Fill up patient Address ";
    }
    else
    {
        $PatientAddress=$_REQUEST["address2"];
    }


    
    if(empty($_REQUEST["dob1"]))
    {
        $PatientDOBError="Fill up patient DOB ";
    }
    else
    {
        $PatientDOB=$_REQUEST["dob1"];
    }
    
    
    if(empty($_REQUEST["username"]))
    {
        $PatientUserNameError="Fill up patient User Name ";
    }
    else
    {
        $PatientUserName=$_REQUEST["username"];
    }

    
    if(empty($_REQUEST["repeatpassword2"]))
    {
        $PatientRepeatPasswordError="Fill up again ";
    }
    else
    {
        $PatientRepeatPassword=$_REQUEST["repeatpassword2"];
    }
}

if(isset($_POST['submit']))
{
    $PatientName = $_POST['patientname1'];
    $PatientGender = $_POST['gender1'];
    $PatientPhoneNumber = $_POST['phonenumber1'];
    
    $PatientPassword = $_POST['password2'];
     $PatientAddress = $_POST['address2'];
      $PatientDOB = $_POST['dob1'];
       $PatientUserName = $_POST['username'];
          $PatientRepeatPassword = $_POST['repeatpassword2'];
            $PatientState = $_POST['state2'];


    $file = fopen("../Data/signup.txt","w+") or die ("file not open");
    $s = $PatientName.",".$PatientGender.",".$PatientDOB.",".$PatientPhoneNumber.",".$PatientAddress.",".$PatientState.",".$PatientUserName.",".$PatientPassword.",".$PatientRepeatPassword;
    fputs($file,$s) or die("Data not wirte");
    fclose($file);
}



?>

<center>


    <h2>Sign Up Form</h2>
   <b><p>Fill up this form to create an account</p></b> 
    <form action="" method="POST">

   <b> Name:</b>
   <?php echo $PatientNameError; ?>
    <input type="text" name="patientname1" placeholder="Patient Name" value="" required> <br><br>
        <div> <b>Gender : </b>
        <?php echo $PatientGenderError; ?>
    <select name="gender1" id="">
    <option value="">Male</option>
    <option value="">Female</option>
    </select> 
    <b>    Date of Birth : </b>
    <?php echo $PatientDOBError; ?>
    <input type="date" name="dob1" id="" value="" require placeholder="DD/MM/YY">  
    </div><br><br>
    
   <br>
   <b> Email:</b>
    
    <?php echo $PatientEmailError; ?>
    <input type="email" name="email1" placeholder="Email" value="" required> <br><br><br>
    
     
    <b>Phone Number :</b>
    <?php echo $PatientPhoneNumberError; ?>
    <input type="text" name="phonenumber1" placeholder="Phone Number" value="" required> <br><br>
   <div> <b>Address :</b>
   <?php echo $PatientAddressError; ?>
    <input type="text" name="address2" id="" size="50" placeholder="Address" required><br><br> 
     
    <b>State:</b>
    <?php echo $PatientStateError; ?>
    <input type="text" name="state2" placeholder="State" required><br> <br>
    
        </div> <br><br>
    <b>User Name :</b>
    <?php echo $PatientUserNameError; ?>
    <input type="text" name="" id="" name="username" value="" placeholder="Username" required><br><br>
    <b>Password :</b>
    <?php echo $PatientPasswordError; ?>
    <input type="password" name="" id="" name="password2" placeholder="Password" required> <br><br>
    <b>Repeat Password:</b>
    <?php echo $PatientRepeatPasswordError; ?>
    <input type="text" name="" id="" name="repeatpassword2" placeholder="RepeaT Password" required> <br><br>

    <button type="button" onClick="document.location.href='/project'">CANCEL</button>
      <button type="button" onClick="document.location.href='/project/View/login.php">LOGIN</button>
      <input type="submit" name="submit" value="SUBMIT">

    </form>

</center>
    
</body>
</html>