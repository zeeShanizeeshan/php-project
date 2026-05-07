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
        <?php
        include('./configuration/db.php');
        $query = "SELECT * FROM questions";
        $result = $conn->query($query);
        foreach($result as $row){
            $title = $row['title'];
            echo "<div class='question-list'>$title</div>";
        }
        ?>
    </div>
</body>
</html>
