<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php include('../header.php') ?>
    <div class="columns">
        <article class="card">
            <a href="../authentication/cashierLogin.php">
                <div class="mycard">
                    <h1>Cashier</h1>
                </div>
            </a>

        </article>
        <article class="card">
            <a href="../authentication/managerLogin.php">
                <div class="mycard">
                    <h1>Manager</h1>
                </div>
            </a>

        </article>
        <article class="card">
            <a href="../authentication//AdminLogin.php">
                <div class="mycard">
                    <h1>Adminstrator</h1>
                </div>
            </a>

        </article>
    </div>
    <?php include('../Footer.php') ?>

</body>

</html>