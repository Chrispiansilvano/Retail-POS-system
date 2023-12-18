<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./cashierLogin.css">
</head>

<body>
    <!-- <?php include('../../header.php') ?> -->
    <div class="header">
        <div class="logo">
            <img src="../../../sources/images/X_logo.png" alt="logo" height="50px" width="50px">
        </div>
        <div class="headings">
            <h3>Retail Pos system</h3>
        </div>
    </div>
    <div class="login-form">
        <h2>Welcome</h2>
        <form action="../../cashier/index.php" method="post" autocomplete="off">


            <input type="text" name="email" placeholder="email" value="">
            <!-- <span class="text-danger"></span> -->
            <input type="password" name="password" placeholder="Password">
            <!-- <span class="text-danger"></span> -->
            <input type="submit" value="login">
            <br>
            <br>
            <a href="../Signup/cashierSignup.php" style="color: white">I don't have an account? Signup</a>
        </form>
    </div>
    <?php include('../../Footer.php') ?>

</body>

</html>