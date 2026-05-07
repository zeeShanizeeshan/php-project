<div class="container">
    <h1 class="heading">Question</h1>
    <?php
include('./configuration/db.php');
$query="select * from questions where id=$questionid";
$result=$conn->query($query);
$row=$result->fetch_assoc();
echo "<h4>".$row['title']."</h4>
<p>".$row['description']."</p>";
?>
<textarea class="form-control" placeholder="Type your answer..."></textarea>
<button class="btn btn-primary">Submit Answer</button>
</div>