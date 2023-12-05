<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./managerLogin.css">
</head>

<body>
<?php include('../header.php') ?>
    <div class="login-form">
        <h2>Welcome Manager</h2>
        <form action="" method="post" autocomplete="off">
            
            
            <input type="text" name="email" placeholder="email" value="">
            <!-- <span class="text-danger"></span> -->
            <input type="password" name="password" placeholder="Password">
            <!-- <span class="text-danger"></span> -->
            <input type="submit" value="login">
            <br>
            <br>
            <a href="./managerSignup.php" style="color: white">I don't have an account? Signup</a>
        </form>
    </div>
    <?php include('../Footer.php') ?>
</body>

</html>