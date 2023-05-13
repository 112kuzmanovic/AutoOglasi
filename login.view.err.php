<?php require "partials/head.php" ?>

<h3 class="text-center" style="color:red;margin:auto">Incorect email or password!! Please try again...</h3>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="login.php" method="POST">
                <input type="email" name="email" placeholder="email" class="form-control"><br>
                <input type="password" name="password" placeholder="password" class="form-control"><br>
                <button type="submit" class="btn btn-info form-control">Login</button>
            </form>
        </div>
    </div>
</div>






<?php require "partials/footer.php" ?>