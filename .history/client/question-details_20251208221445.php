<div class="container">
    <h1 class="heading">Question</h1>
    <div class="col-8">
        <?php
        include('./configuration/db.php');
        $query = "select * from questions where id=$ questionid";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        echo "<h4 class='margin-bottom question-title'>Question : " . $row['title'] . "</h4>
         <p class='margin-bottom'>" . $row['description'] . "</p>";
         include("answers.php");
        ?>
        <form action="./server/requests.php" method="post">
            <input type="hidden" name="question_id" value="<?php echo $questionid ?>">
            <textarea name='answer' class='form-control margin-bottom' placeholder='Type your answer...'></textarea>
            <button class="btn btn-primary">Submit Answer</button>
        </form>
    </div>
</div>