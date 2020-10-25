<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../login.css">
    <link rel="stylesheet" href="../nav.css">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">

</head>
<?php require_once 'nav/navbar.php'; ?>

<body>
    <div class="container">
        <div class="row">
            <h5>Login</h5>
            <form class="login" action="#" method="post">
                <input type="text" name="user">
                <input type="password" name="password">
                <button type="submit">login</button>
            </form>
        </div>
    </div>

</body>

</html>