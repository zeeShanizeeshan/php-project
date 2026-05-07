<div class="container">
    <h1 class="heading">Ask A Question</h1>
    <form action="./server/requests.php" method="post">

        <div class="col-6 offset-sm-3 margin-bottom">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Your Question">
        </div>
 
        <div class="col-6 offset-sm-3 margin-bottom">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" placeholder="Enter Description"></textarea>
        </div>

        <div class="col-6 offset-sm-3 margin-bottom">
            <label for="category" class="form-label">Category</label>
            <?php  
            include('category.php');
            ?>
        </div>

        <div class="col-6 offset-sm-3">
            <button type="submit" name="ask" class="btn btn-primary">Submit questions</button>

        </div>
    </form>
</div>