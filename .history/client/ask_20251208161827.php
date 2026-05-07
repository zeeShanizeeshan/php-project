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
            <select class="form-control" name="category" id="category">
                <option value="">Mobile</option>
                <option value="">General</option>
                <option value="">Coding</option>
                <option value="">Laptop</option>
            </select>
        </div>

        <div class="col-6 offset-sm-3">
            <button type="submit" name="login" class="btn btn-primary">submit</button>

        </div>
    </form>
</div>