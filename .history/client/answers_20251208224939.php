<div class="container">
   <h5>Answers</h5> 
   <?php
$query="select * from answers where question_id=$questionid ";
$result=$conn->query($query);
foreach($result as $row){
   echo $answer=$row['answer'];
}
   ?>
</div>