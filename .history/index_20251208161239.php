<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Discuss Project</title>
    <?php include('./client/commonFiles.php') ?>
</head>

<body>

    <?php
    session_start();
    include('./client/header.php');

    if (isset($_GET['signup']) && !isset($_SESSION['user'])) {
        include('./client/signup.php');
    } else if (isset($_GET['login']) && !isset($_SESSION['user'])) {
        include('./client/login.php');
    } else if (isset($_GET['ask']) && isset($_SESSION['user'])) {
        include('./client/ask.php');
    }
    ?>

</body>

</html>