<div class="container">
    <h1 class="heading">Questions</h1>
    <?php
include('./configuration/db.php');
$query="select * from questions";
$result=$conn->query($query);
foreach($result as $row){
$title= $row['title'];
echo "<div>$title</div>"
}
    ?>

</div>