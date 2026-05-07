<?php
session_start();
include('../configuration/db.php');

// --------------------- SIGNUP ---------------------
if (isset($_POST['signup'])) {

    $username = $conn->real_escape_string($_POST['username']);
    $email    = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $address  = $conn->real_escape_string($_POST['address']);

    $query = "INSERT INTO signup (username, email, password, address)
              VALUES ('$username', '$email', '$password', '$address')";

    $result = $conn->query($query);

    if ($result) {
        // Store user info in session
        $_SESSION["user"] = [
            "user_id"  => $conn->insert_id,
            "username" => $username,
            "email"    => $email
        ];

        header("Location: /phppractice");
        exit;
    } else {
        echo $conn->error;
    }
}

// --------------------- LOGIN ---------------------
else if (isset($_POST['login'])) {

    $email    = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $query = "SELECT id, username, email FROM signup 
              WHERE email='$email' AND password='$password'";
    $result = $conn->query($query);

    if ($result && $result->num_rows === 1) {

        $row = $result->fetch_assoc();

        $_SESSION["user"] = [
            "user_id"  => $row['id'],
            "username" => $row['username'],
            "email"    => $row['email']
        ];

        header("Location: /phppractice");
        exit;
    } else {
        echo "Invalid email or password";
    }
}

// --------------------- LOGOUT ---------------------
else if (isset($_GET['logout'])) {

    session_unset();
    session_destroy();

    header("Location: /phppractice");
    exit;
}

// --------------------- ASK QUESTION ---------------------
else if (isset($_POST['ask'])) {

    // Ensure user is logged in
    if (!isset($_SESSION['user'])) {
        echo "You must be logged in to ask a question.";
        exit;
    }

    $title       = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);
    $category_id = $conn->real_escape_string($_POST['category']);
    $user_id     = $_SESSION['user']['user_id'];

    $query = "INSERT INTO questions (title, description, category_id, user_id)
              VALUES ('$title', '$description', '$category_id', '$user_id')";

    $result = $conn->query($query);

    if ($result) {
        header("Location: /phppractice");
        exit;
    } else {
        echo $conn->error;
    }
}else if(isset($_POST['answer'])) {
    print_r($_POST);
}
?>