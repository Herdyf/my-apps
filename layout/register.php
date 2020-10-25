<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome !</title>
    <link rel="stylesheet" href="../nav.css">
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">

</head>

<body>
    <?php require_once 'nav/navbar.php'; ?>
    <div class="container">
        <div class="row">


            <div class="col">
                <img src="../img/login.jpg " alt="login">
            </div>


            <form action="register.php" method="post">
                <div class="form-group">



                    <input id="name" class="form-control" type="text" name="name" placeholder="Name">

                    <input id="email" class="form-control" type="email" name="email" placeholder="Email">

                    <input id="password" class="form-control" type="password" name="password" placeholder="Password">

                    <input id="password2" class="form-control" type="password" name="password2" placeholder="Password">
                </div>
                <button type="submit">register</button>
            </form>
        </div>
    </div>
    <script src="../script.js"></script>
</body>

</html>