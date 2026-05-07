<div class="container">
    <h1 class="heading">Question</h1>
    <div class="row">
        <div class="col-8">
            <?php
            include('./configuration/db.php');

            // Question id comes from index.php via ?q-id=
            if (isset($questionid)) {

                $query  = "SELECT * FROM questions WHERE id='$questionid'";
                $result = $conn->query($query);

                if ($result && $result->num_rows > 0) {

                    $row = $result->fetch_assoc();
                    $cid = $row['category_id'];

                    echo "
                    <h4 class='margin-bottom question-title'>
                        {$row['title']}
                    </h4>
                    <p class='margin-bottom'>
                        {$row['description']}
                    </p>
                ";

                    // show answers
                    include('./client/answers.php');
                }
            }
            ?>

            <form action="./server/requests.php" method="post">
                <input type="hidden" name="question_id" value="<?php echo $questionid; ?>">

                <textarea
                    name="answer"
                    class="form-control margin-bottom"
                    placeholder="Type your answer..."></textarea>

                <button
                    type="submit"
                    name="submit_answer"
                    class="btn btn-primary">
                    Submit Answer
                </button>
            </form>
        </div>
        <div class="col-4">
            <?php
            $categoryQuery="select name from category where id=$cid";
            $categoryResult=$conn->query($categoryQuery);
            $categoryRow=$categoryResult->fetch_assoc();
            echo "<h1>".$categoryRow['name']."</h1>";

            $query="select * from questions where category_id=$cid and id !=$questionid";
            $result=$conn->query($query);
            foreach($result as $row){
$id=$row['id'];
$title=$row['title'];
                echo "<div class='question-list'>
                <h4><a href=?q-id=$id>$title</a></h4>
                </div>";
            }
            ?>
        </div>
    </div>
</div>