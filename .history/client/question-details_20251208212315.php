<div class="container">
    <h1 class="heading">Question</h1>
    <?php
include('./configuration/db.php');
$query="select * from questions where id=$questionid";
$result=$conn->query($query);
$row=$result->fetch_assoc();
print_r($row);
    ?>
</div>