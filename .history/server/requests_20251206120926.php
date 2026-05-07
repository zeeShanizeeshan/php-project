<?php

session_start();
include('../configuration/db.php');
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $user = "Insert into signup
    (username,email,password,address)
    values('$username','$email','$password','$address');";

    $result = $conn->query($user);

    if ($result) {
        $_SESSION["user"] = [
            "username" => $username,
            "email" => $email,
        ];
        header("location: /phppractice");
    } else {
        echo "new User not registered";
    }
}else if (isset($_POST['login'])){
print_r($_POST);
}
?>
