<?php
session_start();
include ("config/app.php");
include ("code/authentication_code.php");
include ("includes/header.php");
include ("includes/navbar.php");
?>

<main class="form-signin w-100 m-auto">
    <form action="" method="post">
        <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Register your account</h1>

        <?php include("message.php"); ?>
        <div class="form-floating my-2">
            <input type="fname" name="fname" class="form-control" id="floatingInput" placeholder="Enter your first name">
            <label for="floatingInput">First Name</label>
        </div>
        <div class="form-floating my-2">
            <input type="lname" name="lname" class="form-control" id="floatingInput" placeholder="Enter your last name">
            <label for="floatingInput">Last Name</label>
        </div>
        <div class="form-floating my-2">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating my-2">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input type="password" name="confirm_password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
            <label for="floatingPassword">Confirm Password</label>
        </div>
        <button class="btn btn-primary w-100 py-2" name="register_btn" type="submit">Register</button>
    </form>
</main>


<?php include ("includes/footer.php") ?>