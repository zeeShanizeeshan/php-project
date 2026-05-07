<div class="container">
    <h1 class="heading">Question</h1>
   <div class="col-8">
   <?php
include('./configuration/db.php');
$query="select * from questions where id=$questionid";
$result=$conn->query($query);
$row=$result->fetch_assoc();
echo "<h4 class='margin-bottom'>".$row['title']."</h4>
<p class='margin-bottom'>".$row['description']."</p>";
?>
<textarea class="form-control" class='margin-bottom' placeholder="Type your answer..."></textarea>
<button class="btn btn-primary">Submit Answer</button>
</div>
</div>