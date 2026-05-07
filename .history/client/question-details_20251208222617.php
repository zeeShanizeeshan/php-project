<div class="container">
    <h1 class="heading">Question</h1>

    <div class="col-8">
        <?php
        include('./configuration/db.php');

        // Question id comes from index.php via ?q-id=
        if (isset($questionid)) {

            $query  = "SELECT * FROM questions WHERE id='$questionid'";
            $result = $conn->query($query);

            if ($result && $result->num_rows > 0) {

                $row = $result->fetch_assoc();

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
                placeholder="Type your answer..."
            ></textarea>

            <button
                type="submit"
                name="submit_answer"
                class="btn btn-primary"
            >
                Submit Answer
            </button>
        </form>
    </div>
</div>
