<?php
include('../configuration/db.php');
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $user = $conn->prepare("Insert into 'signup'
    ('id','username','email','password','address')
    values(NULL,'$username','$email','$password','$address');
    ");

    $result = $user->execute();

    if ($result) {
        echo "new User registered";
    } else {
        echo "new User not registered";
    }
}
?>
