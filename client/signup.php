<div class="container">
    <h1 class="heading">Sign Up</h1>
    <form method="post" action="./server/requests.php">

        <div class="col-6 offset-sm-3 margin-bottom ">
            <label for="username" class="form-label">User Name</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="username">
        </div>

        <div class="col-6 offset-sm-3 margin-bottom">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Your email">
        </div>

        <div class="col-6 offset-sm-3 margin-bottom ">
            <label for="Password" class="form-label">Password</label>
            <input type="Password" name="password" class="form-control" id="Password" placeholder="Your Password">
        </div>

        <div class="col-6 offset-sm-3 margin-bottom">
            <label for="address" class="form-label">Your Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Your address">
        </div>
        <div class="col-6 offset-sm-3">
            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>

        </div>
    </form>
</div>z