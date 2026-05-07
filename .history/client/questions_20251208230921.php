<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Questions</title>
    <link rel="stylesheet" href="./public/style.css">
</head>
<body>
    <div class="container">
        <h1 class="heading">Questions</h1>
<div class="row">
        <div class="col-8">
        <?php
        include('./configuration/db.php');
        $query = "SELECT * FROM questions";
        $result = $conn->query($query);
        foreach($result as $row){
            $title = $row['title'];
            $id=$row['id'];
            echo "<div class='row question-list'>
            <h4><a href='?q-id=$id'>$title</a></h4>
            </div>";
        }
        ?>
        </div>

        <div class="col-4">
<?php
include("categorylist.php");
        ?>
        </div>
</div>
        
    </div>
</body>
</html>
