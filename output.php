<?php

if ($_SERVER["REQUEST_METHOD"]== "POST"){
$username =$_POST["Username"];
$email =$_POST["Email"];
$password1 =$_POST["password1"];
$confirmpassword =$_POST["confirm-password"];



if (trim($username) =="" || empty ($username)){

    echo "USERNAME is empty";

} else {

    echo"the username of user is ". $_POST["Username"]."<br>";
}

if (trim($password1) ==trim($confirmpassword)){
    header("location: demo.php?success=Tama ang Password i love you");
}else{
    header("location: demo.php?error=Maling Password");
}

} else {
    echo"invalid method type";

}
?> 