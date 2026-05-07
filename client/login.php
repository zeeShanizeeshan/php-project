<div class="container">
    <h1 class="heading">Login</h1>
    <form action="./server/requests.php" method="post">

        <div class="col-6 offset-sm-3 margin-bottom">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Your email">
        </div>

        <div class="col-6 offset-sm-3 margin-bottom ">
            <label for="Password" class="form-label">Password</label>
            <input type="Password" name="password" class="form-control" id="Password" placeholder="Your Password">
        </div>

        <div class="col-6 offset-sm-3">
            <button type="submit" name="login" class="btn btn-primary">Login</button>

        </div>
    </form>
</div>