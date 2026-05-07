<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Questions</title>
    <link rel="stylesheet" href="./public/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                        <h1 class="heading">Questions</h1>

                <?php
                include('./configuration/db.php');

            if(isset($_GET["c-id"])){
                $query = "SELECT * FROM questions where category_id=$cid";

            }else if(isset($_GET["u-id"])){
                $query = "SELECT * FROM questions where user_id=$uid";
                
            }else if(isset($_GET["latest"])){
                $query = "SELECT * FROM questions order by id desc";
                
            }else if(isset($_GET["search"])){
                $query = "SELECT * FROM questions where 'title' LIKE '%$search%' ";
                
            }else{
                $query = "SELECT * FROM questions";
                }
                $result = $conn->query($query);
                foreach ($result as $row) {
                    $title = $row['title'];
                    $id = $row['id'];
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