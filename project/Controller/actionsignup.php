
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


$PatientName=$PatientGender=$PatientPhoneNumber=$PatientPassword=$PatientAddress=$PatientDOBError=$PatientState=$PatientUserName=$PatientRepeatPasswordError="";

if($_SERVER["REQUEST_METHOD"]=="POST")

{
    if(empty($_REQUEST["PatientName"]))
    {
        $PatientNameError="Fill up patient name ";
    }
    else
    {
        $PatientName=$_REQUEST["PatientName"];
    }

    
    if(empty($_REQUEST["PatientGender"]))
    {
        $PatientGenderError="Fill up patient gender ";
    }
    else
    {
        $PatientGender=$_REQUEST["PatientGender"];
    }

    
    if(empty($_REQUEST["PatientPhoneNumber"]))
    {
        $PatientPhoneNumberError="Fill up patient phone number";
    }
    else
    {
        $PatientPhoneNumber=$_REQUEST["PatientPhoneNumber"];
    }
    
    if(empty($_REQUEST["PatientEmail"]))
    {
        $PatientEmailError="Fill up patient email ";
    }
    else
    {
        $PatientEmail=$_REQUEST["PatientEmail"];
    }

    
    if(empty($_REQUEST["PatientPassword"]))
    {
        $PatientPasswordError="Fill up patient password ";
    }
    else
    {
        $PatientPassword=$_REQUEST["PatientPassword"];
    }

    
    if(empty($_REQUEST["PatientAddress"]))
    {
        $PatientAddressError="Fill up patient Address ";
    }
    else
    {
        $PatientAddress=$_REQUEST["PatientAddress"];
    }


    
    if(empty($_REQUEST["PatientDOB"]))
    {
        $PatientDOBError="Fill up patient DOB ";
    }
    else
    {
        $PatientDOB=$_REQUEST["PatientDOB"];
    }
    
    
    if(empty($_REQUEST["PatientUserName"]))
    {
        $PatientUserNameError="Fill up patient User Name ";
    }
    else
    {
        $PatientUserName=$_REQUEST["PatientUserName"];
    }

    
    if(empty($_REQUEST["PatientRepeatPassword"]))
    {
        $PatientRepeatPasswordError="Fill up again ";
    }
    else
    {
        $PatientRepeatPassword=$_REQUEST["PatientRepeatPassword"];
    }
}

?>
