<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>

    <?php
    
        $idError="";
        if($_SERVER["REQUEST_METHOD"]=="POST")
       {
            if(empty($_REQUEST["id"]))
         {
            $idError="id need";
         }
        else{
            echo "id is " . $_REQUEST["id"]   ;
        }
    }
    echo "<br>";

    $nameError="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_REQUEST["name"]))
        {
            $nameError= "name needed";
        }
        else{
            echo "name is ". $_REQUEST["name"];
        }
    }
    echo "<br>";

    $genderError="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_REQUEST["gender"])){
            $genderError="gender required";
        }
        else{
            echo "gender is ".$_REQUEST["gender"];
        }
    }
    echo "<br>";

    $emailError="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_REQUEST["email"]))
        {
            $emailError="email needed";
        }
        else{
            echo "email is ". $_REQUEST["email"];
        }
    }
    echo "<br>";

    $addressError="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_REQUEST["address"]))
            {
                $addressError="address needed";
            }
            else
            {
                echo"address is ". $_REQUEST["address"];
            }
    }
    echo "<br>";

    $cityError="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_REQUEST["city"]))
        {
            $addressError="city needed";
        }
        else
        {
            echo"address is ". $_REQUEST["city"];
        }
    }
  echo "<br>";

    $stateError="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_REQUEST["state"]))
        {
            $addressError="state needed";
        }
        else
        {
            echo"address is ". $_REQUEST["state"];
        }
    }
    echo "<br>";


    $countryError="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_REQUEST["country"]))
        {
            $addressError="country needed";
        }
        else
        {
            echo"address is ". $_REQUEST["country"];
        }
    }
    
    ?>

     <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >

    <label for="id">Student Id</label><br>
    <input type="text" name="id" required >
    <span>  <?php echo $idError; ?><br>
    </span>

    <label for="name">Student Name</label><br>
    <input type="text" name="name" required ><br>
    <span><?php echo $nameError; ?></span>
    <br>

    <label for="gender">Gender</label><br>
    <input type="checkbox" name="gender" value="male" required  >
    Male <br>
    <input type="checkbox" name="gender" value="female"required  >
    Female <br>
    <span><?php echo $genderError; ?></span>
    <br>
    
    <br>
    <label for="email">Student Email</label><br>
    <input type="text" name="email" value="@" required><br>
    <span><?php echo $emailError; ?></span>
    <br>

    <br>
<label for="address">Address</label><br>
<textarea type="text" name="address" required ></textarea><br>

<label for="street Address">Street Address</label><br>
<textarea type="text" name="ssaddress" required  ></textarea><br>

<label for="address line 2">Address Line 2</label><br>
<input type="text" name="sal2"  required  ><br>
<span><?php echo $addressError; ?></span>
<br>

<label for="city">City</label>
<input type="text" name="city" required >
<span><?php $cityError; ?></span>

<label for="state">State/Province/Region</label>
<input type="text" name="state" required ><br>
<span><?php $stateError;?></span>

<label for="zip">Zip/Postal Code</label>
<input type="text" name="zip" required >
<span><?php $zipError;?></span><br>

<select name="country">
<option value="Bangladesh">Bangladesh</option>
<option value="Pakistan">Pakistan</option>
<option value="India">India</option>
</select>
<span><?php $countryError; ?></span><br>
<label for="country">Country</label>

<br>
<input type="submit" name="submit" value="Submit">


</form>
    
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>

    <?php
    
        $idError="";
        if($_SERVER["REQUEST_METHOD"]=="POST")
       {
            if(empty($_REQUEST["id"]))
         {
            $idError="id need";
         }
        else{
            echo "id is " . $_REQUEST["id"]   ;
        }
    }
    echo "<br>";

    $nameError="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_REQUEST["name"]))
        {
            $nameError= "name needed";
        }
        else{
            echo "name is ". $_REQUEST["name"];
        }
    }
    echo "<br>";

    $genderError="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_REQUEST["gender"])){
            $genderError="gender required";
        }
        else{
            echo "gender is ".$_REQUEST["gender"];
        }
    }
    echo "<br>";

    $emailError="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_REQUEST["email"]))
        {
            $emailError="email needed";
        }
        else{
            echo "email is ". $_REQUEST["email"];
        }
    }
    echo "<br>";

    $addressError="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_REQUEST["address"]))
            {
                $addressError="address needed";
            }
            else
            {
                echo"address is ". $_REQUEST["address"];
            }
    }
    echo "<br>";

    $cityError="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_REQUEST["city"]))
        {
            $addressError="city needed";
        }
        else
        {
            echo"address is ". $_REQUEST["city"];
        }
    }
  echo "<br>";

    $stateError="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_REQUEST["state"]))
        {
            $addressError="state needed";
        }
        else
        {
            echo"address is ". $_REQUEST["state"];
        }
    }
    echo "<br>";


    $countryError="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_REQUEST["country"]))
        {
            $addressError="country needed";
        }
        else
        {
            echo"address is ". $_REQUEST["country"];
        }
    }
    
    ?>

     <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >

    <label for="id">Student Id</label><br>
    <input type="text" name="id" required >
    <span>  <?php echo $idError; ?><br>
    </span>

    <label for="name">Student Name</label><br>
    <input type="text" name="name" required ><br>
    <span><?php echo $nameError; ?></span>
    <br>

    <label for="gender">Gender</label><br>
    <input type="checkbox" name="gender" value="male" required  >
    Male <br>
    <input type="checkbox" name="gender" value="female"required  >
    Female <br>
    <span><?php echo $genderError; ?></span>
    <br>
    
    <br>
    <label for="email">Student Email</label><br>
    <input type="text" name="email" value="@" required><br>
    <span><?php echo $emailError; ?></span>
    <br>

    <br>
<label for="address">Address</label><br>
<textarea type="text" name="address" required ></textarea><br>

<label for="street Address">Street Address</label><br>
<textarea type="text" name="ssaddress" required  ></textarea><br>

<label for="address line 2">Address Line 2</label><br>
<input type="text" name="sal2"  required  ><br>
<span><?php echo $addressError; ?></span>
<br>

<label for="city">City</label>
<input type="text" name="city" required >
<span><?php $cityError; ?></span>

<label for="state">State/Province/Region</label>
<input type="text" name="state" required ><br>
<span><?php $stateError;?></span>

<label for="zip">Zip/Postal Code</label>
<input type="text" name="zip" required >
<span><?php $zipError;?></span><br>

<select name="country">
<option value="Bangladesh">Bangladesh</option>
<option value="Pakistan">Pakistan</option>
<option value="India">India</option>
</select>
<span><?php $countryError; ?></span><br>
<label for="country">Country</label>

<br>
<input type="submit" name="submit" value="Submit">


</form>
    
</body>
>>>>>>> 2f1ff0cc3b51a480b7a2fd3e9d2da0247dd4492c
</html>