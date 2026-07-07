<?php

$email = $_POST['email'];
$password = $_POST['password'];

if($email=="admin@gmail.com" && $password=="123456")
{
    echo "<h2>Login Successful ✅</h2>";
    echo "<a href='index.php'>login</a>";
}
else
{
    echo "<h2>Invalid Email or Password ❌</h2>";
    echo "<a href='login.html'>Try Again</a>";
}

?>