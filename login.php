<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Alpha - Login</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="./s6css.css">
    <link rel="stylesheet" type="text/css" href="./main.css">
</head>

<body class="s6-center s6-margin-top s6-displaycontainer">
    <div class=" s6-cyan s6-center s6-display-middle main s6-round-large">
        <p class="s6-xlarge">Login </p>
        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div>
                <input type="text" class="input" name="username" autocomplete="off" placeholder="username">
            </div>
            <div>
                <input type="password" class="input" name="password" autocomplete="off" placeholder="password">
            </div><br>
            <div>
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p>
                Not yet a member? <a href="register.php" class="s6-hover-text-green">Sign up</a>
            </p>
        </form>
    </div>
</body>

</html>