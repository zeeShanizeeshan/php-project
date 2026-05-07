<?php
session_start();
include('../configuration/db.php');

if (isset($_POST['signup'])) {

    $username = $conn->real_escape_string($_POST['username']);
    $email    = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $address  = $conn->real_escape_string($_POST['address']);

    $query = "INSERT INTO signup (username,email,password,address)
              VALUES ('$username','$email','$password','$address')";

    $result = $conn->query($query);

    if ($result) {
        $_SESSION["user"] = [
            "username" => $username,
            "email" => $email,
        ];
        header("Location: /phppractice");
        exit;
    } else {
        echo $conn->error;
    }
} else if (isset($_POST['login'])) {

    $email    = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $query = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
    $result = $conn->query($query);

    if ($result && $result->num_rows == 1) {

        $row = $result->fetch_assoc();

        $_SESSION["user"] = [
            "username" => $row['username'],
            "email" => $row['email'],
        ];
        header("Location: /phppractice");
        exit;
    } else {
        echo "Invalid email or password";
    }
} else if (isset($_GET['logout'])) {
    session_unset();
    header("location: /phppractice");
} else if(isset($_POST['ask'])){
    print_r($_POST);
    print_r($_SESSION);
}
?>
