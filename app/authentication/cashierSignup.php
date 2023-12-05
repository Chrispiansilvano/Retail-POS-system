<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="./cashierSignup.css">

</head>

<body>
    <?php include('../header.php') ?>
    <div class="signup-form">
        <h2>Welcome Cashier</h2>
        <form action="" method="post" autocomplete="off">




            <input type="text" name="name" placeholder="Name" value="">
            <!-- <span class="text-danger"></span> -->
            <input type="email" name="email" placeholder="Email" value="">
            <!-- <span class="text-danger"></span> -->
            <input type="password" name="password" placeholder="Password" value="">
            <!-- <span class="text-danger"></span> -->
            <input type="password" name="cpassword" placeholder="Confirm Password" value="">
            <!-- <span class="text-danger"></span> -->
            <input type="submit" value="Sign Up">
            <br>
            <br>
            <a href="./cashierLogin.php" style="color: white">Already have an account? Login</a>
        </form>
    </div>
    <?php include('../Footer.php') ?>
</body>

</html>